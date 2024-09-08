<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('verIntegrantes','IntegrantesController::cargarIntegrantes');

$routes->post('guardarIntegrante','IntegrantesController::guardarIntegrantes');

$routes->get('eliminarIntegrante/(:num)', 'IntegrantesController::eliminarIntegrantes/$1');


$routes->get('localizarIntegrante/(:num)','IntegrantesController::localizarIntegrantes/$1');
$routes->post('modificarIntegrante','IntegrantesController::modificarIntegrantes');