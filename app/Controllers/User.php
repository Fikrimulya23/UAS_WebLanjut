<?php namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Session\Session;

class User extends BaseController
{

    public function index()
    {     
        echo view('user');
    }
}