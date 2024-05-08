<?php
// app/Controllers/BlogController.php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Controller;

class BlogController extends Controller
{

    private string $title = 'PT.Astha ';
    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->getPosts();
        return view('dashboard/header',$data) . view('dashboard/blog', $data) . view('dashboard/footer',$data);
    }

    public function show($id)
    {
        $model = new PostModel();
        $data['post'] = $model->getPost($id);
        return view('dashboard/blog_view', $data);
    }

    public function tambah()
    {
        $data['title'] = $this->title . "Tambah data postingan";
        return view('dashboard/blog_tambah', $data);
    }

    public function store()
    {
        $model = new PostModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'author' => $this->request->getPost('author'),
        ];

        // Upload gambar dan simpan nama file ke database
        $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/blog', $newName);
            $data['image'] = $newName;
        }
        $model->addPost($data);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $model = new PostModel();
        $data['post'] = $model->getPost($id);
        return view('dashboard/blog_edit', $data);
    }

    public function update($id)
    {
        $model = new PostModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'author' => $this->request->getPost('author'),
        ];

        // Jika ada gambar baru, upload dan simpan nama file ke database
        $image = $this->request->getFile('image');
        if ($image !== null && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/blog', $newName);
            $data['image'] = $newName;

            // Hapus gambar lama jika ada
            $slider = $sliderModel->find($id);
            if ($slider['image']) {
                unlink(ROOTPATH . 'public/blog/' . $slider['image']);
            }
        }

        $model->updatePost($id, $data);
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $PostModel = new PostModel();
        
        // Hapus gambar dari server jika ada
        $post = $PostModel->find($id);
        if ($post['image']) {
            unlink(ROOTPATH . 'public/uploads/' . $post['image']);
        }

        $PostModel->delete($id);

        // Redirect kembali ke halaman daftar slider
        return redirect()->to(site_url('/admin'));
    }

}

?>
