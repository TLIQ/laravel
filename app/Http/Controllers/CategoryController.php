<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
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
            'id' => 1,
            'category' => 1,
            'title' => 'some title',
            'text' => 'some text'
        ],
        [
            'id' => 2,
            'category' => 1,
            'title' => 'some title2',
            'text' => 'some text2'
        ],
        [
            'id' => 3,
            'category' => 1,
            'title' => 'some title3',
            'text' => 'some text3'
        ],
        [
            'id' => 4,
            'category' => 1,
            'title' => 'some title4',
            'text' => 'some text4'
        ],
        [
            'id' => 5,
            'category' => 2,
            'title' => 'some title5',
            'text' => 'some text5'
        ],
        [
            'id' => 6,
            'category' => 2,
            'title' => 'some title6',
            'text' => 'some text6'
        ],
        [
            'id' => 7,
            'category' => 2,
            'title' => 'some title7',
            'text' => 'some text7'
        ],
        [
            'id' => 8,
            'category' => 2,
            'title' => 'some title8',
            'text' => 'some text8'
        ],
        [
            'id' => 9,
            'category' => 3,
            'title' => 'some title9',
            'text' => 'some text9'
        ],
        [
            'id' => 10,
            'category' => 3,
            'title' => 'some title10',
            'text' => 'some text10'
        ],
        [
            'id' => 11,
            'category' => 4,
            'title' => 'some title11',
            'text' => 'some text11'
        ],
        [
            'id' => 12,
            'category' => 4,
            'title' => 'some title12',
            'text' => 'some text12'
        ],
        [
            'id' => 13,
            'category' => 5,
            'title' => 'some title13',
            'text' => 'some text13'
        ],
        [
            'id' => 14,
            'category' => 5,
            'title' => 'some title14',
            'text' => 'some text14'
        ]
    ];
    public function index()
    {
        return view('category.index', ['category' => $this->category]);
    }

    public function find(int $category)
    {
        return view('category.find', ['category' => $category,'news' => $this->news]);
    }
}
