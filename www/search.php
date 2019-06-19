<?PHP
require_once('config.php');

$keyword = $_GET[$search_url_param_key];
$keyword_html = html_encode($keyword);
$keyword_link = urlencode($keyword);

if($log_enabled){
	$log_line = date("Y-m-d h:i:s") . ' ' . log_get_ip() . ' ' . var_export($keyword, true) . "\n";
	file_put_contents($log_file_path, $log_line, FILE_APPEND);
}

?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
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

	background-color: #F1F1F1;
}
.head{
	height: 4%;
	padding:2px;
	margin: 0px;
}

input.search {
	width: 75%;
	height: 1.5em;
}

.container {
	display: flex;
	flex-direction: row;
	flex-wrap: nowrap;
	justify-content: center;
	align-items: flex-start;

	width: 100%;
}



iframe {
	height: 100%;
	margin: 0px;
	padding: 0px;
	border: 0px;

	flex-shrink: 1;
	flex-basis: auto;
}

#switchBtn{
	margin: 0px;
	padding: 0px;
	width: 100%;
	height: 100%;
}

@media (max-width: 767px){	
	.container {
		height: 90%;
	}
	.footer{
		display: block;
		width: 100%;
		height: 5%;
		margin: 0px;
		padding: 0px;
	}
}

@media (min-width: 768px){
	.container {
		height: 95%;
	}
	.footer{
		display: none;
	}
}
</style>
</head>

<body>
<div class="head">
    <center>
    <form action="" method="GET">
	    <input type="text" class="search" name="<?php echo html_encode($search_url_param_key); ?>" value="<?php echo $keyword_html; ?>" placeholder="<?php echo html_encode($search_placeholder); ?>" />
	    <input type="submit" value="Search It!"/>
    </form>
    </center>
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
</script>
<script type="text/javascript" src="js/switch.js"></script>
</body>
</html>
