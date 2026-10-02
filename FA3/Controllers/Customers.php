<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $model = new CustomerModel();

        $data['customers'] = $model->findAll();

        return view('customers', $data);
    }

    public function new()
    {
        return view('customers/new');
    }

    public function create()
    {
        $rules = [
            'full_name' => 'required',
            'email'     => 'required|valid_email'
        ];

        if (!$this->validate($rules)) {
            return view('customers/new', [
                'validation' => $this->validator
            ]);
        }

        $model = new CustomerModel();

        $model->insert([
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone')
        ]);

        return redirect()->to(site_url('customers'));
    }

    public function edit($id)
    {
        $model = new CustomerModel();

        $data['customer'] = $model->find($id);

        return view('customers/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'full_name' => 'required',
            'email'     => 'required|valid_email'
        ];

        if (!$this->validate($rules)) {
            $model = new CustomerModel();

            return view('customers/edit', [
                'customer'   => $model->find($id),
                'validation' => $this->validator
            ]);
        }

        $model = new CustomerModel();

        $model->update($id, [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone')
        ]);

        return redirect()->to(site_url('customers'));
    }
}