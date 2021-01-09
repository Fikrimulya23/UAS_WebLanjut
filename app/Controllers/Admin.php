<?php namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    public function __construct() {
 
        // Mendeklarasikan class ProductModel menggunakan $this->product
        $this->user = new AdminModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }
    public function index()
    {
        echo view('templates/adminheader');
        echo view('Admin/admin');
        echo view('templates/adminfooter');
    }

    public function crud()
    {
        
        $data['user'] = $this->user->getUser();
        echo view('templates/adminheader');
        echo view('Admin/admincrud', $data);
        echo view('templates/adminfooter');
    }

    public function create()
    {
        echo view('templates/adminheader');
        echo view('admin/create');
        echo view('templates/adminfooter');
    }

    public function store()
    {
        //mengambil value dari form dengan method POST
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $role_id  = $this->request->getPost('role_id');

        $data = [
            'username'      => $username,
            'password'      => password_hash($password, PASSWORD_DEFAULT),
            'role_id'       => $role_id
        ];

        $simpan = $this->user->insertUser($data);

        if($simpan)
        {
            session()->setFlashdata('success', 'Created User Success');
            return redirect()->to('/admincrud');
        }
        
    }

    public function edit($id)
    {
        $data['user'] = $this->user->getUser($id);
        echo view('templates/adminheader');
        echo view('admin/edit', $data);
        echo view('templates/adminfooter');
    }
    
    public function update($id)
    {
        // Mengambil value dari form dengan method POST
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $role_id  = $this->request->getPost('role_id');
    
        $data = [
            'username'      => $username,
            'password'      => password_hash($password, PASSWORD_DEFAULT),
            'role_id'       => $role_id
        ];
    
        $ubah = $this->user->updateUser($data, $id);

        if ($ubah) {
            session()->setFlashdata('info', 'Updated User Success');
            return redirect()->to(base_url('/admincrud'));
        }
    }

    public function delete($id)
    {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
        $hapus = $this->user->deleteUser($id);
    
 
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted User Success');
            return redirect()->to(base_url('/admincrud'));
        }
    } 
}

?>