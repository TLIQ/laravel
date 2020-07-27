<?php

namespace App\Http\Controllers;

use App\Events\NewsEditedEvent;
use App\Services\XmlParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function index ()
    {
       $objService = new XmlParserService();
       $xml = $objService->parse();
       $news = $xml['news'];

       event(new NewsEditedEvent($news));

       return redirect()->route('news.index');
    }
}
