<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */




 $routes->group('', ['filter' => 'login'], function($routes) {
  
    $routes->get('/login-user', 'LoginRegisterController::loginuser');
    $routes->get('/register-user', 'LoginRegisterController::registeruser');
    



});
$routes->post('/registerposts', 'LoginRegisterController::registerpost');
$routes->post('/loginposts', 'LoginRegisterController::loginpost');
$routes->get('/logout', 'LoginRegisterController::logout');








$routes->group('', [ 'filter' => 'auth'], function ($routes) {

    $routes->get('/', 'AdminController::indexdashboard');
    $routes->get('/product', 'ProductController::indexproduct');
    $routes->get('/products', 'ProductController::indexproducts');
    $routes->post('/product-post', 'ProductController::upload');
    $routes->post('/product-edit-(:segment)', 'ProductController::update/$1');
    $routes->get('/admin-productedit-(:num)', 'ProductController::indexproductedit/$1');

    $routes->get('/category', 'CategoryController::index');
    $routes->post('/categoryadd', 'CategoryController::create');
    $routes->post('category/update/(:segment)', 'CategoryController::update/$1');
    $routes->get('category/delete/(:segment)', 'CategoryController::delete/$1');

    $routes->get('brands', 'BrandsController::indexbrands');
    $routes->post('brands/create', 'BrandsController::createbrands');
    $routes->post('brands/update/(:num)', 'BrandsController::updatebrands/$1');
    $routes->get('brands/delete/(:num)', 'BrandsController::deletebrands/$1');

    $routes->get('cargo', 'CargoController::indexcargo');
    $routes->post('cargo/create', 'CargoController::createcargo');
    $routes->post('cargo/update/(:num)', 'CargoController::updatecargo/$1');
    $routes->get('cargo/delete/(:num)', 'CargoController::deletecargo/$1');

    $routes->get('/tatilmodeapi', 'TatilModeControllerApi::tatilmodeapi');
    
    //
});


