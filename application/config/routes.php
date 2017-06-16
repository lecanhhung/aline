<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// Modules User default controller
$route['admin'] = "admin/home";

/*
// Blog
$route['blog'] = "home/blog";
$route['blog/ajxitems'] = "home/blog/ajxitems";
$route['blog/ajxcatitems'] = "home/blog/ajxcatitems";
$route['blog/(:any)'] = "home/blog/detail/$1";
$route['blog/category/(:any)'] = "home/blog/category/$1";

//Search
$route['search'] = "home/search";
$route['search/autocomplete'] = "home/search/autocomplete";
$route['search/autocomplete/(:any)'] = "home/search/autocomplete/$1";
$route['search/ajaxlisttour'] = "home/search/ajaxlisttour";
$route['search/ajaxcompare']  = "home/search/ajaxcompare";
$route['search/ajaxremovetour']  = "home/search/ajaxremovetour";

//facebook
$route['user_authentication'] = "home/user_authentication";

$route['search/test']  = "home/search/test";

//Profile
$route['profile'] = "home/profile";
$route['profile/update'] = "home/profile/update";

//Agency
$route['agency/(:any)'] = "home/agency/index/$1";

// view tour
$route['tour/(:any)'] = "home/tour/index/$1";

//downlad tour
$route['download/(:any)'] = "home/download/index/$1";
*/
