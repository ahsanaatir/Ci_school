<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['students/load_attendance'] = 'students/load_attendance';
$route['students/search'] = 'students/search';
$route['students/add'] = 'students/add';
$route['students'] = 'students/index';
$route['home'] = 'home/index';
$route['default_controller'] = 'users/login';

//$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
