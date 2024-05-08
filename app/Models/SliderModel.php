<?php

namespace App\Models;

use CodeIgniter\Model;

class SliderModel extends Model
{
    protected $table = 'slider'; // Nama tabel slider pada database
    protected $primaryKey = 'id'; // Nama primary key
    protected $allowedFields = ['title', 'image', 'description']; // Kolom yang diizinkan untuk diisi
    protected $useAutoIncrement = true;
    

    // Tambahkan metode lain yang diperlukan sesuai kebutuhan
    public function getTransactionsByCustomerIds($id)
    {
        // Gantikan 'nama_tabel' dengan nama tabel sesuai dengan struktur database Anda
        return $this->db->table('slider')->whereIn('id', $id)->get()->getResultArray();
    }
}
