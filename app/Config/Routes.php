<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('signin', 'SigninController::index');
$routes->post("signin/submit", "SigninController::submit");

$routes->group('dashboard', ["filter" => "auth"], function (RouteCollection $routes) {
    $routes->get("", "DashboardController::index");
});
