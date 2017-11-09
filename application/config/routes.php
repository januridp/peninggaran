<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['test'] = 'TestController/index';
$route['test/entri'] = 'TestController/entri';
$route['home'] = 'Welcome';

$route['data'] = 'Data/DataController/index';
$route['data/view'] = 'Data/DataController/view';
$route['data/entry'] = 'Data/DataController/entry';
$route['data/simpan'] = 'Data/DataController/simpan';
$route['data/get'] = 'Data/DataController/get';