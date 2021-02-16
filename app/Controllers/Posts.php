<?php

namespace App\Controllers;

use App\Models\PostsModel;
use CodeIgniter\Controller;

class Posts extends Controller
{
    public function index()
    {
        $model = new PostsModel();

        $data = [
            'posts' => $model->getPosts(),
            'title' => 'Posts archive'
        ];

        echo view('templates/header', $data);
        echo view('posts/posts', $data);
        echo view('templates/footer', $data);
    }

    public function view($slug = null)
    {
        $model = new PostsModel();

        $data['posts'] = $model->getPosts($slug);

        if (empty($data['posts'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the post item: ' . $slug);
        }

        $data['title'] = $data['posts']['title'];

        echo view('templates/header', $data);
        echo view('posts/read', $data);
        echo view('templates/footer', $data);
    }

    // public function create()
    // {
    //     echo view('templates/header');
    //     echo view('posts/create');
    //     echo view('templates/footer');
    // }
}
