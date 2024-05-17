<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CashRegister;

class CashRegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CashRegister::create([
            'name_product'=> 'Producto1',
            'description' => 'example',
            'stock' => 500,
            'total' => 499,
            'change' => 499,
            
    
        ]);    
        CashRegister::create([
            'name_product'=> 'Producto2',
            'description' => 'example',
            'stock' => 500,
            'total' => 499,
            'change' => 499,
            
    
        ]);    
        CashRegister::create([
            'name_product'=> 'Producto3',
            'description' => 'example',
            'stock' => 500,
            'total' => 499,
            'change' => 499,
            
    
        ]);    
        CashRegister::create([
            'name_product'=> 'Producto4',
            'description' => 'example',
            'stock' => 500,
            'total' => 499,
            'change' => 499,
            
    
        ]);
    }
}
