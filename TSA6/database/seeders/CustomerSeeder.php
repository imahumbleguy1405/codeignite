<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '(02) 8123-4567'],
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com', 'phone' => '0917-123-4567'],
            ['full_name' => 'Andrea Reyes', 'email' => 'andrea.reyes@example.com', 'phone' => '0918-234-5678'],
            ['full_name' => 'Miguel Garcia', 'email' => 'miguel.garcia@example.com', 'phone' => '0920-345-6789'],
            ['full_name' => 'Sofia Mendoza', 'email' => 'sofia.mendoza@example.com', 'phone' => '(02) 8765-4321'],
        ];

        foreach ($customers as $customer) {
            Customer::firstOrCreate(['email' => $customer['email']], $customer);
        }
    }
}
