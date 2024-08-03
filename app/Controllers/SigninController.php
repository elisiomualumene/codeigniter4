<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class SigninController extends Controller
{
    public function index()
    {
        return view("signin");
    }

    public function submit()
    {
        $session = session();

        $validationRules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]'
        ];

        if (!$this->validate($validationRules)) {
            $errors = $this->validator->getErrors();
            return view('signin', ['errors' => $errors]);
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password') ?? "";


        if ($email === 'elisiomualumene@gmail.com' && $password === "mualumene20@") {
            $session->set("isLoggedIn", true);
            return redirect()->to('/dashboard');
        }


        return view('signin', ['errors' => ['Invalid email or password']]);
    }
}
