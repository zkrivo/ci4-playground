<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class Users extends BaseController
{
    public function index()
    {
        helper(['form']);

        $data = [];

        if ($this->request->getMethod() == 'post') {
            //validation
            $rules = [
                'username' => 'required|min_length[5]|max_length[12]',
                'password' => 'required|validateUser[username,password]'
            ];

            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password do not match the user in the database!'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                //store user in the database
                $model = new UsersModel();

                $user = $model->where('username', $this->request->getVar('username'))->first();

                $this->setUserSession($user);

                // $session = session();
                // $session->setFlashdata('success', 'Successful!');
                return redirect()->to('/users/dashboard');
            }
        }

        //return view('welcome_message');
        echo view('templates/header');
        echo view('users/login', $data); //turn to login later
        echo view('templates/footer');
    }

    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'name' => $user['name'],
            'surname' => $user['surname'],
            'username' => $user['username'],
            'email' => $user['email'],
            'isLogged' => true
        ];

        session()->set($data);
        return true;
    }

    public function create()
    {
        helper(['form']);

        $data = [];

        if ($this->request->getMethod() == 'post') {
            //validation
            $rules = [
                'name' => 'required|min_length[2]|max_length[20]',
                'surname' => 'required|min_length[2]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'username' => 'required|min_length[5]|max_length[12]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]'
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                //store user in the database
                $model = new UsersModel();

                $model->save([
                    'name' => $this->request->getPost('name'),
                    'surname' => $this->request->getPost('surname'),
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),
                    'password' => $this->request->getPost('password')
                ]);

                $session = session();
                $session->setFlashdata('success', 'Successful!');
                return redirect()->to('/');
            }
        }

        echo view('templates/header', $data);
        echo view('users/create');
        echo view('templates/footer');
    }

    public function profile()
    {
        $data = [];
        $model = new UsersModel();

        $data['user'] = $model->where('id', session()->get('id'))->first();

        //here i can make the query to get posts by one user
        //must make another table to connect user and their posts

        echo view('templates/header');
        echo view('users/profile', $data);
        echo view('templates/footer');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function about()
    {
        echo view('templates/header');
        echo view('infos/about');
        echo view('templates/footer');
    }

    public function contact()
    {
        echo view('templates/header');
        echo view('infos/contact');
        echo view('templates/footer');
    }
}
