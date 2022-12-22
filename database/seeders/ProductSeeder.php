<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->insert([
          'id' => 1,
          'product_name' => '黒毛和牛サーロイン',
          'category_id' => 1,
          'price' => 8000
       ]);
       DB::table('products')->insert([
          'id' => 2,
          'product_name' => 'A5ランク松坂牛',
          'category_id' => 1,
          'price' => 12000
       ]);
       DB::table('products')->insert([
          'id' => 3,
          'product_name' => 'フィレステーキ',
          'category_id' => 1,
          'price' => 5000
       ]);
       DB::table('products')->insert([
          'id' => 4,
          'product_name' => '越前ガニ',
          'category_id' => 2,
          'price' => 6000
       ]);
       DB::table('products')->insert([
          'id' => 5,
          'product_name' => '特選いくら',
          'category_id' => 2,
          'price' => 4000
       ]);
    }
 }
