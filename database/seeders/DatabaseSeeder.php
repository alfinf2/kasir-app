<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   public function run()
    {
        // Create Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Create Kasir
        User::factory()->count(2)->create([
            'role' => 'kasir',
        ]);

        // Create Customers
        User::factory()->count(7)->create([
            'role' => 'customer',
        ]);

        // Create Products
        $products = Product::factory()->count(20)->create();

        // Create Transactions
        $kasirs = User::where('role', 'kasir')->get();
    }
}
