<?php
// e.g.
// $httpProxy = ['proxyHost'=>'127.0.0.1','proxyPort'=>8580];
// $sslCert = getcwd() . "/cert/google.com.crt";
function httpGetProxy($url,$httpProxy=null,$sslCert=null,$userAgent=null){
    $ch = curl_init($url);
    if($ch === FALSE){
        return FALSE;
    }
    if($userAgent !== null){
        curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); //获取的信息以字符串返回，而不是直接输出
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); // follow redirect
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);

    if($httpProxy !== null){
        $type = @$httpProxy['proxyType'];
        if(is_string($type)){
            $type = strtolower($type);
            switch ($type) {
                case 'curlproxy_http':
                case 'http':
                    $type = CURLPROXY_HTTP;
                    break;
                case 'curlproxy_socks4':
                case 'socks4':
                    $type = CURLPROXY_SOCKS4;
                    break;
                case 'curlproxy_socks5':
                case 'socks5':
                    $type = CURLPROXY_SOCKS5;
                    break;
                case 'curlproxy_socks4a':
                case 'socks4a':
                    $type = CURLPROXY_SOCKS4A;
                    break;
                case 'curlproxy_socks5_hostname':
                case 'socks5h':
                    $type = CURLPROXY_SOCKS5_HOSTNAME;
                    break;
                default:
                    $type = CURLPROXY_HTTP;
                    break;
            }
        } elseif(!is_int($type)){
            $type = CURLPROXY_HTTP;
        } 
        curl_setopt($ch, CURLOPT_PROXYTYPE, $type);
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
        $httpProxy = ['proxyHost'=>$engineConf['proxyHost'],
                    'proxyPort'=>$engineConf['proxyPort'],
                    'proxyType'=>$engineConf['proxyType']];
    } else {
        $httpProxy = null;
    }
    $html = httpGetProxy($engineConf['url'] . urlencode($keyword),
            $httpProxy,
            $engineConf['sslCert'],
            $engineConf['userAgent']);
    if($html !== false){
        $html =  $engineConf['beautyFunc']($html);// post-process function
    }
    return $html;
}