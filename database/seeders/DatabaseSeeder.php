<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Products::create([
            'name' => 'Rockfield Venue',
            'desc' => 'Aubin Road, Plaine des Roches',
            'price' => 20000,
            'rrp' => 30000,
            'quantity' => 1,
            'img' => 'venue1.jpg',
            'date_added' => '2019-03-13 17:55:22'
        ]);
    }
}
