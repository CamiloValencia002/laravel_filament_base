<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Checkout;

class CheckoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Checkout::create([
            'name_user'=> 'User1',
            'document' => 'example',
            'amount' => 500,
            'total' => 499,
            
    
        ]);    
        Checkout::create([
            'name_user'=> 'User2',
            'document' => 'example',
            'amount' => 400,
            'total' => 399,
            
    
        ]);  
        Checkout::create([
            'name_user'=> 'User3',
            'document' => 'example',
            'amount' => 300,
            'total' => 299,
            
    
        ]);   
        Checkout::create([
            'name_user'=> 'User4',
            'document' => 'example',
            'amount' => 200,
            'total' => 199,
            
    
        ]);
    }
}
