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
$route['default_controller']    = 'home';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['login']                 = 'login';          // login diarahkan ke controller login 
$route['register']              = 'register';    // register diarahkan ke controller register

$route['under-maintenance'] 	= 'home/underMaintenance';

$route['detail-product'] 		= 'product';

$route['admin'] 				= 'admin';


$route['home/man/baju'] 			= 'kategori/baju_pria';
$route['home/man/celana'] 			= 'kategori/celana_pria';
$route['home/man/jaket'] 			= 'kategori/jaket_pria';
$route['home/man/topi'] 			= 'kategori/topi_pria';
$route['home/man/sepatu'] 			= 'kategori/sepatu_pria';
$route['home/man/jam'] 			= 'kategori/jam_pria';

$route['home/women/baju'] 			= 'kategori/baju_wanita';
$route['home/women/celana'] 			= 'kategori/celana_wanita';
$route['home/women/jaket'] 			= 'kategori/jaket_wanita';
$route['home/women/topi'] 			= 'kategori/topi_wanita';
$route['home/women/sepatu'] 			= 'kategori/sepatu_wanita';
$route['home/women/jam'] 			= 'kategori/jam_wanita';

$route['home/child/baju'] 			= 'kategori/baju_anak';
$route['home/child/celana'] 			= 'kategori/celana_anak';
$route['home/child/jaket'] 			= 'kategori/jaket_anak';
$route['home/child/topi'] 			= 'kategori/topi_anak';
$route['home/child/sepatu'] 			= 'kategori/sepatu_anak';
$route['home/child/jam'] 			= 'kategori/jam_anak';