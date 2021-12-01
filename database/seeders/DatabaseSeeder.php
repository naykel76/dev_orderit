<?php

namespace Database\Seeders;

use App\Models\Product;
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

        Product::create([
            'name' => 'Some Fancy Product',
            'code' => 'sfp-abc',
            'headline' => 'Product headline to get the users attention.',
            'image_name' => 'naykel-400.png',
            'price' => 4.99,
            'qoh' => 6,
            'published_at' => now(),
        ]);

        Product::factory(10)->create();
    }
}
