<?php

namespace Database\Seeders;
use Database\Factories\ProductFactory;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(10)->create();
    }

    // run php artisan db:seed --class=ProductSeeder untuk melakukan seeder

}
