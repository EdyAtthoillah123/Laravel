<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 10, 1000), // Angka acak dengan 2 digit di belakang koma antara 10 dan 1000
            'stock' => $this->faker->numberBetween(0, 100), // Angka acak antara 0 dan 100
        ];
    }

    //jangan lupa jalankan Perintah composer dump-autoload untuk refresh 
}
