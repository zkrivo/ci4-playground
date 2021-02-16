<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\PostsModel;
use App\Models\UsersModel;

class Form extends Controller
{
    public function index()
    {
        // $validation = \Config\Services::validation();

        helper(['form', 'url']);

        $data = [];

        $model = new PostsModel();


        if ($this->request->getMethod() == 'post') {
            $rules = [
                'title' => 'required',
                'slug' => 'required|alpha_dash|min_length[3]',
                'body' => 'required'
            ];

            if ($this->validate($rules)) {
                //then do database insertion
                //return redirect()->to('posts/success');
                // echo view('templates/header');
                $model->save([
                    'title' => $this->request->getPost('title'),
                    'slug' => $this->request->getPost('slug'),
                    'body' => $this->request->getPost('body')
                ]);
                echo view('posts/success');
                // echo view('templates/footer');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        // if (!$this->validate([])) {
        echo view('templates/header');
        echo view('posts/create', $data);
        echo view('templates/footer');
        // } else {
        //     echo view('posts/success');
        // }
    }
}
