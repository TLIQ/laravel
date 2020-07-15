<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNewsRequest;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function review() {
        return view('news.review', ['categories' => $this->getCategories()]);
    }

    public function send(Request $request) {
        $review = new Reviews();
        $review->name = $request->input('name');
        $review->review = $request->input('text');

        if ($review->save()){
            return redirect()->route('news');
        }
        return back();
    }
}
