<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Room;
use Carbon\Carbon;  //この行を追加

class RoomFactory extends Factory
{
    protected $model = Room::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $now = Carbon::now();  //この行を追加
        return [
            //
            'room_id' => $this->faker->numberBetween(1,50), 
            'room_name' => $this->faker->name(),
            'room_type' => $this->faker->word(), 
            'room_accommodated' => $this->faker->numberBetween(1,5), 
            'created_at' => $now,  //この行を追加
            'updated_at' => $now,  //この行を追加
        ];

      
    }
}
