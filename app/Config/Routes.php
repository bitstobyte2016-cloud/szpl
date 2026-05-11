<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/about-us', 'HomeController::about_us');
$routes->get('/products', 'HomeController::products');
$routes->get('/sustainability', 'HomeController::sustain');
$routes->get('/career', 'HomeController::career');
$routes->get('/contact-us', 'HomeController::contact_us');
