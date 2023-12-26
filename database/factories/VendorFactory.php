<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\vendor>
 */
class VendorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(mt_rand(1,2)),
            'slug' => $this->faker->slug(),
            'address' => $this->faker->address(),
            'koordinat_maps' => $this->faker->latitude($min = -6, $max = 90).",".$this->faker->longitude($min = -100, $max = 180),
            'detail' =>collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'price' => $this->faker->numberBetween(150000, 10000000),
            'city_id' => mt_rand(1,4),
            'category_id' => mt_rand(1,4),
            'image' => "image/banner.jpg",
            'profil' => "image/putri.png",
            'telp' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'instagram' => $this->faker->sentence(1),
        ];
    }
}
