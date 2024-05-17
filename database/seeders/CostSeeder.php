<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cost;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cost::create([
            'name'=> 'Panaderia',
            'description' => 'example',
            'status' => '1',
            'total' => 1,
            
    
        ]);    
        Cost::create([
            'name'=> 'Panaderia',
            'description' => 'example 2 ',
            'status' => '12',
            'total' => 12,
            
    
        ]);Cost::create([
            'name'=> 'Panaderia',
            'description' => 'example 3',
            'status' => '13',
            'total' => 13,
            
    
        ]);;Cost::create([
            'name'=> 'Panaderia',
            'description' => 'example 4',
            'status' => '14',
            'total' => 14,
            
    
        ]);;Cost::create([
            'name'=> 'Panaderia',
            'description' => 'example 5',
            'status' => '15',
            'total' => 15,
            
    
        ]);
    }
}
