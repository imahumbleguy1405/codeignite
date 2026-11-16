<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '(02) 8123-4567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com', 'phone' => '0917-123-4567', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Andrea Reyes', 'email' => 'andrea.reyes@example.com', 'phone' => '0918-234-5678', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Miguel Garcia', 'email' => 'miguel.garcia@example.com', 'phone' => '0920-345-6789', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Sofia Mendoza', 'email' => 'sofia.mendoza@example.com', 'phone' => '(02) 8765-4321', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
