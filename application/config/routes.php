<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['home'] = 'welcome';
$route['data'] = 'data/DataController';
$route['data/view'] = 'data/DataController/view';