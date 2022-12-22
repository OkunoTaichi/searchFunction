<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //categoriesテーブルから::pluckでcategory_nameとidを抽出し、$categoriesに返す関数を作る
    public function getLists()
    {
        $categories = Category::pluck('category_name', 'id');

        return $categories;
    }
    //「カテゴリ(category)はたくさんの商品(products)をもつ」というリレーション関係を定義する
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
