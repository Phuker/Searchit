<?php
// substitute functions. use file_get_contents instead of curl.
// only if curl not works, this would be required.

// e.g.
// $httpProxy = ['proxyHost'=>'127.0.0.1','proxyPort'=>8580];
function httpGetProxy($url,$httpProxy=null,$userAgent=null){
	$opt = ['http' => []];
	if($userAgent !== null){
		$opt['http']['user_agent'] = $userAgent;
	}
	if($httpProxy !== null){
		$opt['http']['proxy'] = 'tcp://' . $httpProxy['proxyHost'] . ':' . $httpProxy['proxyPort'];
		$opt['http']['request_fulluri'] = true;	
	} 
	$ctx = stream_context_create($opt);
	$result = file_get_contents($url, False, $ctx); 
	return $result; 
}

function search($keyword,$engineConf){
	if($engineConf['proxy'] === true){
        $httpProxy = ['proxyHost'=>$engineConf['proxyHost'],'proxyPort'=>$engineConf['proxyPort']];
    } else {
        $httpProxy = null;
    }

    $html = httpGetProxy($engineConf['url'] . urlencode($keyword),
            $httpProxy,
            $engineConf['userAgent']);
    if($html !== false){
        $html =  $engineConf['beautyFunc']($html);// post-process function
    }
    return $html;
}
