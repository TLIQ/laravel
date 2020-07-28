<?php

namespace App\Http\Controllers;

use App\Events\NewsEditedEvent;
use App\Jobs\NewsParsingJob;
use App\models\resources;
use App\Services\XmlParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function index ()
    {
        $links = resources::all();
//        $links = config('parsing.links');
        foreach ($links as $link) {
            NewsParsingJob::dispatch($link->link);
        }
        return back()->with('success', 'success');
//       $objService = new XmlParserService();
//       $xml = $objService->parse();
//       $news = $xml['news'];
//
//       event(new NewsEditedEvent($news));
//
//       return redirect()->route('news.index');
    }
}
