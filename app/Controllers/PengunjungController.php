<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PengunjungController extends BaseController
{
    public function index()
    {
        return view("pages/Pengunjung/index");
    }
    public function detail($id)
    {
        return view("pages/Pengunjung/detail");
    }
    public function tambah()
    {
        return view("pages/Pengunjung/tambah");
    }
    public function edit($id)
    {
        return view("pages/Pengunjung/edit"); 
    }
    public function hapus($id)
    {
        //
    }
    public function pdf($id)
    {
        return view("pages/Pengunjung/pdf");
    }
    public function excel()
    {
        //
    }
}