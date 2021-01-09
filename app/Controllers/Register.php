<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends BaseController
{

    public function index(){

        helper(['form']);
        $data = [];

        echo view('templates/authheader');
        echo view('auth/register', $data);
        echo view('templates/authfooter');
    }

    public function save() {
        helper(['form']);

        $rules = [
            'username'      => 'min_length[8]|max_length[30]',
            'password'      => 'min_length[8]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];

        if($this->validate($rules)){

            $model = new UserModel();
            $data = [
                'username'     => $this->request->getVar('username'),
                'role_id'      => "1",
                'password'     => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $model->save($data);
            return redirect()->to('/login');

        } else{

            $data['validation'] = $this->validator;
            echo view('templates/authheader');
            echo view('auth/register', $data);
            echo view('templates/authfooter');
        }
    }

}