<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('staff_users')->insert([
            ['username' => 'admin.maria', 'full_name' => 'Maria Santos', 'role' => 'Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier.juan', 'full_name' => 'Juan Dela Cruz', 'role' => 'Cashier', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier.andrea', 'full_name' => 'Andrea Reyes', 'role' => 'Cashier', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'manager.miguel', 'full_name' => 'Miguel Garcia', 'role' => 'Store Manager', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'stock.sofia', 'full_name' => 'Sofia Mendoza', 'role' => 'Inventory Staff', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
