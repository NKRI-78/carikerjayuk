<?php

namespace Config;

$routes = Services::routes();
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
  require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// $routes->get('/', 'Home::index', ['namespace' => 'App\Controllers\Home']);
// $routes->get('/about-us', 'Aboutus::index', ['namespace' => 'App\Controllers\Aboutus']);

$routes->get('/', 'Home::index');

$routes->get('/refferal/(:any)', 'Home::refferal/$1');

$routes->get('/auth/login', 'Login::login');
$routes->post('/auth/login', 'Login::store');
$routes->get('/auth/register', 'Login::register');
$routes->post('/auth/register', 'Login::postRegister');

$routes->get('/chat-box', 'ChatBox::index');

$routes->get('/term-and-condition', 'TermAndCondition::index');

$routes->get('/about-us', 'AboutUs::index');

$routes->get('/how-to-use', 'HowToUse::index');

if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
  require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
