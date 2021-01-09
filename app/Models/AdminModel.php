<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = "user";
 
    public function getUser($id = false)
    {
        if($id == false){
            return $this->table('user')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('user')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insertUser($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateUser($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deleteUser($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}    
?>