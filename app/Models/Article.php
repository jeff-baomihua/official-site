<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['article_type_id', 'url', 'title', 'body'];

    public function articleType()
    {
        return $this->belongsTo(ArticleType::class);
    }
}
