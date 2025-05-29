<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('registrarse', 'Home::registrarse');
$routes->get('ingresar', 'Home::ingresar');
$routes->get('index', 'Home::index');
