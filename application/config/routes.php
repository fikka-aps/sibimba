<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['detail_promo/(:any)'] = 'Auth/detail_promo/$1';
$route['detail/(:any)'] = 'Auth/detail/$1';
$route['bimbel_list'] = 'Admin/bimbel_list';
$route['editBimbel'] = 'Admin/editBimbel';
$route['editPromo'] = 'Admin/editPromo';
$route['addPromo'] = 'Admin/addPromo';
$route['addBimbel'] = 'Admin/addBimbel';
$route['editUser'] = 'Admin/editUser';
$route['deletePromo/(:any)'] = 'Admin/deletePromo/$1';
$route['deleteBimbel/(:any)'] = 'Admin/deleteBimbel/$1';
$route['deleteUser/(:any)'] = 'Admin/deleteUser/$1';
$route['promo'] = 'Admin/promo';
$route['user'] = 'Admin/user';
$route['message'] = 'Admin/message';
$route['dashboard'] = 'Admin/dashboard';
$route['logout'] = 'Auth/logout';
$route['login'] = 'Auth/login';
$route['bimbel_search'] = 'Auth/bimbel_search';
$route['bimbel'] = 'Auth/bimbel';
$route['contact'] = 'Auth/contact';
$route['default_controller'] = 'Auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
