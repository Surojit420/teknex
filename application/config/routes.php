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
$route['admin/logo/destroy'] = 'admin/setting/LogoController/destroy';
$route['admin/logo/status'] = 'admin/setting/LogoController/status';
$route['admin/logo/edit_data'] = 'admin/setting/LogoController/edit_data';

/*-----------------------Banner------------*/
$route['admin/banner'] = 'admin/setting/BannerController';
$route['admin/add_banner'] =  'admin/setting/BannerController/banner_add';
$route['admin/banner/destroy'] =  'admin/setting/BannerController/destroy';
$route['admin/banner/status'] =  'admin/setting/BannerController/status';
$route['admin/banner/edit'] = 'admin/setting/BannerController/';

/*-----------------------Clients------------*/
$route['admin/client'] = 'admin/setting/ClientsController';
$route['admin/client_add'] = 'admin/setting/ClientsController/client_add';
$route['admin/client/destroy'] = 'admin/setting/ClientsController/destroy';
$route['admin/client/status'] = 'admin/setting/ClientsController/status';

$route['admin/footercontact'] = 'admin/setting/FooterContactController';

$route['admin/business'] = 'admin/business/BusinessController';
$route['admin/query'] = 'admin/query/QueryController';
$route['admin/edit'] = 'admin/query/QueryController';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
