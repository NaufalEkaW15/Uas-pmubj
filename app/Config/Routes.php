<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Page::index');
$routes->get('about', 'Page::about');
$routes->get('faqs', 'Page::faqs');

$routes->get('/Pengaduan', 'Pengaduan::index');

// Route for Pengaduan detail action
$routes->get('/Pengaduan/(:segment)', 'Pengaduan::detail/$1');

// Route for Pengaduan create and save actions
$routes->get('/Pengaduan/create', 'Pengaduan::create');
$routes->post('/Pengaduan/save', 'Pengaduan::save');



