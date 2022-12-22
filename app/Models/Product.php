<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //「商品(products)はカテゴリ(category)に属する」というリレーション関係を定義する
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}