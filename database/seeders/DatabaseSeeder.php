<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CashRegister;
use App\Models\Checkout;
use App\Models\Inventory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
          
            ProductSeeder::class,
            CostSeeder::class,
            InventorySeeder::class,
            CheckoutSeeder::class,
            CashRegisterSeeder::class,

           ]);
    }
}
