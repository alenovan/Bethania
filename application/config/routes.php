<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Controller_home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'Controller_dashboard_admin';
$route['dashboard'] = 'Controller_dashboard_admin/dashboard';

// User Routes
$route[md5(SHA1(md5('user')))] = 'Controller_user';
$route[md5(SHA1(md5('user/add/view')))] = 'Controller_user/add_view';
$route[md5(SHA1(md5('user/add')))] = 'Controller_user/add_user';
$route[md5('user/edit/view').'/(:any)'] = 'Controller_user/edit_view/$i';
$route['user/edit/(:any)'] = 'Controller_user/edit_user/$i';
// Slider
$route[md5(SHA1(md5('slider')))] = 'Controller_slider';
$route[md5(SHA1(md5('slider/add')))] = 'Controller_slider/add_slider';
$route[md5(SHA1(md5('slider/add/data')))] = 'Controller_slider/add_slider_data';
$route[md5('slider/edit/view').'/(:any)'] = 'Controller_slider/edit_view/$i';
$route['slider/edit/(:any)'] = 'Controller_slider/edit_slider/$i';
// Content 1
$route[md5(SHA1(md5('content1')))] = 'Controller_content1';
$route[md5(SHA1(md5('content1/add')))] = 'Controller_content1/add_content1_view';
$route[md5(SHA1(md5('content1/add/data')))] = 'Controller_content1/add_content1';
$route[md5('content1/edit/view').'/(:any)'] = 'Controller_content1/edit_view/$i';
$route['content1/edit/(:any)'] = 'Controller_content1/edit_content1/$i';
// Content 2
$route[md5(SHA1(md5('content2')))] = 'Controller_content2';
$route[md5(SHA1(md5('content2/add')))] = 'Controller_content2/add_content2';
$route[md5(SHA1(md5('content2/add/data')))] = 'Controller_content2/add_content2_data';
$route[md5(SHA1(md5('content2/add/slider')))] = 'Controller_content2/add_slider_content2';
// Content 3
$route[md5(SHA1(md5('content3')))] = 'Controller_content3';
$route[md5(SHA1(md5('content3/add')))] = 'Controller_content3/add_content3';
$route[md5(SHA1(md5('content3/add/data')))] = 'Controller_content3/add_content3_data';
$route[md5('content3/edit/view').'/(:any)'] = 'Controller_content3/edit_view/$i';
$route['content3/edit/(:any)'] = 'Controller_content3/edit_content3/$i';