<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'category_name' => '宿泊部門',
            'category_code' => '11'
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'category_name' => '飲料部門',
            'category_code' => '22'
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'category_name' => 'その他部門',
            'category_code' => '33'
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'category_name' => '現金',
            'category_code' => '44'
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'category_name' => 'クレジット',
            'category_code' => '55'
        ]);
        DB::table('categories')->insert([
            'id' => 6,
            'category_name' => 'クーポン',
            'category_code' => '66'
        ]);
        DB::table('categories')->insert([
            'id' => 7,
            'category_name' => 'ポイント',
            'category_code' => '77'
        ]);
     
    }
}