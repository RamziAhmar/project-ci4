<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/auth','Auth::index',['as'=> 'login']);
$routes->post('/auth/login','Auth::login');
$routes->get('/auth/register','Auth::register');
$routes->post('/auth/register','Auth::registerProcess');
$routes->get('/logout','Auth::logout');

$routes->get('/dosen', 'Dosen::index');
$routes->get('dosen/tambah_dosen', 'Dosen::btTambah');
$routes->post('/dosen', 'Dosen::create');

$routes->get('/user','User::index');