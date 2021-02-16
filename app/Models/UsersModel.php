<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['name', 'surname', 'email', 'username', 'password'];
    protected $beforeInsert = ['beforeInsert'];
    //protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        //password hashing
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}
