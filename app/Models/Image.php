<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['type', 'image', 'sort'];

    CONST CAROUSEL_INDEX = 1;//首页轮播图
}
