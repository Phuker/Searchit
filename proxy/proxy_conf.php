<?php
$baiduConf = ['url'=>'https://www.baidu.com/s?ie=utf-8&rn=20&wd=',
	'proxy'=>false,
	'proxyHost'=>'',
	'proxyPort'=>0,
	'sslCert'=>getcwd() . "/cert/baidu.com.crt",
	'beautyFunc'=>'baiduBeauty'];
function baiduBeauty($html){
	return str_replace('<div id="content_left">',  '<div id="content_left" style="padding-left:12px;">', $html);
}

$googleConf = ['url'=>'https://www.google.com/search?site=webhp&source=hp&newwindow=1&hl=zh-Hans&num=20&q=',
	'proxy'=>true,
	'proxyHost'=>'127.0.0.1',
	'proxyPort'=>8080,
	'sslCert'=>getcwd() . "/cert/google.com.crt",
	'beautyFunc'=>'googleBeauty'];
	
function googleBeauty($html){
	return str_replace('<div id="center_col">', '<div id="center_col" style="margin:0;">', $html);
}

