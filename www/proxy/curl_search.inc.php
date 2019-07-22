<?php
if($debug){
    header('X-Debug: using curl', false);
}
// set cURL transfer, see
// https://www.php.net/manual/en/function.curl-setopt.php
function http_get($url, $proxy=null, $ssl_verify=true, $user_agent=null, $debug=false){
    $ch = curl_init($url);
    if($ch === FALSE){
        return FALSE;
    }
    if($user_agent !== null){
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
    }
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // return string. 获取的信息以字符串返回，而不是直接输出
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); // follow redirect
    curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);

    if($proxy !== false){
        $proxy_type = $proxy['type'];
        $proxy_type = strtolower($proxy_type);
        $proxy_type_code_dict = [
            'http' => CURLPROXY_HTTP,
            'socks4' => CURLPROXY_SOCKS4,
            'socks5' => CURLPROXY_SOCKS5,
            'socks4a' => CURLPROXY_SOCKS4A,
            'socks5h' => CURLPROXY_SOCKS5_HOSTNAME,
        ];
        if(array_key_exists($proxy_type, $proxy_type_code_dict)){
            $proxy_type_option = $proxy_type_code_dict[$proxy_type];
        } else {
            if($debug){
                echo 'bad cURL option: proxy type ' . htmlspecialchars($proxy_type) . ' not supported' . "<br />\n";
            }
            return false;
        }
        
        curl_setopt($ch, CURLOPT_PROXYTYPE, $proxy_type_option);
        curl_setopt($ch, CURLOPT_PROXY, $proxy['host']);
        curl_setopt($ch, CURLOPT_PROXYPORT, $proxy['port']);
        curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    }
    
    if($ssl_verify !== false){
        $ssl_cert_file = dirname(__FILE__) . "/cert/cacert.pem";
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_CAINFO, $ssl_cert_file);
    } else {
        // vulnerable to MITM attacks
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    }
    
    $html = curl_exec($ch);
    if($html === false && $debug){
        echo htmlspecialchars($url) . '<br />';
        echo 'Curl error: ' . htmlspecialchars(curl_error($ch)) . '<br />';
        echo 'Proxy: ' . htmlspecialchars(var_export($proxy, true)) . '<br />';
        if(isset($ssl_cert_file)){
            echo 'SSL certificate: ' . htmlspecialchars($ssl_cert_file) . '<br />';
        }
    }
    curl_close($ch);
    return $html; // may be FALSE
}

function search($keyword, $engine_conf){
    global $debug;

    $url = sprintf($engine_conf['url'], urlencode($keyword));
    $proxy = $engine_conf['proxy'];
    $user_agent = $engine_conf['user_agent'];
    $ssl_verify = true;

    $html = http_get($url, $proxy, $ssl_verify, $user_agent, $debug);

    if($html !== false){
        $html = engine_output_filter($html);
    }
    return $html;
}
