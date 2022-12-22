<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{

     // ここから追加
     private const SEEDERS = [
        RoomSeeder::class,
    ];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // ここから追加
         foreach(self::SEEDERS as $seeder) {
            $this->call($seeder);
        }
    }
}
