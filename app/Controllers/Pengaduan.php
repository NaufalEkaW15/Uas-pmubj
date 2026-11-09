<?php

namespace App\Controllers;

use App\Models\PengaduanModel;

class Pengaduan extends BaseController
{
  protected $pengaduanModel;
  public function __construct()
  {
   $this->pengaduanModel = new PengaduanModel();
  }
public function index()
{
    $pengaduan = $this->pengaduanModel->findAll();  // Fetching data from model
    $data = [
        'title' => 'Daftar Pengaduan',
        'pengaduan' => $pengaduan
    ];
    return view('Pengaduan/index', $data);
}
  public function detail($slug)
{
  $data = [
      'title' => 'Detail Pengaduan',
      'pengaduan' => $this->pengaduanModel->getPengaduan($slug)
  ];
  $pengaduan = $this->pengaduanModel->where(['slug' => $slug])->first();
  if (empty($data['pengaduan'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('detail pengaduan tidak ditemukan');
  }
  $data = [
      'title' => 'Detail Pengaduan',
      'detail' => $pengaduan
  ];
  return view('Pengaduan/detail', $data);
}
  public function create()
  {
    $data = [
      'title' => 'Form Tambah Pengaduan'
    ];
    return view('Pengaduan/create', $data);
  }

  public function save()
  {
    $slug = url_title($this->request->getVar('nama_pengaduan'), '-', true);
    $this->pengaduanModel->save([
      'foto' => $this->request->getFile('foto'),
      'slug' => $slug,
      'nama_mahasiswa' => $this->request->getVar('nama_mahasiswa'),
      'nim' => $this->request->getVar('nim'),
      'nama_pengaduan' => $this->request->getVar('nama_pengaduan'),
      'tanggal_pengaduan' => date('Y-m-d H:i:s'),
    ]);
    session()->setFlashdata('pesan', 'Pengaduan berhasil ditambahkan.');
    return redirect()->to('/Pengaduan');
  }
}
// End of file: app/Controllers/Pengaduan.php
