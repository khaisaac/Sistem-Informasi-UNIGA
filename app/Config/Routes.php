<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/data-dosen', 'Dosen::index');
$routes->get('/data-mahasiswa', 'Mahasiswa::index');
$routes->get('/data-program-studi', 'Prodi::index');
