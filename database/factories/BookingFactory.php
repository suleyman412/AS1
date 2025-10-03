<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Room;
use App\Models\Guest;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roomId = Room::inRandomOrder()->first();
        $guestId = Guest::inRandomOrder()->first();
        $check_in_at = fake()->dateTimeBetween("-15 days","-1 days");
        return [
            "room_id" => $roomId,
            "guest_id" => $guestId,
            "check_in_at" => $check_in_at,
            "check_out_at" => fake()->dateTimeBetween("now","5 days"),
        ];
    }
}
