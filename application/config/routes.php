<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'admin/AdminController';
/*==admin==*/
$route['verify'] = 'admin/AdminController/verify';
$route['admin/forgotpassword'] = 'admin/AdminController/forgotpass';
$route['admin/changepassword'] = 'admin/AdminController/resetpassword';
$route['admin/foorgot_pass_email'] = 'admin/AdminController/foorgot_pass_email';
$route['admin/dashboard'] = 'admin/DashboardController/index';
$route['logout'] = 'admin/AdminController/logout';
//--babusona--
/*-----------------------LOGO----------------*/
$route['admin/logo'] = 'admin/setting/LogoController';
$route['admin/logo_add'] = 'admin/setting/LogoController/add_logo';
$route['admin/destroy/([a-zA-Z0-9]+)'] = 'admin/setting/LogoController/destroy/$1';
$route['admin/logo/status'] = 'admin/setting/LogoController/status';
$route['admin/logo/edit_data'] = 'admin/setting/LogoController/edit_data';


$route['admin/footercontact'] = 'admin/setting/FooterContactController';
$route['admin/banner'] = 'admin/setting/BannerController';
$route['admin/business'] = 'admin/business/BusinessController';
$route['admin/query'] = 'admin/query/QueryController';
$route['admin/edit'] = 'admin/query/QueryController';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
