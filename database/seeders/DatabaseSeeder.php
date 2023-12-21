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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'Admin',
            'google_id' => '',
            'password' => bcrypt('12345'),
            'image' => '',
            'Type' => 'admin'
        ]);


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

        User::factory(5)->create();
        Vendor::factory(17)->create();
    }
}
