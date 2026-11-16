<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        // Temporary in-memory data source, as required by TFA5.
        $users = [
            ['username' => 'admin.maria', 'full_name' => 'Maria Santos', 'role' => 'Administrator'],
            ['username' => 'cashier.juan', 'full_name' => 'Juan Dela Cruz', 'role' => 'Cashier'],
            ['username' => 'cashier.andrea', 'full_name' => 'Andrea Reyes', 'role' => 'Cashier'],
            ['username' => 'manager.miguel', 'full_name' => 'Miguel Garcia', 'role' => 'Store Manager'],
            ['username' => 'stock.sofia', 'full_name' => 'Sofia Mendoza', 'role' => 'Inventory Staff'],
        ];

        return view('users.index', compact('users'));
    }
}
