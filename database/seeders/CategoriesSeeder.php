<?php

namespace Database\Seeders;

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
            'category_name' => '肉類',
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'category_name' => '魚介類',
        ]);
    }
}