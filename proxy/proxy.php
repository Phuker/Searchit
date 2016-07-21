<?php
require('proxy_conf.php');

// e.g.
// $httpProxy = ['host':'127.0.0.1','port':8580];
// $sslCert = getcwd() . "/cert/google.com.crt";
function httpGetProxy($url,$httpProxy=null,$sslCert=null){
    $ch = curl_init($url);
    if($ch === FALSE){
        return FALSE;
    }
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); //获取的信息以字符串返回，而不是直接输出
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); // follow redirect
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);

    if($httpProxy !== null){
        curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
        curl_setopt($ch, CURLOPT_PROXY, $httpProxy['proxyHost']);
        curl_setopt($ch, CURLOPT_PROXYPORT, $httpProxy['proxyPort']);
        curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    }
    
    if($sslCert !== null){
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_CAINFO, $sslCert);
    }
    
    $html = curl_exec($ch);
    if($html === false){
        echo htmlspecialchars($url) . '<br />';
        echo 'Curl error: ' . curl_error($ch) . '<br />';
        if($httpProxy !== null){
            echo 'Proxy: ';
            var_export($httpProxy);
            echo '<br />';
        }
        if($sslCert !== null){
            echo 'SSL certificate: ' . htmlspecialchars($sslCert) . '<br />';
        }
        echo '<button onclick="window.location.reload()">retry</button>';
    }
    curl_close($ch);
    return $html; // may be FALSE
}

function search($keyword,$engineConf){
    if($engineConf['proxy'] === true){
        $httpProxy = ['proxyHost'=>$engineConf['proxyHost'],'proxyPort'=>$engineConf['proxyPort']];
    } else {
        $httpProxy = null;
    }
    $html = httpGetProxy($engineConf['url'] . urlencode($keyword),
            $httpProxy,
            $engineConf['sslCert']);
    if($html !== false){
        $html =  $engineConf['beautyFunc']($html);// post-process function
    }
    return $html;
}

// substitute function. use file_get_contents instead of curl.
// no proxy.
// if curl not works, comment these functions above: httpGetProxy search, uncomment this function
// and then modify use searchNoProxy(@$_GET['q'], $baiduConf) instead of search(@$_GET['q'], $baiduConf) below
/*
function searchNoProxy($keyword,$engineConf){
    $html = file_get_contents($engineConf['url'] . urlencode($keyword));
    if($html !== false){
        $html =  $engineConf['beautyFunc']($html);// post-process function
    }
    return $html;
}
*/

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

