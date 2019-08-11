<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'image_large', 'image_small', 'sort', 'description'];

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }
}
