<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/index'] = 'admin';
$route['index.php/group/create_group'] = 'group/create_group';
$route['default_controller'] = 'group/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
