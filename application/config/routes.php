<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'users/HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*==admin==*/
$route['admin'] = 'admin/AdminController';
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
$route['admin/logo/destroy/([a-zA-Z0-9]+)'] = 'admin/setting/LogoController/destroy/$1';
$route['admin/logo/status'] = 'admin/setting/LogoController/status';
$route['admin/logo/edit'] = 'admin/setting/LogoController/edit_data';
$route['admin/logo/logo_update'] = 'admin/setting/LogoController/update_data';


/*-----------------------Banner------------*/
$route['admin/banner'] = 'admin/setting/BannerController';
$route['admin/banner_add'] =  'admin/setting/BannerController/banner_add';
$route['admin/banner/destroy'] =  'admin/setting/BannerController/destroy';
$route['admin/banner/status'] =  'admin/setting/BannerController/status';
$route['admin/banner/edit'] = 'admin/setting/BannerController/edit_data';
$route['admin/banner/banner_update'] = 'admin/setting/BannerController/update_data';


/*-----------------------Clients------------*/
$route['admin/project'] = 'admin/client/ClientController';
$route['admin/client_add'] = 'admin/client/ClientController/client_add';
$route['admin/project/destroy'] = 'admin/client/ClientController/destroy';   //project
$route['admin/project/status'] = 'admin/client/ClientController/status';
$route['admin/project/edit'] = 'admin/client/ClientController/edit_data';
$route['admin/project/client_update'] = 'admin/client/ClientController/update_data';


/*-----------------------contact------------*/
$route['admin/contact'] = 'admin/contact/ContactController';
$route['admin/contact_add'] = 'admin/contact/ContactController/contact_add';
$route['admin/contact/destroy'] = 'admin/contact/ContactController/destroy';
$route['admin/contact/status'] = 'admin/contact/ContactController/status';
$route['admin/contact/edit'] = 'admin/contact/ContactController/edit_data';
$route['admin/contact/contact_update'] = 'admin/contact/ContactController/update_data';

/*-----------------------Blogs------------*/
$route['admin/blogs'] = 'admin/blogs/BlogsController';
$route['admin/blogs_add'] = 'admin/blogs/BlogsController/blogs_add';
$route['admin/blogs/destroy'] = 'admin/blogs/BlogsController/destroy';
$route['admin/blogs/status'] = 'admin/blogs/BlogsController/status';
$route['admin/blogs/edit'] = 'admin/blogs/BlogsController/edit_data';
$route['admin/blogs/blogs_update'] = 'admin/blogs/BlogsController/update_data';


/*-----------------------Service------------*/ 
$route['admin/service'] = 'admin/setting/ServiceController';
$route['admin/service_add'] =  'admin/setting/ServiceController/service_add';
$route['admin/service/destroy'] =  'admin/setting/ServiceController/destroy';
$route['admin/service/status'] =  'admin/setting/ServiceController/status';
$route['admin/service/edit'] = 'admin/setting/ServiceController/edit_data';
$route['admin/service/service_update'] = 'admin/setting/ServiceController/update_data';

/*-----------------------About Us------------*/ 
$route['admin/aboutus'] = 'admin/setting/AboutusController';
$route['admin/aboutus_add'] =  'admin/setting/AboutusController/aboutus_add'; 
$route['admin/aboutus/destroy'] =  'admin/setting/AboutusController/destroy';
$route['admin/aboutus/edit'] = 'admin/setting/AboutusController/edit_data';
$route['admin/aboutus/aboutus_update'] = 'admin/setting/AboutusController/update_data';


/*-----------------------Product------------*/ 
$route['admin/product'] = 'admin/product/ProductController';
$route['admin/product_add'] =  'admin/product/ProductController/product_add'; 
$route['admin/product/destroy'] =  'admin/product/ProductController/destroy';
$route['admin/product/edit'] = 'admin/product/ProductController/edit_data';
$route['admin/product/product_update'] = 'admin/product/ProductController/update_data';
$route['admin/product/status'] =  'admin/product/ProductController/status';



/*-----------------------Query------------*/ 
$route['admin/query'] = 'admin/query/QueryController';

/*----------------------- Appointment------------*/ 
$route['admin/appointment'] = 'admin/appointment/AppointmentController';
$route['admin/appointment/destroy'] =  'admin/appointment/AppointmentController/destroy';

/*----------------------- Testimonials------------*/ 
$route['admin/testimonials'] = 'admin/testimonials/TestimonialsController';
$route['admin/testimonials/destroy'] = 'admin/testimonials/TestimonialsController/destroy';
$route['admin/testimonials/status'] = 'admin/testimonials/TestimonialsController/status';




/*-----------------------Footer & Contact------------*/
$route['admin/footercontact'] = 'admin/setting/FooterContactController';
$route['admin/footercontact_add'] = 'admin/setting/FooterContactController/footcontact_add';
$route['admin/footercontact/destroy'] = 'admin/setting/FooterContactController/destroy';
$route['admin/footercontact/status'] = 'admin/setting/FooterContactController/status';
$route['admin/footercontact/edit'] = 'admin/setting/FooterContactController/edit_data';
$route['admin/footercontact/footercontact_update'] = 'admin/setting/FooterContactController/update_data';


///////*********************** USERS **************************////

$route['home'] = 'users/HomeController';

//BLOG//
//$route['blog'] = 'users/blogs/BlogsController';

/*-----------------------About------------*/ 
$route['about'] = 'users/about/AboutController';

/*-----------------Appointment-------------*/

$route['appointment'] = 'users/appointment/AppointmentController/appointment_add';


/*----------------Testimonials--------------*/

$route['testimonials'] = 'users/testimonials/TestimonialsController';
$route['testimonial_add'] = 'users/testimonials/TestimonialsController/testimonials_add';



/*-----------------------blog------------*/ 
$route['blog'] = 'users/blog/BlogController';
$route['blog_details/(:any)'] = 'users/blog/BlogController/blog_detalis/$1';
// $route['blog_details/([a-zA-Z0-9]+)'] = 'users/blog/BlogController/blog_detalis/$1';


/*-----------------------Contact------------*/
$route['contact'] = 'users/contact/ContactController';
$route['contact_add'] = 'users/contact/ContactController/contact_add';

/*-----------------------project------------*/
$route['project'] = 'users/project/ProjectController';



/*-----------------------product------------*/
$route['product'] = 'users/product/ProductController';