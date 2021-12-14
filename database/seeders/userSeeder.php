<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "tauseed zaman",
            'email' => "tauseedzaman@gmail.com",
            'email_verified_at' => now(),
            'password' => "$2y$10$6PY4INkKzJrBm39a.zXhPuQVtJOtgvgEINWpAtGU.FLeh17I2Gs1W", //tauseedzaman,
        ]);
        User::factory(10)->create();
    }
}
