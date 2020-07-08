<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $category = [
        [
            'id' => 1,
            'name' => 'Категория 1'
        ],
        [
            'id' => 2,
            'name' => 'Категория 2'
        ],
        [
            'id' => 3,
            'name' => 'Категория 3'
        ],
        [
            'id' => 4,
            'name' => 'Категория 4'
        ],
        [
            'id' => 5,
            'name' => 'Категория 5'
        ]
    ];
    protected $news = [
        [
            'id' => 0,
            'category' => 1,
            'title' => 'some title',
            'text' => 'some text'
        ],
        [
            'id' => 1,
            'category' => 1,
            'title' => 'some title2',
            'text' => 'some text2'
        ],
        [
            'id' => 2,
            'category' => 1,
            'title' => 'some title3',
            'text' => 'some text3'
        ],
        [
            'id' => 3,
            'category' => 1,
            'title' => 'some title4',
            'text' => 'some text4'
        ],
        [
            'id' => 4,
            'category' => 2,
            'title' => 'some title5',
            'text' => 'some text5'
        ],
        [
            'id' => 5,
            'category' => 2,
            'title' => 'some title6',
            'text' => 'some text6'
        ],
        [
            'id' => 6,
            'category' => 2,
            'title' => 'some title7',
            'text' => 'some text7'
        ],
        [
            'id' => 7,
            'category' => 2,
            'title' => 'some title8',
            'text' => 'some text8'
        ],
        [
            'id' => 8,
            'category' => 3,
            'title' => 'some title9',
            'text' => 'some text9'
        ],
        [
            'id' => 9,
            'category' => 3,
            'title' => 'some title10',
            'text' => 'some text10'
        ],
        [
            'id' => 10,
            'category' => 4,
            'title' => 'some title11',
            'text' => 'some text11'
        ],
        [
            'id' => 11,
            'category' => 4,
            'title' => 'some title12',
            'text' => 'some text12'
        ],
        [
            'id' => 12,
            'category' => 5,
            'title' => 'some title13',
            'text' => 'some text13'
        ],
        [
            'id' => 13,
            'category' => 5,
            'title' => 'some title14',
            'text' => 'some text14'
        ]
    ];
    public function index()
    {

        return view('news.index', ['news' => $this->news, 'category' => $this->category]);
    }


    public function create()
    {
        return view('news.create');
    }

    public function edit(int $id)
    {
        $news = $this->news[$id] ?? [];
        if(!$news) {
            return abort(404);
        }
        $news = (object)$news;
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
