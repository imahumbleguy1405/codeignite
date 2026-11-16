<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        // Temporary in-memory data source, as required by TFA5.
        $customers = [
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '(02) 8123-4567'],
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com', 'phone' => '0917-123-4567'],
            ['full_name' => 'Andrea Reyes', 'email' => 'andrea.reyes@example.com', 'phone' => '0918-234-5678'],
            ['full_name' => 'Miguel Garcia', 'email' => 'miguel.garcia@example.com', 'phone' => '0920-345-6789'],
            ['full_name' => 'Sofia Mendoza', 'email' => 'sofia.mendoza@example.com', 'phone' => '(02) 8765-4321'],
        ];

        return view('customers.index', compact('customers'));
    }
}
