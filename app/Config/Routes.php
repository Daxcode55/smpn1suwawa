<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'pages::index');
$routes->get('/sambutan-kepala-sekolah', 'pages::sambutan');
$routes->get('/visi-dan-misi', 'pages::visiMisi');
$routes->get('/struktur-organisasi', 'pages::organisasi');
$routes->get('/civitas-akademik', 'pages::akademik');
