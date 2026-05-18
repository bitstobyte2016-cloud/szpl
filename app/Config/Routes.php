<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/about_us', 'HomeController::about_us');
$routes->get('/products', 'HomeController::products');
$routes->get('/sustainability', 'HomeController::sustain');
$routes->get('/careers', 'HomeController::career');
$routes->get('/contact_us', 'HomeController::contact_us');
$routes->get('/policy','HomeController::policy');
$routes->get('/terms','HomeController::terms');

$routes->post(
    'send-query',
    'HomeController::sendQuery'
);
