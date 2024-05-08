<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\SliderModel;
use App\Models\PostModel;
use App\Models\ProdukModel;
use App\Models\ProfileModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    private string $title = 'Pt.Astra Biotech | ';
    protected $ProdukModel;
    protected $ProfileModel;

    public function __construct()
    {
        $this->ProdukModel = new ProdukModel();
        $this->ProfileModel = new ProfileModel();
    }

    // public function index()
    // {
    //     $data['title'] = $this->title . "Beranda";
    //     // $sliderModel = new SliderModel();
    //     $data['session'] = \Config\Services::session();
    //     // Menggunakan model untuk mengambil semua data slider
    //     // $data['slider'] = $sliderModel->findAll();
    //     return view('page/header', $data) . view('page/beranda', $data) . view('page/footer', $data);
    // }
    public function index()
    {
        $data['title'] = $this->title . "Beranda ";

        // Bagian Upload Produk
        $ProdukModel = new ProdukModel();
        $data['produks'] = $this->ProdukModel->findAll();
        $data['session'] = \Config\Services::session();

        // Bagian profile
        $ProfileModel = new ProfileModel();
        $data['Profile'] = $this->ProfileModel->findAll();

        // Sliders 1
        $id = array('8'); // Daftar ID yang ingin Anda ambil datanya
        $sliderModel = new SliderModel();
        $data['sliders'] = $sliderModel->getTransactionsByCustomerIds($id);

        // sliders 2
        $id = array('9'); // Daftar ID yang ingin Anda ambil datanya
        $sliderModel = new SliderModel();
        $data['sliders2'] = $sliderModel->getTransactionsByCustomerIds($id);

        // Sliders 3
        $id = array('10'); // Daftar ID yang ingin Anda ambil datanya
        $sliderModel = new SliderModel();
        $data['sliders3'] = $sliderModel->getTransactionsByCustomerIds($id);
        return view('page/header', $data) . view('page/beranda', $data) . view('page/footer', $data);
    }
    public function blog()
    {
        $model = new PostModel();
        $data['title'] = $this->title . "Blog ";
        $data['session'] = \Config\Services::session();
        $data['posts'] = $model->getPosts();
        return view('page/header', $data) . view('page/blog', $data) . view('page/footer', $data);
    }
}
