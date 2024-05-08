<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/artikel', 'Home::blog');
$routes->get('/about', 'Home::about');
$routes->get('/login', 'User::login');
$routes->get('/logout', 'User::logout');
$routes->get('/register', 'User::register');
$routes->post('/login/auth', 'User::login_auth');
$routes->post('/register/auth', 'User::register_auth');

//admin panel slider
$routes->get('/admin', 'dashboard::index');
$routes->get('/admin/slider', 'dashboard::slider');
$routes->get('/admin/tambah', 'dashboard::tambah');
$routes->post('/admin/slider/store', 'Slider::store');
$routes->post('/admin/update/(:num)', 'Slider::update/$1');
$routes->get('/admin/ubah/(:num)', 'dashboard::ubah/$1');
$routes->get('/admin/hapus/(:num)', 'Slider::delete/$1');



// admin panel blog
// $routes->get('/admin/blog', 'Dashboard::blog');

// app/Config/Routes.php
$routes->get('/admin/blog', 'BlogController::index');
$routes->get('/admin/blog/show/(:num)', 'BlogController::show/$1');
$routes->get('/admin/create', 'BlogController::tambah');
$routes->post('/admin/blog/store', 'BlogController::store');
$routes->get('/admin/blog/edit/(:num)', 'BlogController::edit/$1');
$routes->post('/admin/blog/update/(:num)', 'BlogController::update/$1');
$routes->get('/admin/blog/delete/(:num)', 'BlogController::delete/$1');


// dashboard produk
$routes->get('/admin/produk', 'Produk::index');
$routes->get('/admin/produk/tambah', 'Produk::tambah');
$routes->post('/admin/produk/store', 'Produk::store');
$routes->post('/admin/produk/update/(:num)', 'produk::update/$1');
$routes->get('/admin/produk/ubah/(:num)', 'Produk::ubah/$1');
$routes->get('/admin/produk/hapus/(:num)', 'Produk::delete/$1');

// dashboard profile

$routes->get('/admin/profile', 'Profile::index');
$routes->get('/admin/Profile/tambah', 'Profile::tambah');
$routes->post('/admin/profile/store', 'Profile::store');
$routes->post('/admin/profile/update/(:num)', 'Profile::update/$1');
$routes->get('/admin/profile/ubah/(:num)', 'Profile::ubah/$1');
$routes->get('/admin/profile/hapus/(:num)', 'Profile::delete/$1');



// use App\Controllers\Pages;
// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('(:segment)', [Pages::class, 'view']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
