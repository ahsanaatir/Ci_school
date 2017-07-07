<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['teachers/add'] = "teachers/add";
$route['teachers'] = "teachers/index";
$route['students/search'] = 'students/search';
$route['students/add'] = 'students/add_student';
$route['students'] = 'students/index';
$route['home'] = 'home/index';
$route['default_controller'] = 'users/login';

//$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
