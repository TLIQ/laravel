<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CategoryController extends Controller
{

//    public function find(int $id)
//    {
//        $news = News::all();
////        $news = (new News())->getAllNews();
//        $category = Category::find($id);
////        $category = (new Category())->getFindCategory($id);
//        if(!$category) {
//            return abort(404);
//        }
//
//        return view('category.find', ['id' => $id,'category' => $category, 'news' => $news]);
////        return view('category.find', ['category' => $id,'news' => $this->news]);
//    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'description']);
        $category = Category::create($data);
        if ($category) {
            return redirect()->route('news');
        }
        return back();
    }

    public function edit(Category $category)
    {
        return view('category.edit', ['category' => $category, 'categories' => $this->getCategories()]);
    }

    public function update()
    {

    }

    public function show(int $id)
    {
        $category = Category::where('id', $id)->first();
        if(!$category){
            return abort(404);
        }
        return view('category.show', ['category' => $category, 'categories' => $this->getCategories()]);
    }

    public function allCat()
    {
        return view('category.allCat', ['categories' => $this->getCategories()]);
    }
}
