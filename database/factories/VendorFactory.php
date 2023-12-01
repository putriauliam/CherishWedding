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
            'name' => $this->faker->sentence(mt_rand(2,3)),
            'slug' => $this->faker->slug(),
            'address' => $this->faker->address(),
            'koordinat_maps' => $this->faker->latitude().",".$this->faker->longitude(),
            'detail' =>collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'price' => $this->faker->numberBetween(150000, 10000000),
            'city_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,3)
        ];
    }
}
