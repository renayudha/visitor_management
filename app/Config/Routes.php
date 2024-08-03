<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'DashboardController::index');


$routes->group('pengunjung', function (RouteCollection $routes) {
    $routes->match(['get','post'],'tambah','PengunjungController::tambah');
    $routes->match(['get','post'],'edit/(:num)','PengunjungController::edit/$1');
    $routes->get('detail/(:num)','PengunjungController::detail/$1');
    $routes->get('pdf/(:num)','PengunjungController::pdf/$1');
    $routes->get('excel','PengunjungController::excel');
    $routes->post('hapus/(:num)','PengunjungController::hapus/$1');
});