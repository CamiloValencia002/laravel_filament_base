<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inventory::create([
            'name'=> 'Panaderia',
            'description' => 'example',
            'stock' => 1,
            
    
        ]);    
        Inventory::create([
            'name'=> 'Panaderia',
            'description' => 'example 2 ',
            'stock' => 12,
            
    
        ]);Inventory::create([
            'name'=> 'Panaderia',
            'description' => 'example 3',
            'stock' => 13,
            
    
        ]);;Inventory::create([
            'name'=> 'Panaderia',
            'description' => 'example 4',
            'stock' => 14,
            
    
        ]);;Inventory::create([
            'name'=> 'Panaderia',
            'description' => 'example 5',
            'stock' => 15,
            
    
        ]);
    }
}
