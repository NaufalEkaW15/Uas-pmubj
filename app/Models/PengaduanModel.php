<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $table      = 'pengaduan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $allowedFields = ['nama_mahasiswa', 'nim', 'nama_pengaduan', 'tanggal_pengaduan', 'slug'];

    public function getPengaduan($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        } 
        return $this->where(['slug' => $slug])->first();
    } 
}
