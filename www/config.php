<?php
// - - - - - - - - - - - - [ user config start ] - - - - - - - - - - - - 

$site_name = 'Search It!';
$search_url_param_key='q';    // GET method argument
$search_placeholder = '';
$index_page_info = '';

// - - - - iframes - - - -

// iframes src
$iframes = [
	[
		'url' => './proxy/proxy.php?engine=baidu&q=%s',
		'width' => 51,
	],
	[
		'url' => './proxy/proxy.php?engine=google&q=%s',
		'width' => 48,
	],
];

// for mobile devices
$default_iframe_index = 1;

// - - - - proxy.php - - - -

// config files located in ./engines.d/
$proxy_enabled_engines = [
	'baidu',
	'google',
];

// - - - - log search history - - - -

$log_enabled = false;
$log_file_path = '/tmp/searchit.log';
$log_time_format = 'Y-m-d h:i:s P';
$log_ip_trust_headers = [
	// 'HTTP_CF_CONNECTING_IP',  // Cloudflare
	// 'HTTP_X_FORWARDED_FOR',   // X-Forwarded-For
];

// - - - - debug header and output - - - -

$debug = false;

// - - - - HTTP headers - - - - 

$headers_default_security = [
	'X-Frame-Options: SAMEORIGIN',
    'X-Content-Type-Options: nosniff',
    'X-XSS-Protection: 1; mode=block',
];

// more secure when display 3rd party content
$headers_3rd_party = [
	'Referrer-Policy: no-referrer',
    "Content-Security-Policy: referrer no-referrer; script-src 'self'; object-src 'none'; frame-src 'self'",
];



// - - - - - - - - - - - - [ user config end ] - - - - - - - - - - - - 

require_once('functions.php');

send_headers($headers_default_security);

if($log_enabled){
	$index_page_info .= 'Notice: search history log enabled. ';
}

if($debug){
	$index_page_info .=	'Notice: debug enabled. ';
}



