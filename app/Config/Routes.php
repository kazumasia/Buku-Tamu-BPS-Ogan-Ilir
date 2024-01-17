<?php

use CodeIgniter\Router\RouteCollection;

$routes->setAutoRoute(true);
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User::index');

$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);
$routes->get('/admin/list', 'Admin::list', ['filter' => 'role:admin']);
$routes->get('edit/(:num)', 'PostController::edit/$1');
$routes->get('admin/delete/(:segment)', 'Admin::delete/$1', ['as' => 'delete_pengunjung']);
$routes->get('admin/deletePuas/(:segment)', 'Admin::deletePuas/$1', ['as' => 'delete_puas']);
$routes->get('get-keperluan-stats', 'PostController::getKeperluanStats');
$routes->get('get-gender-stats', 'PostController::getGenderStats');
$routes->get('get-pekerjaan-stats', 'PostController::getPekerjaanStats');
$routes->get('get-tanggal-stats', 'PostController::getTanggalStats');
$routes->get('get-bulan-stats', 'PostController::getBulanStats');
$routes->get('get-tahun-stats', 'PostController::getTahunStats');
$routes->get('get-feedback-stats', 'PostController::getFeedbackStats');
$routes->get('get-pendidikan-stats', 'PostController::getPendidikanStats');
$routes->get('get-jam-stats', 'PostController::getJamStats');
$routes->get('filter-stats', 'PostController::filterStats');
$routes->get('feedback', 'Feedback::index');


$routes->get('export-to-excel', 'PostController::exportToExcel');
$routes->get('export-feedback', 'PostController::exportFeedback', ['as' => 'export_feedback']);




