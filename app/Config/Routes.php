<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::view');
$routes->get('home', 'Pages::view/home');
$routes->get('football', 'Pages::view/football');
$routes->get('matches', 'Matches::index');
$routes->get('teams', 'Pages::view/teams');


// Optional: for search bar (RIA)
$routes->get('search/teams', 'Search::teams');
