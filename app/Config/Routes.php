<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('profile', 'Profile::index');

$routes->get('autentikasi', 'Autentikasi::index');
$routes->post('processLogin', 'Autentikasi::processLogin');
$routes->get('logout', 'Autentikasi::logout');

$routes->get('registrasi', 'Registerasi::index');
$routes->post('register/process', 'Registerasi::process');
