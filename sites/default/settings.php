<?php

switch($_SERVER['HTTP_HOST']) {
	
	
	case "devconnect.apigee.com":
		
		$databases = array(
			'default' => 
		  array (
		    'default' => 
		    array (
		      'database' => 'devconnect4',
		      'username' => 'devconnect',
		      'password' => 'd3vc0nnect4G',
		      'host' => 'cmy00apigee',
		      'port' => '',
		      'driver' => 'mysql',
		      'prefix' => '',
		    ),
		  ),	
		);
		break;
	
	default:
	
		$databases = array(
			'default' => 
		  array (
		    'default' => 
		    array (
		      'database' => 'devconnect4',
		      'username' => 'drupal',
		      'password' => 'we-love-apis',
		      'host' => 'localhost',
		      'port' => '',
		      'driver' => 'mysql',
		      'prefix' => '',
		    ),
		  ),	
		);
	
	
}

$update_free_access = FALSE;
$drupal_hash_salt = '';
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);

$conf['404_fast_paths_exclude'] = '/\/(?:styles)\//';
$conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$conf['404_fast_html'] = '<!DOCTYPE HTML><html lang="en"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

