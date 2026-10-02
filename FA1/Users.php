<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'fullname' => 'John Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier1',
                'fullname' => 'Jane Smith',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier2',
                'fullname' => 'Mark Johnson',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager1',
                'fullname' => 'Sarah White',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff1',
                'fullname' => 'Paul Green',
                'role' => 'Staff'
            ]
        ];

        return view('users', $data);
    }
}