<?php

namespace App\Controllers;

class Transaksi extends BaseController
{
    public function index()
    {
        echo view('Layout/header');
        echo view('transaksi/Transaksi');
        echo view('Layout/footer');
    }

    public function TambahTransaksi()
    {
        echo view('Layout/header');
        echo view('transaksi/tambahTransaksi');
        echo view('Layout/footer');
    }
    public function UbahTransaksi()
    {
        echo view('Layout/header');
        echo view('transaksi/UbahTransaksi');
        echo view('Layout/footer');
    }}