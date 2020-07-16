<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CreateNewsRequest;
use App\Models\News;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function unloading() {
        return view('news.unloading', ['categories' => $this->getCategories()]);
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
