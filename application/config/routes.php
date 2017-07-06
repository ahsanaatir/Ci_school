<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['teachers'] = "teachers/index";
$route['students/search'] = 'students/search';
$route['students/add'] = 'students/add_student';
$route['students/print_admission_form/(:num)'] = 'students/generate_admission_form/$1';
$route['students'] = 'students/index';
$route['home'] = 'home/index';
$route['default_controller'] = 'users/login';

//$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
