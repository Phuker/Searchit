<?php
require('proxy_conf.php');

if(extension_loaded('curl')){
    require('curl_search.inc.php');
} else{
    require('file_get_contents_search.inc.php');
}

switch (strtolower(@$_GET['engine'])) {
    case 'baidu':
        echo search(@$_GET['q'], $baiduConf);
        break;
    case 'google':
        echo search(@$_GET['q'], $googleConf);
        break;
    default:
        echo '<h1>Help</h1><p>In query string, use engine for search engine(e.g. baidu, google),use q for keyword</p>';
        echo '<p>e.g. search test with baidu: <a href="?engine=baidu&q=test">link</a></p>';
        break;
}

