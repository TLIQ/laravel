<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|void
     */
    public function show(int $id)
    {
        $category = Category::where('id', $id)->first();
        if(!$category){
            return abort(404);
        }
        return view('category.show', ['category' => $category, 'categories' => $this->getCategories()]);
    }


}
