<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateNewsRequest;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function index()
    {
        $news = (new News())->getAllNews();
        $categories =(new Category())->getCategories();
//        dd($news);
//        return view('news.index', ['news' => $this->news, 'category' => $this->category]);
        return view('news.index', ['news' => $news, 'categories' => $categories]);
    }


    public function create()
    {
        return view('news.create');
    }

    public function edit(int $id)
    {
        $news = (new News())->getFindNews($id);
        if(!$news) {
            return abort(404);
        }

//        return view('news.edit', ['id' => $id, 'news' => $this->news]);
        return view('news.edit', ['id' => $id, 'news' => $news]);
    }

    public function update(Request $request, int $id)
    {

    }
    public function store(CreateNewsRequest $request)
    {
//        dd($request->all());
//        dd($request->validated());
        $title = $request->input('title');
        $text = $request->input('text');
        $str = 'title:'. $title . '- text:' . $text;
//        dd($text);
        file_put_contents(storage_path('app/public/db.txt'), $str, FILE_APPEND);
        return redirect()->route('news');
    }

    public function review() {
        return view('news.review');
    }

    public function send(Request $request) {
        $name = $request->input('name');
        $text = $request->input('text');
        $str = 'name:'. $name . '- text:' . $text;
        file_put_contents(storage_path('app/public/reviews.txt'), $str, FILE_APPEND);
        return redirect()->route('news');
    }

    public function unloading() {
        return view('news.unloading');
    }

    public function unloadingSend(Request $request) {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $info = $request->input('info');
        $str = 'name:'. $name . '-phone:'. $phone . '-email:'. $email . '-info:' . $info;
        file_put_contents(storage_path('app/public/unloading.txt'), $str, FILE_APPEND);
        return redirect()->route('news');
    }
}
