<?PHP
require_once('config.php');

$keyword = $_GET[$search_url_param_key];
$keyword_html = html_encode($keyword);
$keyword_link = urlencode($keyword);

if($log_enabled){
	$log_line = sprintf("[%s] %s %s\n", date($log_time_format), log_get_ip(), var_export($keyword, true));
	file_put_contents($log_file_path, $log_line, FILE_APPEND);
}

?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $keyword_html; ?> - <?php echo html_encode($site_name); ?></title>
<style type="text/css">
html{
	height:100%;
	margin: 0px;
	padding: 0px;
}
body{
	height: 100%;
	margin:0px;
	padding: 0px;

	background-color: #ddd;

	display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: flex-start;
	align-items: stretch;
}
.head{
	padding:0px;
	margin: 0px;

	flex-grow: 1;
	flex-shrink: 1;
}
form {
	height: 100%;
	width: 100%;
	border: none;
	padding: 4px 0;
	margin: 0;
	box-sizing: border-box;
	vertical-align: middle;

	display: flex;
	flex-direction: row;
	flex-wrap: nowrap;
	justify-content: center;
	align-items: stretch;
}

input.search {
	height: auto;
	width: 70%;

	flex-grow: 0;
	flex-shrink: 1;
}
button.search {
	height: auto;
	margin-left: 4px;

	flex-grow: 0;
	flex-shrink: 1;
}

.container {
	display: flex;
	flex-direction: row;
	flex-wrap: nowrap;
	justify-content: center;
	align-items: stretch;

	width: 100%;

	flex-grow: 60;
	flex-shrink: 1;
}

.footer {
	margin: 0px;
	padding: 0px;
	width: 100%;

	flex-grow: 2;
	flex-shrink: 1;
}

iframe {
	height: auto;
	margin: 0px;
	padding: 0px;
	border: solid;
	border-color: #ddd;
	border-style: solid;
	border-width: 2px;
	box-sizing: border-box;

	flex-shrink: 1;
	flex-basis: auto;

	background: url(./images/loading.gif) center center no-repeat; 
}

.footer{
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: center;
	align-items: stretch;
}
#switchBtn{
	margin: 0px;
	padding: 0px;
	width: 100%;
	height: auto;
	flex-grow: 1;
}

@media (max-width: 767px){	
	.footer{
		display: flex;
	}
}
@media (min-width: 768px){
	.footer{
		display: none;
	}
}
</style>
</head>

<body>
<div class="head">
    <form action="" method="GET">
	    <input type="text" class="search" name="<?php echo html_encode($search_url_param_key); ?>" value="<?php echo $keyword_html; ?>" placeholder="<?php echo html_encode($search_placeholder); ?>" />
	    <button type="submit" class="search">Search</button>
    </form>
</div>

<div class="container">
<?php
foreach ($iframes as $index => $iframe_conf) {
	$url = $iframe_conf['url'];
	$width = $iframe_conf['width'];

	$url = sprintf($url, $keyword_link);
	$output = sprintf('<iframe src="%s" style="flex-grow: %d;" id="iframe_%d"></iframe>', $url, $width, $index);
	echo $output  . "\n";
}
?>
</div>
<div class="footer">
	<button id="switchBtn">Switch</button>	
</div>


<script type="text/javascript">
	var default_iframe_index = <?php echo json_encode($default_iframe_index); ?>;
	var current_iframe_index = default_iframe_index;
	var iframe_count = <?php echo json_encode(count($iframes)); ?>;
	var last_width = window.innerWidth;	
	var width_threshold = 768;
</script>
<script type="text/javascript" src="js/switch.js"></script>
</body>
</html>
