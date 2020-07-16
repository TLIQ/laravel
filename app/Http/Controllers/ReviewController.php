<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewCreateRequest;
use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNewsRequest;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function index() {

    }

    public function create() {
        return view('news.review', ['categories' => $this->getCategories()]);
    }

    public function store(ReviewCreateRequest $request) {
        Reviews::create($request->validated());
        return redirect()->route('news');
    }
}
