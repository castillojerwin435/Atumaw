<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'ProductController::castillojerwin435');
$routes->get('/product/(:any)', 'ProductController::product/$1');