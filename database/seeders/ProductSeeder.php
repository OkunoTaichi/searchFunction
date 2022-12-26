<?php

namespace Database\Seeders;

use App\Models\Product;
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
          'product_name' => 'シングル',
          'category_id' => 1,
          'SummarySectionCode' => 111,
          'product_ab_name' => 'S'
       ]);
       DB::table('products')->insert([
          'id' => 2,
          'product_name' => 'ダブル',
          'category_id' => 2,
          'SummarySectionCode' => 222,
          'product_ab_name' => 'D'
       ]);
       DB::table('products')->insert([
          'id' => 3,
          'product_name' => 'ツイン',
          'category_id' => 3,
          'SummarySectionCode' => 333,
          'product_ab_name' => 'T'
       ]);
       DB::table('products')->insert([
          'id' => 4,
          'product_name' => '和室',
          'category_id' => 4,
          'SummarySectionCode' => 444,
          'product_ab_name' => 'WA'
       ]);
       DB::table('products')->insert([
          'id' => 5,
          'product_name' => '追加室料',
          'category_id' => 5,
          'SummarySectionCode' => 555,
          'product_ab_name' => 'AD'
       ]);
       DB::table('products')->insert([
          'id' => 6,
          'product_name' => '和室',
          'category_id' => 6,
          'SummarySectionCode' => 444,
          'product_ab_name' => 'WA'
       ]);
      
    }
 }
