<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.



$routes->get('/students', 'StudentController::index');
$routes->get('/students/create','StudentController::create');
$routes->post('/students/add','StudentController::store');
$routes->get('students/edit/(:num)','StudentController::edit/$1');
$routes->put('students/update/(:num)','StudentController::update/$1');
$routes->delete('students/delete/(:num)','StudentController::delete/$1');
$routes->get('students/confirm-delete/(:num)','StudentController::confirmdelete/$1');


$routes->get('/employee','EmployeeController::index');
$routes->get('/employee/create1','EmployeeController::create1');
$routes->post('/employee/add1','EmployeeController::store1');
$routes->get('employee/edit1/(:num)','EmployeeController::edit1/$1');
$routes->put('employee/update1/(:num)','EmployeeController::update1/$1');
$routes->delete('employee/delete/(:num)','EmployeeController::delete/$1');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
