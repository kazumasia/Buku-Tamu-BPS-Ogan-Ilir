<?php

namespace App\Controllers;

use App\Models\PostModel;

class User extends BaseController
{
    protected $PostModel; // Declare the property

    public function __construct()
    {
        $this->PostModel = new PostModel(); // Load the model in the constructor
    }

    public function index()
    {
        // Assuming $ongoingVisitors is an array of ongoing visitors, retrieve it from your model or elsewhere
        $ongoingVisitors = $this->PostModel->getOngoingVisitors();

        // Pass the data to the view
        $data['ongoingVisitors'] = $ongoingVisitors;

        // Load the view and pass the data
        return view('user/index', $data);
    }

    public function forbiden(): string
    {
        return view('forbiden/index');
    }
    public function wait(): string
    {
        return view('user/wait');
    }
    public function bps(): string
    {
        return view('user/bps');
    }
    public function tunggu(): string
    {
        return view('user/tunggu');
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

}
