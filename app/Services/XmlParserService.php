<?php


namespace App\Services;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Orchestra\Parser\Xml\Facade as XmlParser;
class XmlParserService
{
    public function parse( $link)
    {
        $xml = XmlParser::load($link);
//        $xml = XmlParser::load('https://news.yandex.ru/auto.rss');
        $parse = $xml->parse([
            'news' => [
                'uses' => 'channel.item[title,link,description,pubDate]'
            ]
        ]);

//        foreach ($parse['news'] as $item) {
//            News::create([
//               'title' =>  mb_substr($item['title'], 0, 48),
//                'description' => mb_substr($item['description'], 0, 98),
//                'text' => $item['description']
//            ]);
//        }
        return $parse;
    }

    public function saveNews(string $link)
    {
        $exp = explode('/', $link);
        $title = end($exp);
        $news = $this->parse($link);
        $newsJson = json_encode($news);
        Storage::disk('public')->put($title . '.txt', $newsJson);
    }
}
