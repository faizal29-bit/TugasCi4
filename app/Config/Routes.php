<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TiketController::index');
$routes->get('/pages', 'TiketController::index');
$routes->get('/pages/create', 'TiketController::create');
$routes->post('/pages/store', 'TiketController::store');
$routes->get('/pages/edit/(:num)', 'TiketController::edit/$1');
$routes->post('/pages/update/(:num)', 'TiketController::update/$1');
$routes->get('/pages/delete/(:num)', 'TiketController::delete/$1');
$routes->get('/pages/searchResults', 'TiketController::search');

