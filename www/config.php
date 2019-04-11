<?php
header('Referrer-Policy: no-referrer');
header("Content-Security-Policy: referrer no-referrer; script-src 'self'; object-src 'none'; frame-src 'self';");
header('X-Frame-Options: SAMEORIGIN');


// iframe src
$googleurl='./proxy/proxy.php?engine=google&q='; // 
$baiduurl='./proxy/proxy.php?engine=baidu&q=';

// 上层代理
$baiduConf = [
	'url'=>'https://www.baidu.com/s?ie=utf-8&rn=20&wd=',
	'proxy'=>false,
	'beautyFunc'=>'baiduBeauty',
	'userAgent'=>'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36',
];
			
function baiduBeauty($html){
	$html = '<base href="https://www.baidu.com/" target="_blank" />' . $html;
	$html = str_replace('<input id="kw" name="wd" class="s_ipt" value="', '<input id="kw" disabled="disabled" style="cursor: not-allowed;" name="wd" class="s_ipt" value="', $html);
	$html = str_replace('<input type="submit"', '<input type="submit" disabled="disabled" style="cursor: not-allowed;"', $html);
	$html = preg_replace('/<meta.*?name="referrer".*?>/','<meta content="no-referrer" name="referrer">', $html);
	$html = str_replace('<div id="content_left">',  '<div id="content_left" style="padding-left:12px;">', $html);
	return $html;
}

$googleConf = [
	'url'=>'https://www.google.com/search?site=webhp&source=hp&newwindow=1&hl=zh-Hans&num=20&q=',
	'proxy'=>false,
	//'proxyHost'=>'127.0.0.1',
	//'proxyPort'=>8080,
	//'proxyType'=>'http',
	'beautyFunc'=>'googleBeauty',
	'userAgent'=>'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36'
];

function googleBeauty($html){
	// Change the domain of this link below if your Google url is not ".com"
	$html = '<base href="https://www.google.com/" target="_blank" />'.$html;
	$html = preg_replace_callback('/<a href="\/url\\?q=([^"]*?)&amp;[^"]*?"/', 
		function ($matches){
			return '<a href="' . urldecode($matches[1]) . '"';
		}, $html);
	$html = preg_replace('/<a ([^>]*)ping="/', '<a ${1}gnip-nab="', $html);
	$html = preg_replace('/<meta.*?name="referrer".*?>/','<meta content="no-referrer" name="referrer">',$html);
	$html = str_replace('<div class="RNNXgb" jsname="RNNXgb"', '<div class="RNNXgb" jsname="RNNXgb" style="width:500px;"', $html);
	$html = preg_replace('/<button ([^>]*)type="submit"/', '<button ${1}type="submit" disabled="disabled" style="cursor: not-allowed;"', $html);
	$html = preg_replace('/<input ([^>]*)type="text"/', '<input ${1}type="text" disabled="disabled" style="cursor: not-allowed;"', $html);
	$html = str_replace('<div id="center_col">', '<div id="center_col" style="margin:0;">', $html);
	return $html;
}