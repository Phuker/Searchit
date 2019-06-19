<?php
$engine_conf = [
	'url' => 'https://www.baidu.com/s?ie=utf-8&rn=20&wd=%s',
	'proxy' => false,
	'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.90 Safari/537.36',
];
			
function engine_output_filter($html){
	$html = '<base href="https://www.baidu.com/" target="_blank" />' . $html;
	$html = str_replace('<input id="kw" name="wd" class="s_ipt" value="', '<input id="kw" disabled="disabled" style="cursor: not-allowed;" name="wd" class="s_ipt" value="', $html);
	$html = str_replace('<input type="submit"', '<input type="submit" disabled="disabled" style="cursor: not-allowed;"', $html);
	$html = preg_replace('/<meta.*?name="referrer".*?>/','<meta content="no-referrer" name="referrer">', $html);
	$html = str_replace('<div id="content_left">',  '<div id="content_left" style="padding-left:12px;">', $html);
	return $html;
}
