<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['username' => 'christian.tamayo'],
            [
                'full_name' => 'Christian Angelo Tamayo',
                'email' => 'christian.tamayo@example.com',
            ],
        );
    }
}
