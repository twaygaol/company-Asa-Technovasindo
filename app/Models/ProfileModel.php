<?php
// app/Models/PostModel.php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{

    // protected $table = 'posts'; // Nama tabel slider pada database
    // protected $primaryKey = 'id'; // Nama primary key
    // protected $useAutoIncrement = true;
    
    protected $table = 'profile';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'visi', 'misi','keterangan'];

    public function getPosts()
    {
        return $this->findAll();
    }

    public function getPost($id)
    {
        return $this->find($id);
    }

    public function addPost($data)
    {
        return $this->insert($data);
    }

    public function updatePost($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deletePost($id)
    {
        return $this->delete($id);
    }
}


?>