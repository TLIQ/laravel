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
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('news.create', ['categories' => $this->getCategories()]);
    }

    /**
     * @param News $news
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(News $news)
    {
//        return view('news.edit', ['id' => $id, 'news' => $this->news]);
        return view('news.edit', ['news' => $news, 'categories' => $this->getCategories()]);
    }

    /**
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function update(Request $request, int $id)
    {
        $news = News::find($id);
        if (!$news){
            return abort(404);
        }

        $news->title =$request->input('title');
        $news->text = $request->input('text');

        if ($news->save()) {
            return redirect('/');
        }

        return back();
    }

    /**
     * @param CreateNewsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateNewsRequest $request)
    {
        $news = News::create($request->validated());
        if ($news){
            return redirect()->route('news');
        }
        return back();
    }



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

    public function deleteNews(News $news)
    {
        $news->delete();
        return redirect('/');
    }
}
