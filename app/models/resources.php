<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class resources extends Model
{
    protected $table = "resources";
    protected $primaryKey = 'id';

    protected $fillable = [
        'link'
    ];
}
