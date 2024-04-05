<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Transaksi', 'Transaksi::index');
$routes->get('/TambahTransaksi', 'Transaksi::TambahTransaksi');
$routes->get('/UbahTransaksi', 'Transaksi::UbahTransaksi');