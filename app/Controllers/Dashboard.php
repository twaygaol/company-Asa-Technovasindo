<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\SliderModel;

class Dashboard extends BaseController
{
    private string $title = 'PT.Astha ';
   
    public function index()
    {
        $session = \Config\Services::session();

        $data['title'] = $this->title . "DASHBOARD";
        $data['session'] = $session;
        $data['message'] = $session->getFlashdata('message');
        $data['email'] = $session->get('email');
        $data['token'] = $session->get('token');
        $data['isLogin'] = $session->get('isLogin');

        if (!$data['isLogin']) {
            return redirect()->to('/login');
        }

        return view('dashboard/header',$data) . view('dashboard/index', $data) . view('dashboard/footer',$data);
    }

    public function slider()
    {
        $data['title'] = $this->title . "Slider setting";
        $sliderModel = new SliderModel();
        $data['session'] = \Config\Services::session();
        // Menggunakan model untuk mengambil semua data slider
        $data['sliders'] = $sliderModel->findAll();
        return view('dashboard/header',$data) . view('dashboard/slider', $data) . view('dashboard/footer',$data);
    }


    public function tambah()
    {
        $data['title'] = $this->title . "Tambah data";
        return view('dashboard/slider_tambah', $data);
    }

    public function ubah($id)
    {
        $sliderModel = new SliderModel();
        $data['title'] = $this->title . "edit data";
        $data['slider'] = $sliderModel->find($id);

        return view('dashboard/slider_edit', $data);
    }



    public function blog()
    {
        $data['title'] = $this->title . "Blog setting";
        return view('dashboard/header',$data) . view('dashboard/blog', $data) . view('dashboard/footer',$data);
    }
}