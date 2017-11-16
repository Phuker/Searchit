<?php
// iframe src
$googleurl='./proxy/proxy.php?engine=google&q='; // 
$baiduurl='./proxy/proxy.php?engine=baidu&q=';

// 上层代理
$baiduConf = ['url'=>'https://www.baidu.com/s?ie=utf-8&rn=20&wd=',
			'proxy'=>false,
			'beautyFunc'=>'baiduBeauty',
			'userAgent'=>'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36'];
			
function baiduBeauty($html){
	$html = '<base href="https://www.baidu.com/" target="_blank" />'.$html;
	$html = str_replace('<form id="form" name="f" action="/s" class="fm">', '<form id="form" name="f" action="" class="fm"><input type="hidden" name="engine" value="baidu">', $html);
	$html = str_replace('<input id="kw" name="wd" class="s_ipt" value="', '<input id="kw" name="q" class="s_ipt" value="', $html);
	return str_replace('<div id="content_left">',  '<div id="content_left" style="padding-left:12px;">', $html);
}

$googleConf = ['url'=>'https://www.google.com/search?site=webhp&source=hp&newwindow=1&hl=zh-Hans&num=20&q=',
			'proxy'=>true,
			'proxyHost'=>'127.0.0.1',
			'proxyPort'=>8080,
			'proxyType'=>'http',
			'beautyFunc'=>'googleBeauty',
			'userAgent'=>'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36'];

function googleBeauty($html){
	// Change the domain of this link below if your Google url is not ".com"
	$html = '<base href="https://www.google.com/" target="_blank" />'.$html;
	$html = preg_replace('/<form([^>]*)action="[^"]*"([^>]*)>/', '<form${1}action=""${2}><input type="hidden" name="engine" value="google">', $html);
	$html = str_replace('<div class="sbibtd">', '<div class="sbibtd" style="width:500px;">', $html);
	$html = preg_replace('/onmousedown="[^"]*"/','',$html); // links
	$html = preg_replace_callback('/<a href="\/url\\?q=([^"]*?)&amp;[^"]*?"/', 
		function ($matches){
			return '<a href="' . urldecode($matches[1]) . '"';
		}, $html);
	return str_replace('<div id="center_col">', '<div id="center_col" style="margin:0;">', $html);
}