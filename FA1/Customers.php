<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'fullname' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '09123456789'
            ],
            [
                'fullname' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09111111111'
            ],
            [
                'fullname' => 'Jose Reyes',
                'email' => 'jose@gmail.com',
                'phone' => '09222222222'
            ],
            [
                'fullname' => 'Ana Lopez',
                'email' => 'ana@gmail.com',
                'phone' => '09333333333'
            ],
            [
                'fullname' => 'Pedro Cruz',
                'email' => 'pedro@gmail.com',
                'phone' => '09444444444'
            ]
        ];

        return view('customers', $data);
    }
}