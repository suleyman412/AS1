<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hotel;
use App\Models\City;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cityId = City::inRandomOrder()->first();
        return [
            "city_id"=>$cityId,
            "name"=>fake()->company()."Hotels",
            "address"=>fake()->address(). ''.fake()->country(),
            "phone_num" => fake()->phoneNumber(),
            "email"=>fake()->unique()->safeEmail(),
            "star"=>fake()->numberBetween(1,5),
        ];
    }
}
