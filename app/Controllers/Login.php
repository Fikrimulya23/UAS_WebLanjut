<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('templates/authheader');
        echo view('auth/login');
        echo view('templates/authfooter');
    }

    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data)
        {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass)
            {
                $ses_data = [
                    'id'            =>  $data['id'],
                    'username'      =>  $data['username'],
                    'password'      =>  $data['password'],
                    'logged_in'     =>  TRUE
                ];
                if($data['role_id'] == 1){
                    $session->set($ses_data);
                    return redirect()->to('/user');
                } else {
                    $session->set($ses_data);
                    return redirect()->to('/admin');
                }
            }
            else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }
        else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}