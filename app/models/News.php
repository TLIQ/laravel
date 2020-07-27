<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = "news";
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'text',
        'status'
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'news_to_categories',
            'news_id', 'category_id');

    }

}
