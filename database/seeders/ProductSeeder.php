<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'example',
            'price' => '1',
            'stock'=> 1,
            'description'=> 'Panaderia',
    
        ]);    
        Product::create([
            'name' => 'example 2 ',
            'price' => '12',
            'stock'=> 12,
            'description'=> 'Panaderia',
    
        ]);Product::create([
            'name' => 'example 3',
            'price' => '13',
            'stock'=> 13,
            'description'=> 'Panaderia',
    
        ]);;Product::create([
            'name' => 'example 4',
            'price' => '14',
            'stock'=> 14,
            'description'=> 'Panaderia',
    
        ]);;Product::create([
            'name' => 'example 5',
            'price' => '15',
            'stock'=> 15,
            'description'=> 'Panaderia',
    
        ]);
    }
}
