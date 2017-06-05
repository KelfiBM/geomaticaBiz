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
$route['default_controller'] = 'home';
$route['404'] = 'my404';
$route['404_override'] = 'my404';
$route['translate_uri_dashes'] = FALSE;

$route['About'] = 'home/about';
$route['about'] = 'home/about';
$route['Team'] = 'home/team';
$route['Contact'] = 'home/contact';
$route['contact'] = 'home/contact';
$route['contacto'] = 'home/contact';
$route['Contacto'] = 'home/contact';
$route['Home'] = 'home/index';
$route['home'] = 'home/index';
$route['sendcontact'] = 'home/sendContact';
$route['Index'] = 'home/index';
$route['index'] = 'home/index';
$route['producto/categoria/(:num)'] = "products/categorie/$1";
$route['producto/categorie/(:num)'] = "products/categorie/$1";
$route['producto/categoria'] = "products/categorie";
$route['producto/categorie'] = "products/categorie";
$route['producto/marca/(:num)'] = "products/marca/$1";
$route['producto/marca'] = "products/marca";
$route['producto/(:num)'] = "products/producto/$1";
$route['product/(:num)'] = "products/producto/$1";