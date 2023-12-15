<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Vendor;
use \App\Models\City;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => ' MUA',
            'slug' => 'mua'
        ]);
        Category::create([
            'name' => ' Fotografer',
            'slug' => 'Foto-grafer'
        ]);
        Category::create([
            'name' => ' Venue',
            'slug' => 'venue'
        ]);
        Category::create([
            'name' => ' Katering',
            'slug' => 'katering'
        ]);

        City::create([
            'name' => ' Bandung',
            'slug' => 'bandung'
        ]);
        City::create([
            'name' => ' Jakarta',
            'slug' => 'jakarta'
        ]);
        City::create([
            'name' => ' Yogyakarta',
            'slug' => 'yogyakarta'
        ]);
        City::create([
            'name' => ' Malang',
            'slug' => 'malang'
        ]);

        Vendor::factory(17)->create();
        // city::factory(3)->create();
    }
}
