<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [];

        // if (!session()->get('isLogged')) {
        //     redirect()->to('/');
        // }

        echo view('templates/header');
        echo view('users/dashboard');
        echo view('templates/footer');
    }
}
