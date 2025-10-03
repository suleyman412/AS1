<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Guest;
use App\Models\Booking;
class DatabaseSeeder extends Seeder
{
    use HasFactory;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call( [
            CitySeeder::class,
        ]);

        Hotel::factory(20)->create();
        Room::factory(25)->create();
        Guest::factory(30)->create();
        Booking::factory(35)->create();
    }
}
