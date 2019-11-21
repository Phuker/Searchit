<?php
// HTML Entity encode
function html_encode($str) {
	$str = trim(htmlspecialchars($str, ENT_QUOTES));
	$str = str_replace('\\', '&#92;', $str);
	$str = str_replace('/', '&#47;', $str);
	return $str;
}

function is_nonempty_str($s){
    return is_string($s) && (strlen($s) > 0);
}

function check_engine_name($s){
    if(!is_string($s)){
        return false;
    }
    $pattern = '/^[a-zA-Z0-9_]+$/';
    return preg_match($pattern, $s) === 1;
}

function check_engine_conf($engine_conf){
    if(!is_array($engine_conf)){
        return false;
    }
    if(
        !array_key_exists('url', $engine_conf) ||
        !array_key_exists('proxy', $engine_conf) || 
        !array_key_exists('user_agent', $engine_conf)
    ){
        return false;
    }
    
    if(
        is_nonempty_str($engine_conf['url']) &&
        (
            (
                is_array($engine_conf['proxy']) &&
                array_key_exists('host', $engine_conf['proxy']) &&
                array_key_exists('port', $engine_conf['proxy']) &&
                array_key_exists('type', $engine_conf['proxy']) &&
                is_nonempty_str($engine_conf['proxy']['host']) &&
                is_int($engine_conf['proxy']['port']) &&
                is_nonempty_str($engine_conf['proxy']['type'])
            ) || 
            $engine_conf['proxy'] === false
        ) &&
        is_nonempty_str($engine_conf['user_agent'])
    ) {
        return true;
    } else {
        return false;
    }
}


function log_get_ip(){
    global $log_ip_trust_headers;
    foreach ($log_ip_trust_headers as $_key) {
        if(isset($_SERVER[$_key])){
            return $_SERVER[$_key];
        }
    }
    return $_SERVER['REMOTE_ADDR'];
}

function send_headers($headers){
    foreach ($headers as $header) {
        header($header);
    }
}

// function debug_info_header($s) {
//     if(defined('SEARCHIT_DEBUG') && SEARCHIT_DEBUG) {
//         header('X-Searchit-Debug: ' . urlencode($s), false);
//     }
// }

function debug_info_output($s) {
    if(defined('SEARCHIT_DEBUG') && SEARCHIT_DEBUG) {
        echo '<code>[DEBUG] ' . htmlspecialchars($s) . "</code><br />\n";
    }
}


