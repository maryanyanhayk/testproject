<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds with some demo data.
     */
    public function run(): void 
    {
        Category::insert([
            ['title' => 'Electronics', 'description' => 'Electronic gadgets and devices'],
            ['title' => 'Books', 'description' => 'Books and magazines'],
            ['title' => 'Clothing', 'description' => 'Men and women clothing'],
        ]);
    }
}
