<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| DEVELOPMENT MODE / TRANSLATING MODE 
|--------------------------------------------------------------------------
|  If dev_mode is set TRUE,  
|  - Codeigniter Profiler will be enabled and the profiled information will be
|    displayed at the bottom of every page.
|  - Access to controlers defined $config['dev_ctlrs'] will be allowed. 
|  - Server IP address will be displayed at page header. 
|
|  If translating_mode is set TRUE,  
|  - All texts and messages difined in files under application/language/ dir 
|    will not be displayed to user's browser, the keys of the array in 
|    the file (=text codes or message codes) will be displayed instead.
|  
*/
$config['dev_mode']  = TRUE;
$config['dev_ctlrs'] = array('phpinfo', 'ci_email_test', 'scaff', '');
$config['translating_mode'] = false;
