<?php

namespace App\Http\Controllers\Admin;

use App\Events\NewsEditedEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\EditNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::query()->orderBy('created_at', 'desc')->paginate(10);


//        $news = News::all();
        return view('news.admin', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create', ['categories' => $this->getCategories()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewsRequest $request)
    {
        $news = News::create($request->validated());
        if ($news){
            return redirect()->route('news.index');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('news.edit', ['news' => $news, 'categories' => $this->getCategories()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(EditNewsRequest $request, News $news)
    {

        $news->title =$request->input('title');
        $news->text = $request->input('text');

        if ($news->save()) {
            event(new NewsEditedEvent($news));
            return redirect()->route('news.index');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->categories()->detach();
        $news->delete();
        return redirect()->route('news');
    }
}
