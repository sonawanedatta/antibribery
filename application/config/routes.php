<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['dashboard'] = 'admin/dashboard';
$route['login'] = 'home/login';
// $route['insert_data'] = 'admin/home';
$route['insert_data'] = 'admin/tender_insert';
$route['tender_update'] = 'tender/tender_update';
$route['tender_info'] = 'tender/tender_info';
$route['tender_tracker'] = 'tender/tender_tracker';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
