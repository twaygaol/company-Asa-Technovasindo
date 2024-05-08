<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProdukModel;

class Produk extends BaseController
{
    protected $title = "pt. astha";
    protected $ProdukModel;

    public function __construct()
    {
        $this->ProdukModel = new ProdukModel();
    }

    public function index()
    {
        $data['title'] = $this->title . "setting produk";
        $data['produks'] = $this->ProdukModel->findAll();

        // Load view dengan data slider
        return view('dashboard/header', $data) . view('dashboard/produk/view', $data) . view('dashboard/footer', $data);
    }

    public function tambah()
    {

        $data['title'] = $this->title . "tambah data";
        return view('dashboard/produk/produk_tambah', $data);
    }
    // public function create()
    // {
    //     $data['title'] = $this->title . "tambah data";
    //     return view('dashboard/header', $data) . view('dashboard/sliders/slider_tambah', $data) . view('dashboard/footer', $data);
    //     // return view('admin/slider/create');
    // }
    
    // Menyimpan data ke database untuk tambah data
    public function store()
    {
        $ProdukModel = new ProdukModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'keterangan' => $this->request->getPost('keterangan')
        ];

        // Upload gambar dan simpan nama file ke database
        $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/produk', $newName);
            $data['image'] = $newName;
        }

        $ProdukModel->insert($data);

        // Redirect kembali ke halaman daftar slider
        return redirect()->to('/admin');
    }

    // Edit data slider
    // public function edit($id)
    // {
    //     $sliderModel = new SliderModel();
    //     $data['slider'] = $sliderModel->find($id);

    //     return view('admin/slider_edit', $data);
    // }

   // menyimpan perubahan edit slider

    public function update($id)
    {
        $ProdukModel = new ProdukModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ];

        // Jika ada gambar baru, upload dan simpan nama file ke database
        $image = $this->request->getFile('image');
        if ($image !== null && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/produk', $newName);
            $data['image'] = $newName;

            // Hapus gambar lama jika ada
            $produk = $ProdukModel->find($id);
            if ($produk['image']) {
                unlink(ROOTPATH . 'public/produk/' . $produk['image']);
            }
        }

        $ProdukModel->update($id, $data);

        // Redirect kembali ke halaman daftar slider
        return redirect()->to(site_url('/admin'));
    }

    // mengubah data produk
    public function ubah($id)
    {
        $sliderModel = new SliderModel();
        $data['title'] = $this->title . "edit data";
        $data['slider'] = $sliderModel->find($id);

        return view('dashboard/slider_edit', $data);
    }

    
    // menghapus data produk
    public function delete($id)
    {
        $ProdukModel = new ProdukModel();
        
        // Hapus gambar dari server jika ada
        $produk = $ProdukModel->find($id);
        if ($produk['image']) {
            unlink(ROOTPATH . 'public/produk/' . $produk['image']);
        }

        $ProdukModel->delete($id);

        // Redirect kembali ke halaman daftar slider
        return redirect()->to(site_url('/admin'));
    }



}

?>