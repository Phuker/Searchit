<?php
// fallback functions. use file_get_contents() instead of curl.

if($debug){
    header('X-Debug: Missing curl', false);
}

function http_get($url, $user_agent=null){
    // HTTP context options, see:
    // https://www.php.net/manual/en/context.http.php
	$opt = ['http' => []];
	if($user_agent !== null){
		$opt['http']['user_agent'] = $user_agent;
	}
	
	$ctx = stream_context_create($opt);
	$result = file_get_contents($url, False, $ctx); 
	return $result; 
}

function search($keyword, $engine_conf){
    $url = sprintf($engine_conf['url'], urlencode($keyword));
    $user_agent = $engine_conf['user_agent'];
    $html = http_get($url, $user_agent);
    
    if($html !== false){
        $html =  engine_output_filter($html);
    }
    return $html;
}
