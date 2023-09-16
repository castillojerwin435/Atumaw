<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'ProductController::castillojerwin435');
$routes->get('/product/(:any)', 'ProductController::product/$1');