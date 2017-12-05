<?PHP
require('config.php');
function filter($str) {
	// HTML Entity
	$str = trim ( htmlspecialchars ( $str, ENT_QUOTES ) );
	$str = str_replace ( '\\', '&#92;', $str );
	$str = str_replace ( '/', '&#47;', $str );
	return $str;
}
$siteName = 'SearchIt!';
$getArg='q';    //GET method argument

$keyword = filter($_GET[$getArg]);
$keyword_link = urlencode($_GET[$getArg]);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />
<title><?php echo $keyword; ?>_<?php echo $siteName; ?></title>
<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
<style type="text/css">
html{
	height:100%;
}
body{
	height:100%;
	margin:0px;
}
.head{
	background-color:#F1F1F1;
	height: 5%;
	padding:2px;
	margin: 0px;
}

@media (max-width: 700px){
	iframe{
		height:89%;
		margin: 0px;
		border:0px;
	}
	#iframeLeft{
		width:0%;
		float:left;
	}
	#iframeRight{
		width:100%;
		float:right;
	}

	#switchBtn{
		display: block;
		width: 100%;
		height: 2.2em;
		margin:0;
	}
}

@media (min-width: 700px){
	iframe{
		height:94%;
		margin: 0px;
		border:0px;
	}
	#iframeLeft{
		width:51% !important;
		float:left;
	}
	#iframeRight{
		width:48% !important;
		float:right;
	}
	#switchBtn{
		display: none;
	}
}
</style>
</head>

<body>
<div class="head">
    <center>
    <form action="" method="GET" target=_parent>
	    <input type="text" id="<?php echo $getArg; ?>" name="<?php echo $getArg; ?>" style="width:75%;height:1.6em;" value="<?php echo $keyword; ?>"/>
	    <input type="submit" value="Search It!"/>
    </form>
    </center>
</div>
<iframe src="<?php echo $baiduurl . $keyword_link; ?>" id="iframeLeft" bordercolor="#3E77B3"></iframe>
<iframe src="<?php echo $googleurl . $keyword_link; ?>" id="iframeRight" bordercolor="#3E77B3"></iframe>

<button id="switchBtn">Switch</button>
<script type="text/javascript" src="js/switch.js"></script>
</body>
</html>