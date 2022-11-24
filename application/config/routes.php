<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'IndexController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// User 
$route['brand/(:any)']['GET'] = 'IndexController/brand/$1';
$route['product-detail/(:any)']['GET'] = 'IndexController/product/$1';
$route['cart']['GET'] = 'IndexController/cart';
$route['login']['GET'] = 'IndexController/login';

// Admin 
//Login 
$route['Admin/Login']['GET'] = 'Admin/LoginController/index';
$route['Admin/login-admin']['POST'] = 'Admin/LoginController/login';
//Dashboard 
$route['Admin/Dashboard']['GET'] = 'Admin/DashboardController/index';
$route['logout']['GET'] = 'Admin/DashboardController/logout';
//Brand 
$route['Admin/brand/list']['GET'] = 'Admin/BrandController/index';
$route['Admin/brand/create']['GET'] = 'Admin/BrandController/create';
$route['Admin/brand/edit/(:any)']['GET'] = 'Admin/BrandController/edit/$1';
$route['Admin/brand/delete/(:any)']['GET'] = 'Admin/BrandController/delete/$1';
$route['Admin/brand/update/(:any)']['POST'] = 'Admin/BrandController/update/$1';
$route['Admin/brand/store']['POST'] = 'Admin/BrandController/store';

//Product 
$route['Admin/product/list']['GET'] = 'Admin/ProductController/index';
$route['Admin/product/create']['GET'] = 'Admin/ProductController/create';
$route['Admin/product/edit/(:any)']['GET'] = 'Admin/ProductController/edit/$1';
$route['Admin/product/delete/(:any)']['GET'] = 'Admin/ProductController/delete/$1';
$route['Admin/product/update/(:any)']['POST'] = 'Admin/ProductController/update/$1';
$route['Admin/product/store']['POST'] = 'Admin/ProductController/store';
//Customer
$route['Admin/customer/list']['GET'] = 'Admin/CustomerController/index';
$route['Admin/customer/view/(:any)']['GET'] = 'Admin/CustomerController/view/$1';
//$route['Admin/product/create']['GET'] = 'Admin/ProductController/create';
//$route['Admin/product/delete/(:any)']['GET'] = 'Admin/ProductController/delete/$1';
//$route['Admin/product/update/(:any)']['POST'] = 'Admin/ProductController/update/$1';
//$route['Admin/product/store']['POST'] = 'Admin/ProductController/store';

