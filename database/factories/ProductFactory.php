<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Minuman', 'Makanan', 'Snack', 'ATK'];
        $images = [
            'images/galeri/crop.jpg',
            'images/galeri/download (17).jpg',
            'images/galeri/eva.jpg',
            'images/galeri/Keyboard Wallpapr.jpg',
        ];
        static $number = 1;

        return [
            'code' => 'K' . str_pad($number++, 3, '0', STR_PAD_LEFT),
            'name' => fake()->words(2, true),
            'description' => fake()->text(400),
            'image' => fake()->randomElement($images),
            'price' => fake()->numberBetween(5000, 100000),
            'stock' => fake()->numberBetween(10, 100),
            'category' => fake()->randomElement($categories),
        ];
    }
}
