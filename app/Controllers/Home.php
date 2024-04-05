<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('Layout/header');
        echo view('transaksi/tambahTransaksi');
        echo view('Layout/footer');
    }
}