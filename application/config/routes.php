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

$route['man']                   = 'home/man';
$route['women']                 = 'home/women';
$route['child']                 = 'home/child';

$route['login']                 = 'login';          // login diarahkan ke controller login 
$route['register']              = 'register';    // register diarahkan ke controller register

$route['under-maintenance'] 	= 'home/underMaintenance';

$route['cart'] 					= 'cart';

$route['detail-product'] 		= 'product';

$route['admin'] 				= 'admin';


$route['baju-pria'] 			= 'kategori/baju_pria';
$route['celana-pria'] 			= 'kategori/celana_pria';
$route['jaket-pria'] 			= 'kategori/jaket_pria';
$route['topi-pria'] 			= 'kategori/topi_pria';
$route['sepatu-pria'] 			= 'kategori/sepatu_pria';
$route['jam-pria'] 			= 'kategori/jam_pria';

$route['baju-wanita'] 			= 'kategori/baju_wanita';
$route['celana-wanita'] 			= 'kategori/celana_wanita';
$route['jaket-wanita'] 			= 'kategori/jaket_wanita';
$route['topi-wanita'] 			= 'kategori/topi_wanita';
$route['sepatu-wanita'] 			= 'kategori/sepatu_wanita';
$route['jam-wanita'] 			= 'kategori/jam_wanita';

$route['baju-anak'] 			= 'kategori/baju_anak';
$route['celana-anak'] 			= 'kategori/celana_anak';
$route['jaket-anak'] 			= 'kategori/jaket_anak';
$route['topi-anak'] 			= 'kategori/topi_anak';
$route['sepatu-anak'] 			= 'kategori/sepatu_anak';
$route['jam-anak'] 			= 'kategori/jam_anak';