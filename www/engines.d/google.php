<?php
$engine_conf = [
    'url' => 'https://www.google.com/search?site=webhp&source=hp&newwindow=1&hl=zh-Hans&num=20&q=%s',
    'proxy' => false,
    // 'proxy'=> [ 'host' => '127.0.0.1', 'port' => 1080, 'type' => 'socks5h'],
    'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.90 Safari/537.36',
];

function engine_output_filter($html){
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
