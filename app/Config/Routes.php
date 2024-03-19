<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dosen', 'Dosen::index');
$routes->get('dosen/tambah_dosen', 'Dosen::btTambah');
$routes->post('/dosen', 'Dosen::create');