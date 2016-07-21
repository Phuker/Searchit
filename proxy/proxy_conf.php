<?php
// 上层代理
$baiduConf = ['url'=>'https://www.baidu.com/s?ie=utf-8&rn=20&wd=',
	'proxy'=>false,
	'proxyHost'=>'',
	'proxyPort'=>0,
	'sslCert'=>getcwd() . "/cert/baidu.com.crt",
	'beautyFunc'=>'baiduBeauty'];
function baiduBeauty($html){
	$html = str_replace('<form id="form" name="f" action="/s" class="fm">', '<form id="form" name="f" action="" class="fm"><input type="hidden" name="engine" value="baidu">', $html);
	$html = str_replace('<input id="kw" name="wd" class="s_ipt" value="', '<input id="kw" name="q" class="s_ipt" value="', $html);
	return str_replace('<div id="content_left">',  '<div id="content_left" style="padding-left:12px;">', $html);
}

$googleConf = ['url'=>'https://www.google.com/search?site=webhp&source=hp&newwindow=1&hl=zh-Hans&num=20&q=',
	'proxy'=>true,
	'proxyHost'=>'127.0.0.1',
	'proxyPort'=>8080,
	'sslCert'=>getcwd() . "/cert/google.com.crt",
	'beautyFunc'=>'googleBeauty'];

function googleBeauty($html){
	$html = str_replace('<form class="tsf" action="/search" style="overflow:visible" id="tsf" method="GET" name="f" onsubmit="return q.value!=\'\'" role="search">', '<form class="tsf" action="" style="overflow:visible" id="tsf" method="GET" name="f" onsubmit="return q.value!=\'\'" role="search"><input type="hidden" name="engine" value="google">', $html);
	$html = str_replace('<div class="sbibtd">', '<div class="sbibtd" style="width:500px;">', $html);
	return str_replace('<div id="center_col">', '<div id="center_col" style="margin:0;">', $html);
}

