<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'admin.maria', 'full_name' => 'Maria Santos'],
            ['username' => 'cashier.juan', 'full_name' => 'Juan Dela Cruz'],
            ['username' => 'cashier.andrea', 'full_name' => 'Andrea Reyes'],
            ['username' => 'manager.miguel', 'full_name' => 'Miguel Garcia'],
            ['username' => 'stock.sofia', 'full_name' => 'Sofia Mendoza'],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(['username' => $user['username']], $user);
        }
    }
}
