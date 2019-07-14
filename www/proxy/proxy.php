<?php
require('../config.php');

send_headers($headers_3rd_party);

if(extension_loaded('curl')){
    require('curl_search.inc.php');
} else{
    require('file_get_contents_search.inc.php');
}

function exit_help($msg){
    $msg = html_encode($msg);
    echo <<<EOF
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Error</title>
</head>
<body style="background: #fff;">
<h1>Error</h1>
<p>$msg</p>
<script src="js/reload.js"></script>
</body>
</html>
EOF;
    exit();
}

if(isset($_GET['engine']) && isset($_GET['q'])){
    $user_engine = strval($_GET['engine']);
    $user_query = strval($_GET['q']);
} else {
    exit_help('error url params');
}

if(!check_engine_name($user_engine)){
    exit_help('bad engine name: ' . $user_engine);
}

if(in_array($user_engine, $proxy_enabled_engines) !== true){
    exit_help('engine not exist: ' . $user_engine);
}

if(!is_nonempty_str($user_query)){
    exit_help('Empty query. (Using engine: ' . $user_engine . ')');
}

require_once '../engines.d/' . $user_engine . '.php';

if(isset($engine_conf) && check_engine_conf($engine_conf) && function_exists('engine_output_filter')){
    $output = search($user_query, $engine_conf);
    if($output === false){
        exit_help('Server request failed.');
    } else {
        echo $output;
        exit();
    }
} else {
    exit_help('bad engine config');
}



