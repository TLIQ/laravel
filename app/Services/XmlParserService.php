<?php


namespace App\Services;

use App\Models\News;
use Orchestra\Parser\Xml\Facade as XmlParser;
class XmlParserService
{
    public function parse(): array
    {

        $xml = XmlParser::load('http://www.cbsnews.com/latest/rss/world');
        $parse = $xml->parse([
            'news' => [
                'uses' => 'channel.item[title,link,description,pubDate]'
            ]
        ]);

        foreach ($parse['news'] as $item) {
            News::create([
               'title' =>  mb_substr($item['title'], 0, 48),
                'description' => mb_substr($item['description'], 0, 98),
                'text' => $item['description']
            ]);
        }
        return $parse;
    }
}
