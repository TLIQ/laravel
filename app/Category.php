<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $table = 'categories';

    public function getCategories()
    {
        return DB::table('categories')->get();
    }

    public function  getFindCategory(int $id)
    {
        return DB::table($this->table)->find($id);
    }
}
