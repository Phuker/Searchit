<?php
debug_info_output('Using cURL');

// set cURL transfer, see
// https://www.php.net/manual/en/function.curl-setopt.php
function http_get($url, $proxy=null, $ssl_verify=true, $user_agent=null, $headers=[]){
    debug_info_output('http_get() $url = ' . var_export($url, true));
    debug_info_output('http_get() $proxy = ' . var_export($proxy, true));
    debug_info_output('http_get() $ssl_verify = ' . var_export($ssl_verify, true));
    debug_info_output('http_get() $user_agent = ' . var_export($user_agent, true));
    debug_info_output('http_get() $headers = ' . var_export($headers, true));

    $ch = curl_init($url);
    if($ch === FALSE){
        return FALSE;
    }
    if(is_string($user_agent)) {
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
    }
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADEROPT, CURLHEADER_SEPARATE);
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
            debug_info_output("bad cURL option: proxy type $proxy_type not supported");
            return false;
        }
        
        curl_setopt($ch, CURLOPT_PROXYTYPE, $proxy_type_option);
        curl_setopt($ch, CURLOPT_PROXY, $proxy['host']);
        curl_setopt($ch, CURLOPT_PROXYPORT, $proxy['port']);
        curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    }
    
    if($ssl_verify !== false){
        $ssl_cert_file = dirname(__FILE__) . "/cert/cacert.pem";
        debug_info_output("SSL certificate: " . var_export($ssl_cert_file, true));

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_CAINFO, $ssl_cert_file);
    } else {
        // vulnerable to MITM attacks
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    }
    
    $html = curl_exec($ch);
    
    if($html === false){
        debug_info_output('curl_exec() returned false');
        debug_info_output('cURL error: ' . var_export(curl_error($ch), true));
    } else {
        debug_info_output('curl_exec() executed, no failure');
    }

    curl_close($ch);
    return $html; // may be FALSE
}

function search($keyword, $engine_conf){
    $url = sprintf($engine_conf['url'], urlencode($keyword));
    $proxy = $engine_conf['proxy'];
    $user_agent = $engine_conf['user_agent'];
    if(isset($engine_conf['headers']) && is_array($engine_conf['headers'])) {
        $headers = $engine_conf['headers'];
    } else {
        $headers = [];
    }

    if(defined('SEARCHIT_SSL_VERIFY')) {
        $ssl_verify = SEARCHIT_SSL_VERIFY;
    } else {
        $ssl_verify = true;
    }

    $html = http_get($url, $proxy, $ssl_verify, $user_agent, $headers);

    if($html !== false){
        $html = engine_output_filter($html);
    }
    return $html;
}
