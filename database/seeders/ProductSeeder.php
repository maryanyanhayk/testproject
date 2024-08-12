<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void {
        Product::insert([
            [
                'title' => 'Smartphone',
                'description' => 'A high-end smartphone',
                'sku' => 'SMRT1234',
                'price' => 699.99,
                'category_id' => 1,
            ],
            [
                'title' => 'Novel',
                'description' => 'A best-selling novel',
                'sku' => 'BOOK5678',
                'price' => 19.99,
                'category_id' => 2,
            ],
            [
                'title' => 'T-shirt',
                'description' => 'A cotton t-shirt',
                'sku' => 'CLTH9101',
                'price' => 9.99,
                'category_id' => 3,
            ],
        ]);
    }
}
