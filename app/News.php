<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = "news";
    public function getAllNews()
    {
        return DB::table($this->table)->get();
//        return DB::select('SELECT id, title, text FROM news');
    }

    public function getFindNews(int $id)
    {
        return DB::table($this->table)->find($id);
//        return DB::selectOne('SELECT id, title, text FROM news where id= :id', ['id' => $id]);
    }
}
