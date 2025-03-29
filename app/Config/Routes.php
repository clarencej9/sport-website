<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\Users;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('/(:segment)', [Pages::class, 'view']);
$routes->get('/(:segment)', [\App\Controllers\Pages::class, 'view']);
