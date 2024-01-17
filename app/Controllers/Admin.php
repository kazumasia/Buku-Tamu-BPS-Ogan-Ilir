<?php

namespace App\Controllers;

use App\Models\PostModel;
use App\Models\FeedbackModel;

class Admin extends BaseController
{
    protected $PostModel; // Tambahkan properti model

    protected $db, $builder;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->PostModel = new PostModel(); // Muat model di konstruktor

    }
    public function index()
    {
        $data['title'] = 'User List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $this->builder = $this->db->table('users');
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();
        $data['users'] = $query->getResult();
        return view('admin/index', $data);
    }
    public function detail($id = 0)
    {
        $data['title'] = 'User Detail';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();


        $this->builder->select('users.id as userid, username, email,fullname,user_image, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();
        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }
        return view('admin/detail', $data);
    }
    public function list()
    {
        $data['title'] = 'Pengunjung List';

        // Load PengunjungModel
        $pengunjungModel = new PostModel();

        // Get all data from PengunjungModel
        $data['pengunjung'] = $pengunjungModel->getAllData();

        return view('admin/list', $data);
    }
    public function edit($id)
    {
        // Ambil data pengunjung berdasarkan ID (sesuaikan dengan nama model dan database Anda)
        $data['pengunjung'] = $this->PostModel->find($id);
        $PostModel = new PostModel();
        $data['elo'] = $PostModel->getKeperluanStats();

        // Load view untuk halaman edit
        return view('admin/edit', $data);
    }

    public function update($id = 0)
    {
        // Proses pembaruan data
        $dataToUpdate = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'no_telp' => $this->request->getPost('no_telp'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'keperluan' => $this->request->getPost('keperluan'),
        ];

        // Panggil method model untuk melakukan update
        $this->PostModel->update($this->request->getPost('id'), $dataToUpdate);

        // Redirect ke halaman list atau halaman lain setelah update
        return redirect()->to('admin/list');
    }
    public function delete($id)
    {
        // Load PengunjungModel
        $pengunjungModel = new PostModel();

        // Panggil method model untuk melakukan delete
        $pengunjungModel->delete($id);

        // Redirect ke halaman list atau halaman lain setelah delete
        return redirect()->to('/admin/list');
    }
    public function wait(): string
    {
        return view('user/wait');
    }
    public function pst()
    {
        // Tampilkan halaman "Silahkan Ke PST"
        $data['title'] = 'Silahkan Ke PST';
        return view('pst_page', $data);
    }

    public function ruangtunggu()
    {
        // Tampilkan halaman "Silahkan Menunggu di Ruang Tunggu"
        $data['title'] = 'Silahkan Menunggu di Ruang Tunggu';
        return view('ruangtunggu_page', $data);
    }
    public function store()
    {
        // Load the model using the service() method
        $postModel = new PostModel();

        // Get current timestamp
        $timestamp = date('Y-m-d H:i:s');

        // Get form data
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'no_telp' => $this->request->getPost('no_telp'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'keperluan' => $this->request->getPost('keperluan'),
            'waktu_masuk' => $timestamp, // Add the timestamp field
            // Add more fields as needed
        ];

        // Call the model method to insert data into the database
        $postModel->insertData($data);

        $data['pengunjung'] = $postModel->getAllData();
        $keperluan = $this->request->getPost('keperluan');


        // Periksa nilai keperluan
        if ($keperluan === 'PST') {
            // Jika keperluan adalah PST, arahkan ke halaman "Silahkan Ke PST"
            return redirect()->to('user/wait');
        } else {
            // Jika bukan PST, arahkan ke halaman "Silahkan Menunggu di Ruang Tunggu"
            return redirect()->to('user/tunggu');
        }
    }


    public function statistik()
    {


        return view('admin/statistik', );
    }

    public function puas()
    {
        $FeedbackModel = new FeedbackModel();
        $data['pengunjung'] = $FeedbackModel->findAll();

        return view('admin/puas', $data);
    }

    public function deletePuas($id)
    {
        $pengunjungModel = new FeedbackModel();
        $pengunjungModel->delete($id);

        return redirect()->to('/admin/puas')->with('success', 'Pengunjung deleted successfully.');
    }

}
