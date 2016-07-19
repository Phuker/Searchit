<?PHP
function filter($str) {
	// HTML Entity
	$str = trim ( htmlspecialchars ( $str, ENT_QUOTES ) );
	$str = str_replace ( '\\', '&#92;', $str );
	$str = str_replace ( '/', '&#47;', $str );
	return $str;
}
$siteName = 'SearchIt!';
$getArg='q';    //GET method argument

//$googleurl = 'http://guge.pro/?q='; // OK,宽，广告
//$googleurl = 'http://www.guge.link/#q='; // OK，宽
//$googleurl = 'http://gg.yon.hk/custom?newwindow=1&q='; // OK,窄
//$googleurl = 'http://googo.pw/search?newwindow=1&q=test'; // 同源
//$googleurl = 'http://go.hibenben.com/webhp?hl=zh-CN#hl=zh-CN&q='; // 同源
//$googleurl ='http://g.yon.hk/search?newwindow=1&q='; // 同源
//$googleurl = 'http://www.gufensoso.com/search/?q='; //自动变成全网页
//$googleurl='http://www.google.com/custom?btnG=Search&newwindow=1&q='; //原始

$googleurl='./proxy/proxy.php?engine=google&q='; // local proxy
$baiduurl='./proxy/proxy.php?engine=baidu&q=';
$keyword = filter($_GET[$getArg]);
$keyword_link = urlencode($_GET[$getArg]);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
		    	min-height: 3%;
		    	padding:2px;
		    	margin: 0px;
		    }
		    iframe{
		    	height:96%;
		    	margin: 0px;
		    	border:0px;
		    }
		</style>
    </head>

    <body>
    <div class="head">
	    <center>
	    <form action="" method="GET" target=_parent>
		    <input type="text" id="<?php echo $getArg; ?>" name="<?php echo $getArg; ?>" size="38" maxlength="255" value="<?php echo $keyword; ?>"/>
		    <input type="submit" value="Search It!"/>
	    </form>
	    </center>
    </div>
    <div style="clear:both;"></div>
    <iframe src="<?php echo $baiduurl . $keyword_link; ?>" name="popmain" style="width:51%;float:left;" bordercolor="#3E77B3"></iframe>
    <iframe src="<?php echo $googleurl . $keyword_link; ?>" name="popforum" style="width:48%;float:right;" bordercolor="#3E77B3"></iframe>
    </body>
</html>