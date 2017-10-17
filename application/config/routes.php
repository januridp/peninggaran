<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['test'] = 'TestController';
$route['home'] = 'Welcome';

$route['data'] = 'Data/DataController/index';
$route['data/view'] = 'Data/DataController/view';