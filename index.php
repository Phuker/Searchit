<?php
$searchPageName = 'search.php';
$getArgName = 'q';
$siteName = 'SearchIt!';
?><!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="origin" id="mref" name="referrer">
<title><?php echo $siteName; ?></title>
<style type="text/css"></style>
<style>
#logo {
	display: block;
	height: 37px;
	margin: 0;
	overflow: hidden;
	position: relative;
	width: 95px
}
#logo img {
	border: 0;
	left: 0;
	position: absolute;
	top: -41px
}
#logo span {
	cursor: pointer;
	overflow: hidden
}
#logocont {
	z-index: 1;
	padding-left: 16px;
	padding-right: 10px;
}
.big #logocont {
	padding-left: 16px;
	padding-right: 12px
}
.sbibod {
	background-color: #fff;
	border: 1px solid #d9d9d9;
	border-top-color: #c0c0c0;
	height: 28px;
	vertical-align: top;
}
.srp.vasq .sbibod {
	border-right: 0
}
.lst {
	border: 0;
	margin-top: 6px;
	margin-bottom: 0
}
.lst:focus {
	outline: none
}
.gsfi, .lst {
	font: 17px arial, sans-serif;
	line-height: 1.2em !important;
	height: 1.2em !important;
}
.gsfs {
	font: 17px arial, sans-serif
}
.lsb {
	background: transparent;
	border: 0;
	font-size: 0;
	height: 30px;
	outline: 0;
	width: 100%
}
.sbico {
	color: transparent;
	display: inline-block;
	height: 18px;
	margin: 0 auto 3px;
	width: 18px;
}
#sblsbb {
	height: 28px;
	margin: 0;
	padding: 0;
	width: 70px;
}
#sbds {
	border: 0;
	margin-left: 16px
}
.hp .nojsb, .srp .jsb {
	display: none
}
.kpbb, .kprb, .kpgb, .kpgrb {
	-webkit-border-radius: 2px;
	border-radius: 2px;
	color: #fff
}
.kpbb:hover, .kprb:hover, .kpgb:hover, .kpgrb:hover {
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	color: #fff
}
.kpbb:active, .kprb:active, .kpgb:active, .kpgrb:active {
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.3);
	box-shadow: inset 0 1px 2px rgba(0,0,0,0.3)
}
.kpbb {
	background-image: -webkit-gradient(linear, left top, left bottom, from(#4d90fe), to(#4787ed));
	background-color: #4d90fe;
	background-image: -webkit-linear-gradient(top, #4d90fe, #4787ed);
	background-image: linear-gradient(top, #4d90fe, #4787ed);
	border: 1px solid #3079ed
}
.kpbb:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, from(#4d90fe), to(#357ae8));
	background-color: #357ae8;
	background-image: -webkit-linear-gradient(top, #4d90fe, #357ae8);
	background-image: linear-gradient(top, #4d90fe, #357ae8);
	border: 1px solid #2f5bb7
}
a.kpbb:link, a.kpbb:visited {
	color: #fff
}
.kprb {
	background-image: -webkit-gradient(linear, left top, left bottom, from(#dd4b39), to(#d14836));
	background-color: #dd4b39;
	background-image: -webkit-linear-gradient(top, #dd4b39, #d14836);
	background-image: linear-gradient(top, #dd4b39, #d14836);
	border: 1px solid #dd4b39
}
.kprb:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, from(#dd4b39), to(#c53727));
	background-color: #c53727;
	background-image: -webkit-linear-gradient(top, #dd4b39, #c53727);
	background-image: linear-gradient(top, #dd4b39, #c53727);
	border: 1px solid #b0281a;
	border-bottom-color: #af301f
}
.kprb:active {
	background-image: -webkit-gradient(linear, left top, left bottom, from(#dd4b39), to(#b0281a));
	background-color: #b0281a;
	background-image: -webkit-linear-gradient(top, #dd4b39, #b0281a);
	background-image: linear-gradient(top, #dd4b39, #b0281a)
}
.kpgb {
	background-image: -webkit-gradient(linear, left top, left bottom, from(#3d9400), to(#398a00));
	background-color: #3d9400;
	background-image: -webkit-linear-gradient(top, #3d9400, #398a00);
	background-image: linear-gradient(top, #3d9400, #398a00);
	border: 1px solid #29691d
}
.kpgb:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, from(#3d9400), to(#368200));
	background-color: #368200;
	background-image: -webkit-linear-gradient(top, #3d9400, #368200);
	background-image: linear-gradient(top, #3d9400, #368200);
	border: 1px solid #2d6200
}
.kpgrb {
	background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#f1f1f1));
	background-color: #f5f5f5;
	background-image: -webkit-linear-gradient(top, #f5f5f5, #f1f1f1);
	background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
	border: 1px solid #dcdcdc;
	color: #555
}
.kpgrb:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f1f1f1));
	background-color: #f8f8f8;
	background-image: -webkit-linear-gradient(top, #f8f8f8, #f1f1f1);
	background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
	border: 1px solid #dcdcdc;
	color: #333
}
a.kpgrb:link, a.kpgrb:visited {
	color: #555
}
#sfopt {
	display: inline-block;
	line-height: normal
}
.lsd {
	font-size: 11px;
	position: absolute;
	top: 3px;
	left: 16px
}
.sbsb_g {
	margin: 3px 0 4px
}
.jhp input[type="submit"], .sbdd_a input, .gbqfba {
	background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#f1f1f1));
	background-image: -webkit-linear-gradient(top, #f5f5f5, #f1f1f1);
	-webkit-border-radius: 2px;
	-webkit-user-select: none;
	background-color: #f5f5f5;
	background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
	background-image: -o-linear-gradient(top, #f5f5f5, #f1f1f1);
	border: 1px solid #dcdcdc;
	border: 1px solid rgba(0,0,0,0.1);
	border-radius: 2px;
	color: #444;
	cursor: default;
	font-family: arial, sans-serif;
	font-size: 11px;
	font-weight: bold;
	margin: 11px 8px;
	min-width: 54px;
	padding: 0 8px;
	text-align: center
}
.jhp input[type="submit"], .gbqfba {
	height: 29px;
	line-height: 27px
}
.sbdd_a input {
	height: 100%
}
.jhp input[type="submit"]:hover, .sbdd_a input:hover, .gbqfba:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f1f1f1));
	background-image: -webkit-linear-gradient(top, #f8f8f8, #f1f1f1);
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	background-color: #f8f8f8;
	background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
	background-image: -o-linear-gradient(top, #f8f8f8, #f1f1f1);
	border: 1px solid #c6c6c6;
	box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	color: #222
}
.jhp input[type="submit"]:focus, .sbdd_a input:focus {
	border: 1px solid #4d90fe;
	outline: none
}
.sbdd_a input {
	margin: 6px;
}
span.lsbb, .lsb input {
	-webkit-transition: all 0.18s
}

@media only screen and (max-height:650px) {
span.lsbb {
	height: 17px
}
}
.tsf {
	background: none
}
.tsf-p {
	position: relative;
}
.logocont {
	left: 0;
	position: absolute;
}
.sfibbbc {
	padding-bottom: 2px;
	padding-top: 3px;
}
.sbtc {
	position: relative
}
.sbibtd {
	line-height: 0;
	overflow: visible;
	white-space: nowrap
}
.sbibps {
	padding: 0px 9px 0;
	width: 466px;
}
.big .sbibps {
	width: 550px
}
.sfopt {
	height: 28px;
	position: relative
}
#sform {
	height: 34px
}
.hp .sfsbc {
	display: none
}
#searchform {
	width: 100%
}
.hp #searchform {
	position: absolute;
	top: 310px
}
.srp #searchform {
	position: absolute;
	top: 50px
}
#sfdiv {
	display: inline-block;
	width: 484px
}
.hp .big #sfdiv {
	width: 568px
}
.srp #sfdiv {
	width: 570px
}
.srp #tsf {
	margin-top: -2px;
	margin-bottom: 2px
}
.sfsbc {
	display: inline-block;
	vertical-align: top;
}
.sfbg {
	background: #f1f1f1;
	height: 69px;
	left: 0;
	position: absolute;
	width: 100%
}
.sfbgg {
	background-color: #f1f1f1;
	background-image: -webkit-gradient(radial, 100 36, 0, 100 -40, 120, from(#fafafa), to(#f1f1f1));
	border-bottom: 1px solid #666;
	border-color: #e5e5e5;
	height: 69px
}
#pocs {
	background: #fff1a8;
	color: #000;
	font-size: 10pt;
	margin: 0;
	padding: 5px 7px
}
#pocs.sft {
	background: transparent;
	color: #777
}
#pocs a {
	color: #11c
}
#pocs.sft a {
	color: #36c
}
#pocs>div {
	margin: 0;
	padding: 0
}
#cnt {
	padding-top: 20px;
}
#subform_ctrl {
	min-height: 19px
}
#gb {
	font: 13px/27px Arial, sans-serif;
	height: 30px
}
#gbz, #gbg {
	position: absolute;
	white-space: nowrap;
	top: 0;
	height: 30px;
	z-index: 1000
}
#gbz {
	left: 0;
	padding-left: 4px
}
#gbg {
	right: 0;
	padding-right: 5px
}
#gbs {
	background: transparent;
	position: absolute;
	top: -999px;
	visibility: hidden;
	z-index: 998;
	right: 0
}
.gbto #gbs {
	background: #fff
}
#gbx3, #gbx4 {
	background-color: #2d2d2d;
	background-image: none;
	_background-image: none;
	background-position: 0 -138px;
	background-repeat: repeat-x;
	border-bottom: 1px solid #000;
	font-size: 24px;
	height: 29px;
	_height: 30px;
	opacity: 1;
	filter: alpha(opacity=100);
	position: absolute;
	top: 0;
	width: 100%;
	z-index: 990
}
#gbx3 {
	left: 0
}
#gbx4 {
	right: 0
}
#gbb {
	position: relative
}
#gbbw {
	left: 0;
	position: absolute;
	top: 30px;
	width: 100%
}
.gbtcb {
	position: absolute;
	visibility: hidden
}
#gbz .gbtcb {
	right: 0
}
#gbg .gbtcb {
	left: 0
}
.gbxx {
	display: none !important
}
.gbxo {
	opacity: 0 !important;
	filter: alpha(opacity=0) !important
}
.gbm {
	position: absolute;
	z-index: 999;
	top: -999px;
	visibility: hidden;
	text-align: left;
	border: 1px solid #bebebe;
	background: #fff;
	-moz-box-shadow: -1px 1px 1px rgba(0,0,0,.2);
	-webkit-box-shadow: 0 2px 4px rgba(0,0,0,.2);
	box-shadow: 0 2px 4px rgba(0,0,0,.2)
}
.gbrtl .gbm {
	-moz-box-shadow: 1px 1px 1px rgba(0,0,0,.2)
}
.gbto .gbm, .gbto #gbs {
	top: 29px;
	visibility: visible
}
#gbz .gbm {
	left: 0
}
#gbg .gbm {
	right: 0
}
.gbxms {
	background-color: #ccc;
	display: block;
	position: absolute;
	z-index: 1;
	top: -1px;
	left: -2px;
	right: -2px;
	bottom: -2px;
	opacity: .4;
	-moz-border-radius: 3px;
filter:progid:DXImageTransform.Microsoft.Blur(pixelradius=5);
*opacity:1;
*top:-2px;
*left:-5px;
*right:5px;
*bottom:4px;
	-ms-filter: "progid:DXImageTransform.Microsoft.Blur(pixelradius=5)";
	opacity: 1\0/;
	top: -4px\0/;
	left: -6px\0/;
	right: 5px\0/;
	bottom: 4px\0/
}
.gbma {
	position: relative;
	top: -1px;
	border-style: solid dashed dashed;
	border-color: transparent;
	border-top-color: #c0c0c0;
	display: -moz-inline-box;
	display: inline-block;
	font-size: 0;
	height: 0;
	line-height: 0;
	width: 0;
	border-width: 3px 3px 0;
	padding-top: 1px;
	left: 4px
}
#gbztms1, #gbi4m1, #gbi4s, #gbi4t {
	zoom: 1
}
.gbtc, .gbmc, .gbmcc {
	display: block;
	list-style: none;
	margin: 0;
	padding: 0
}
.gbmc {
	background: #fff;
	padding: 10px 0;
	position: relative;
	z-index: 2;
	zoom: 1
}
.gbt {
	position: relative;
	display: -moz-inline-box;
	display: inline-block;
	line-height: 27px;
	padding: 0;
	vertical-align: top
}
.gbt {
*display:inline
}
.gbto {
	box-shadow: 0 2px 4px rgba(0,0,0,.2);
	-moz-box-shadow: 0 2px 4px rgba(0,0,0,.2);
	-webkit-box-shadow: 0 2px 4px rgba(0,0,0,.2)
}
.gbzt, .gbgt {
	cursor: pointer;
	display: block;
	text-decoration: none !important
}
span#gbg6, span#gbg4 {
	cursor: default
}
.gbts {
	border-left: 1px solid transparent;
	border-right: 1px solid transparent;
	display: block;
*display:inline-block;
	padding: 0 5px;
	position: relative;
	z-index: 1000
}
.gbts {
*display:inline
}
.gbzt .gbts {
	display: inline;
	zoom: 1
}
.gbto .gbts {
	background: #fff;
	border-color: #bebebe;
	color: #36c;
	padding-bottom: 1px;
	padding-top: 2px
}
.gbz0l .gbts {
	color: #fff;
	font-weight: bold
}
.gbtsa {
	padding-right: 9px
}
#gbz .gbzt, #gbz .gbgt, #gbg .gbgt {
	color: #ccc!important
}
.gbtb2 {
	display: block;
	border-top: 2px solid transparent
}
.gbto .gbzt .gbtb2, .gbto .gbgt .gbtb2 {
	border-top-width: 0
}
.gbtb .gbts {
	background-position: -27px -22px;
	border: 0;
	font-size: 0;
	padding: 29px 0 0;
*padding:27px 0 0;
	width: 1px
}
.gbzt:hover, .gbzt:focus, .gbgt-hvr, .gbgt:focus {
	background-color: #4c4c4c;
	background-image: none;
	_background-image: none;
	background-position: 0 -102px;
	background-repeat: repeat-x;
	outline: none;
	text-decoration: none !important
}
.gbpdjs .gbto .gbm {
	min-width: 99%
}
.gbz0l .gbtb2 {
	border-top-color: #dd4b39!important
}
#gbi4s, #gbi4s1 {
	font-weight: bold
}
#gbg6.gbgt-hvr, #gbg6.gbgt:focus {
	background-color: transparent;
	background-image: none
}
.gbg4a {
	font-size: 0;
	line-height: 0
}
.gbg4a .gbts {
	padding: 27px 5px 0;
*padding:25px 5px 0
}
.gbto .gbg4a .gbts {
	padding: 29px 5px 1px;
*padding:27px 5px 1px
}
#gbi4i, #gbi4id {
	left: 5px;
	border: 0;
	height: 24px;
	position: absolute;
	top: 1px;
	width: 24px
}
.gbto #gbi4i, .gbto #gbi4id {
	top: 3px
}
.gbi4p {
	display: block;
	width: 24px
}
#gbi4id {
	background-position: -44px -101px
}
#gbmpid {
	background-position: 0 0
}
#gbmpi, #gbmpid {
	border: none;
	display: inline-block;
	height: 48px;
	width: 48px
}
#gbmpiw {
	display: inline-block;
	line-height: 9px;
	padding-left: 20px;
	margin-top: 10px;
	position: relative
}
#gbmpi, #gbmpid, #gbmpiw {
*display:inline
}
#gbg5 {
	font-size: 0
}
#gbgs5 {
	padding: 5px !important
}
.gbto #gbgs5 {
	padding: 7px 5px 6px !important
}
#gbi5 {
	background-position: 0 0;
	display: block;
	font-size: 0;
	height: 17px;
	width: 16px
}
.gbto #gbi5 {
	background-position: -6px -22px
}
.gbn .gbmt, .gbn .gbmt:visited, .gbnd .gbmt, .gbnd .gbmt:visited {
	color: #dd8e27 !important
}
.gbf .gbmt, .gbf .gbmt:visited {
	color: #900 !important
}
.gbmt, .gbml1, .gbmlb, .gbmt:visited, .gbml1:visited, .gbmlb:visited {
	color: #36c !important;
	text-decoration: none !important
}
.gbmt, .gbmt:visited {
	display: block
}
.gbml1, .gbmlb, .gbml1:visited, .gbmlb:visited {
	display: inline-block;
	margin: 0 10px
}
.gbml1, .gbmlb, .gbml1:visited, .gbmlb:visited {
*display:inline
}
.gbml1, .gbml1:visited {
	padding: 0 10px
}
.gbml1-hvr, .gbml1:focus {
	outline: none;
	text-decoration: underline !important
}
#gbpm .gbml1 {
	display: inline;
	margin: 0;
	padding: 0;
	white-space: nowrap
}
.gbmlb, .gbmlb:visited {
	line-height: 27px
}
.gbmlb-hvr, .gbmlb:focus {
	outline: none;
	text-decoration: underline !important
}
.gbmlbw {
	color: #ccc;
	margin: 0 10px
}
.gbmt {
	padding: 0 20px
}
.gbmt:hover, .gbmt:focus {
	background: #eee;
	cursor: pointer;
	outline: 0 solid black;
	text-decoration: none !important
}
.gbm0l, .gbm0l:visited {
	color: #000 !important;
	font-weight: bold
}
.gbmh {
	border-top: 1px solid #bebebe;
	font-size: 0;
	margin: 10px 0
}
#gbd4 .gbmc {
	background: #f5f5f5;
	padding-top: 0
}
#gbd4 .gbsbic::-webkit-scrollbar-track:vertical {
background-color:#f5f5f5;
margin-top:2px
}
#gbmpdv {
	background: #fff;
	border-bottom: 1px solid #bebebe;
	-moz-box-shadow: 0 2px 4px rgba(0,0,0,.12);
	-o-box-shadow: 0 2px 4px rgba(0,0,0,.12);
	-webkit-box-shadow: 0 2px 4px rgba(0,0,0,.12);
	box-shadow: 0 2px 4px rgba(0,0,0,.12);
	position: relative;
	z-index: 1
}
#gbd4 .gbmh {
	margin: 0
}
.gbmtc {
	padding: 0;
	margin: 0;
	line-height: 27px
}
.GBMCC:last-child:after, #GBMPAL:last-child:after {
	content: '\0A\0A';
	white-space: pre;
	position: absolute
}
#gbmps {
*zoom:1
}
#gbd4 .gbpc, #gbmpas .gbmt {
	line-height: 17px
}
#gbd4 .gbpgs .gbmtc {
	line-height: 27px
}
#gbd4 .gbmtc {
	border-bottom: 1px solid #bebebe
}
#gbd4 .gbpc {
	display: inline-block;
	margin: 16px 0 10px;
	padding-right: 50px;
	vertical-align: top
}
#gbd4 .gbpc {
*display:inline
}
.gbpc .gbps, .gbpc .gbps2 {
	display: block;
	margin: 0 20px
}
#gbmplp.gbps {
	margin: 0 10px
}
.gbpc .gbps {
	color: #000;
	font-weight: bold
}
.gbpc .gbpd {
	margin-bottom: 5px
}
.gbpd .gbmt, .gbpd .gbps {
	color: #666 !important
}
.gbpd .gbmt {
	opacity: .4;
	filter: alpha(opacity=40)
}
.gbps2 {
	color: #666;
	display: block
}
.gbp0 {
	display: none
}
.gbp0 .gbps2 {
	font-weight: bold
}
#gbd4 .gbmcc {
	margin-top: 5px
}
.gbpmc {
	background: #fef9db
}
.gbpmc .gbpmtc {
	padding: 10px 20px
}
#gbpm {
	border: 0;
*border-collapse:collapse;
	border-spacing: 0;
	margin: 0;
	white-space: normal
}
#gbpm .gbpmtc {
	border-top: none;
	color: #000 !important;
	font: 11px Arial, sans-serif
}
#gbpms {
*white-space:nowrap
}
.gbpms2 {
	font-weight: bold;
	white-space: nowrap
}
#gbmpal {
*border-collapse:collapse;
	border-spacing: 0;
	border: 0;
	margin: 0;
	white-space: nowrap;
	width: 100%
}
.gbmpala, .gbmpalb {
	font: 13px Arial, sans-serif;
	line-height: 27px;
	padding: 10px 20px 0;
	white-space: nowrap
}
.gbmpala {
	padding-left: 0;
	text-align: left
}
.gbmpalb {
	padding-right: 0;
	text-align: right
}
#gbmpasb .gbps {
	color: #000
}
#gbmpal .gbqfbb {
	margin: 0 20px
}
.gbp0 .gbps {
*display:inline
}
a.gbiba {
	margin: 8px 20px 10px
}
.gbmpiaw {
	display: inline-block;
	padding-right: 10px;
	margin-bottom: 6px;
	margin-top: 10px
}
.gbxv {
	visibility: hidden
}
.gbmpiaa {
	display: block;
	margin-top: 10px
}
.gbmpia {
	border: none;
	display: block;
	height: 48px;
	width: 48px
}
.gbmpnw {
	display: inline-block;
	height: auto;
	margin: 10px 0;
	vertical-align: top
}
.gbqfb, .gbqfba, .gbqfbb {
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	cursor: default !important;
	display: inline-block;
	font-weight: bold;
	height: 29px;
	line-height: 29px;
	min-width: 54px;
*min-width:70px;
	padding: 0 8px;
	text-align: center;
	text-decoration: none !important;
	-moz-user-select: none;
	-webkit-user-select: none
}
.gbqfb:focus, .gbqfba:focus, .gbqfbb:focus {
	border: 1px solid #4d90fe;
	-moz-box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.5);
	-webkit-box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.5);
	box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.5);
	outline: none
}
.gbqfb-hvr:focus, .gbqfba-hvr:focus, .gbqfbb-hvr:focus {
	-webkit-box-shadow: inset 0 0 0 1px #fff, 0 1px 1px rgba(0,0,0,.1);
	-moz-box-shadow: inset 0 0 0 1px #fff, 0 1px 1px rgba(0,0,0,.1);
	box-shadow: inset 0 0 0 1px #fff, 0 1px 1px rgba(0,0,0,.1)
}
.gbqfb-no-focus:focus {
	border: 1px solid #3079ed;
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	box-shadow: none
}
.gbqfb-hvr, .gbqfba-hvr, .gbqfbb-hvr {
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.1);
	-moz-box-shadow: 0 1px 1px rgba(0,0,0,.1);
	box-shadow: 0 1px 1px rgba(0,0,0,.1)
}
.gbqfb::-moz-focus-inner, .gbqfba::-moz-focus-inner, .gbqfbb::-moz-focus-inner {
border:0
}
.gbqfba, .gbqfbb {
	border: 1px solid #dcdcdc;
	border-color: rgba(0,0,0,.1);
	color: #444 !important;
	font-size: 11px
}
.gbqfb {
	background-color: #4d90fe;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#4d90fe), to(#4787ed));
	background-image: -webkit-linear-gradient(top, #4d90fe, #4787ed);
	background-image: -moz-linear-gradient(top, #4d90fe, #4787ed);
	background-image: -ms-linear-gradient(top, #4d90fe, #4787ed);
	background-image: -o-linear-gradient(top, #4d90fe, #4787ed);
	background-image: linear-gradient(top, #4d90fe, #4787ed);
filter:progid:DXImageTransform.Microsoft.gradient(startColorStr='#4d90fe', EndColorStr='#4787ed');
	border: 1px solid #3079ed;
	color: #fff!important;
	margin: 0 0
}
.gbqfb-hvr {
	border-color: #2f5bb7
}
.gbqfb-hvr:focus {
	border-color: #2f5bb7
}
.gbqfb-hvr, .gbqfb-hvr:focus {
	background-color: #357ae8;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#4d90fe), to(#357ae8));
	background-image: -webkit-linear-gradient(top, #4d90fe, #357ae8);
	background-image: -moz-linear-gradient(top, #4d90fe, #357ae8);
	background-image: -ms-linear-gradient(top, #4d90fe, #357ae8);
	background-image: -o-linear-gradient(top, #4d90fe, #357ae8);
	background-image: linear-gradient(top, #4d90fe, #357ae8)
}
.gbqfb:active {
	background-color: inherit;
	-webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3)
}
.gbqfba {
	background-color: #f5f5f5;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#f1f1f1));
	background-image: -webkit-linear-gradient(top, #f5f5f5, #f1f1f1);
	background-image: -moz-linear-gradient(top, #f5f5f5, #f1f1f1);
	background-image: -ms-linear-gradient(top, #f5f5f5, #f1f1f1);
	background-image: -o-linear-gradient(top, #f5f5f5, #f1f1f1);
	background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
filter:progid:DXImageTransform.Microsoft.gradient(startColorStr='#f5f5f5', EndColorStr='#f1f1f1')
}
.gbqfba-hvr, .gbqfba-hvr:active {
	background-color: #f8f8f8;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f1f1f1));
	background-image: -webkit-linear-gradient(top, #f8f8f8, #f1f1f1);
	background-image: -moz-linear-gradient(top, #f8f8f8, #f1f1f1);
	background-image: -ms-linear-gradient(top, #f8f8f8, #f1f1f1);
	background-image: -o-linear-gradient(top, #f8f8f8, #f1f1f1);
	background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
filter:progid:DXImageTransform.Microsoft.gradient(startColorStr='#f8f8f8', EndColorStr='#f1f1f1')
}
.gbqfbb {
	background-color: #fff;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#fbfbfb));
	background-image: -webkit-linear-gradient(top, #fff, #fbfbfb);
	background-image: -moz-linear-gradient(top, #fff, #fbfbfb);
	background-image: -ms-linear-gradient(top, #fff, #fbfbfb);
	background-image: -o-linear-gradient(top, #fff, #fbfbfb);
	background-image: linear-gradient(top, #fff, #fbfbfb);
filter:progid:DXImageTransform.Microsoft.gradient(startColorStr='#ffffff', EndColorStr='#fbfbfb')
}
.gbqfbb-hvr, .gbqfbb-hvr:active {
	background-color: #fff;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#f8f8f8));
	background-image: -webkit-linear-gradient(top, #fff, #f8f8f8);
	background-image: -moz-linear-gradient(top, #fff, #f8f8f8);
	background-image: -ms-linear-gradient(top, #fff, #f8f8f8);
	background-image: -o-linear-gradient(top, #fff, #f8f8f8);
	background-image: linear-gradient(top, #fff, #f8f8f8);
filter:progid:DXImageTransform.Microsoft.gradient(startColorStr='#ffffff', EndColorStr='#f8f8f8')
}
.gbqfba-hvr, .gbqfba-hvr:active, .gbqfbb-hvr, .gbqfbb-hvr:active {
	border-color: #c6c6c6;
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.1);
	-moz-box-shadow: 0 1px 1px rgba(0,0,0,.1);
	box-shadow: 0 1px 1px rgba(0,0,0,.1);
	color: #222 !important
}
.gbqfba:active, .gbqfbb:active {
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
	-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
	box-shadow: inset 0 1px 2px rgba(0,0,0,.1)
}
#gbmpas {
	max-height: 220px
}
#gbmm {
	max-height: 530px
}
.gbsb {
	-webkit-box-sizing: border-box;
	display: block;
	position: relative;
*zoom:1
}
.gbsbic {
	overflow: auto
}
.gbsbis .gbsbt, .gbsbis .gbsbb {
	-webkit-mask-box-image: -webkit-gradient(linear, left top, right top, color-stop(0, rgba(0,0,0,.1)), color-stop(.5, rgba(0,0,0,.8)), color-stop(1, rgba(0,0,0,.1)));
	left: 0;
	margin-right: 0;
	opacity: 0;
	position: absolute;
	width: 100%
}
.gbsb .gbsbt:after, .gbsb .gbsbb:after {
	content: "";
	display: block;
	height: 0;
	left: 0;
	position: absolute;
	width: 100%
}
.gbsbis .gbsbt {
	background: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,.2)), to(rgba(0,0,0,0)));
	background-image: -webkit-linear-gradient(top, rgba(0,0,0,.2), rgba(0,0,0,0));
	background-image: -moz-linear-gradient(top, rgba(0,0,0,.2), rgba(0,0,0,0));
	background-image: -ms-linear-gradient(top, rgba(0,0,0,.2), rgba(0,0,0,0));
	background-image: -o-linear-gradient(top, rgba(0,0,0,.2), rgba(0,0,0,0));
	background-image: linear-gradient(top, rgba(0,0,0,.2), rgba(0,0,0,0));
	height: 6px;
	top: 0
}
.gbsb .gbsbt:after {
	border-top: 1px solid #ebebeb;
	border-color: rgba(0,0,0,.3);
	top: 0
}
.gbsb .gbsbb {
	-webkit-mask-box-image: -webkit-gradient(linear, left top, right top, color-stop(0, rgba(0,0,0,.1)), color-stop(.5, rgba(0,0,0,.8)), color-stop(1, rgba(0,0,0,.1)));
	background: -webkit-gradient(linear, left bottom, left top, from(rgba(0,0,0,.2)), to(rgba(0,0,0,0)));
	background-image: -webkit-linear-gradient(bottom, rgba(0,0,0,.2), rgba(0,0,0,0));
	background-image: -moz-linear-gradient(bottom, rgba(0,0,0,.2), rgba(0,0,0,0));
	background-image: -ms-linear-gradient(bottom, rgba(0,0,0,.2), rgba(0,0,0,0));
	background-image: -o-linear-gradient(bottom, rgba(0,0,0,.2), rgba(0,0,0,0));
	background-image: linear-gradient(bottom, rgba(0,0,0,.2), rgba(0,0,0,0));
	bottom: 0;
	height: 4px
}
.gbsb .gbsbb:after {
	border-bottom: 1px solid #ebebeb;
	border-color: rgba(0,0,0,.3);
	bottom: 0
}
.gbsbic::-webkit-scrollbar {
height:16px;
width:16px
}
.gbsbic::-webkit-scrollbar-button {
height:0;
width:0
}
.gbsbic::-webkit-scrollbar-button:start:decrement, .gbsbic::-webkit-scrollbar-button:end:increment {
display:block
}
.gbsbic::-webkit-scrollbar-button:vertical:start:increment, .gbsbic::-webkit-scrollbar-button:vertical:end:decrement {
display:none
}
.gbsbic::-webkit-scrollbar-track:vertical, .gbsbic::-webkit-scrollbar-track:horizontal, .gbsbic::-webkit-scrollbar-thumb:vertical, .gbsbic::-webkit-scrollbar-thumb:horizontal, .gbsbis .gbsbic::-webkit-scrollbar-track:vertical, .gbsbis .gbsbic::-webkit-scrollbar-track:horizontal, .gbsbis .gbsbic::-webkit-scrollbar-thumb:vertical, .gbsbis .gbsbic::-webkit-scrollbar-thumb:horizontal {
border-style:solid;
border-color:transparent
}
.gbsbic::-webkit-scrollbar-track:vertical {
background-clip:padding-box;
background-color:#fff;
border-left-width:5px;
border-right-width:0
}
.gbsbic::-webkit-scrollbar-track:horizontal {
background-clip:padding-box;
background-color:#fff;
border-bottom-width:0;
border-top-width:5px
}
.gbsbic::-webkit-scrollbar-thumb {
-webkit-box-shadow:inset 1px 1px 0 rgba(0,0,0,.1), inset 0 -1px 0 rgba(0,0,0,.07);
background-clip:padding-box;
background-color:rgba(0,0,0,.2);
min-height:28px;
padding-top:100px
}
.gbsbic::-webkit-scrollbar-thumb:hover {
-webkit-box-shadow:inset 1px 1px 1px rgba(0,0,0,.25);
background-color:rgba(0,0,0,.4)
}
.gbsbic::-webkit-scrollbar-thumb:active {
-webkit-box-shadow:inset 1px 1px 3px rgba(0,0,0,.35);
background-color:rgba(0,0,0,.5)
}
.gbsbic::-webkit-scrollbar-thumb:vertical {
border-width:0;
border-left-width:5px
}
.gbsbic::-webkit-scrollbar-thumb:horizontal {
border-width:0;
border-top-width:5px
}
.gbsbis .gbsbic::-webkit-scrollbar-track:vertical {
border-left-width:6px;
border-right-width:1px
}
.gbsbis .gbsbic::-webkit-scrollbar-track:horizontal {
border-bottom:1px;
border-top:6px
}
.gbsbis .gbsbic::-webkit-scrollbar-thumb:vertical {
border-width:0;
border-left-width:6px;
border-right-width:1px
}
.gbsbis .gbsbic::-webkit-scrollbar-thumb:horizontal {
border-width:0;
border-bottom:1px;
border-top:6px
}
.gbsbic::-webkit-scrollbar-track:hover {
-webkit-box-shadow:inset 1px 0 0 rgba(0,0,0,.1);
background-color:rgba(0,0,0,.05)
}
.gbsbic::-webkit-scrollbar-track:active {
-webkit-box-shadow:inset 1px 0 0 rgba(0,0,0,.14), inset -1px -1px 0 rgba(0,0,0,.07);
background-color:rgba(0,0,0,.05)
}
</style>
<style data-jiis="cc" id="gstyle">
html, body {
	height: 100%;
	margin: 0
}
#viewport {
	min-height: 100%;
	position: relative;
	width: 100%
}
.content {
	padding-bottom: 35px
}
#footer {
	bottom: 0;
	font-size: 10pt;
	height: 35px;
	position: absolute;
	width: 100%
}
#gog {
	padding: 3px 8px 0
}
td {
	line-height: .8em
}
.gac_m td {
	line-height: 17px
}
body, td, a, p, .h {
	font-family: arial, sans-serif
}
.h {
	color: #12c;
	font-size: 20px
}
.q {
	color: #00c
}
.ts td {
	padding: 0
}
.ts {
	border-collapse: collapse
}
em {
	color: #c03;
	font-style: normal;
	font-weight: normal
}
a em {
	text-decoration: underline
}
#lst-ib:hover {
	border-color: #a0a0a0 #b9b9b9 #b9b9b9 #b9b9b9 !important
}
#lst-ib.lst-d-f, #lst-ib:hover.lst-d-f {
	border-color: #4d90fe !important
}
.ds {
	display: inline-block;
	margin-left: 4px
}
.ctr-p {
	margin: 0 auto;
	min-width: 980px
}
a.gb1, a.gb2, a.gb3, a.gb4 {
	color: #11c !important
}
body {
	background: #fff;
	color: #222
}
a {
	color: #12c;
	text-decoration: none
}
a:hover, a:active {
	text-decoration: underline
}
.fl a {
	color: #12c
}
a:visited {
	color: #609
}
a.gb1, a.gb4 {
	text-decoration: underline
}
a.gb3:hover {
	text-decoration: none
}
#ghead a.gb2:hover {
	color: #fff !important
}
.sblc {
	padding-top: 5px
}
.sblc a {
	display: block;
	margin: 2px 0;
	margin-left: 13px;
	font-size: 11px
}
.lsbb {
	height: 30px;
	display: block
}
.ftl, #footer a {
	color: #666;
	margin: 2px 10px 0
}
#footer a:active {
	color: #dd4b39
}
.lsb {
	border: none;
	color: #000;
	cursor: pointer;
	height: 30px;
	margin: 0;
	outline: 0;
	vertical-align: top
}
.lst:focus {
	outline: none
}
body, html {
	font-size: small
}
h1, ol, ul, li {
	margin: 0;
	padding: 0
}
.nojsv {
	visibility: hidden
}
.hp #logocont.nojsv {
	display: none
}
#body, #footer {
	display: block
}
.igehp {
	display: none
}
.gl {
	white-space: nowrap
}
.big .tsf-p {
	padding-left: 126px;
	padding-right: 352px
}
.hp .tsf-p {
	padding-left: 173px;
	padding-right: 173px
}
.hp #tsf {
	margin: 0 auto;
	width: 833px
}
#tsf {
	width: 833px
}
.big #tsf, .hp .big #tsf {
	width: 1139px
}
.tsf-p {
	padding-left: 126px;
	padding-right: 46px
}
.hp .big .tsf-p {
	padding-left: 284px;
	padding-right: 284px
}
#flci {
	float: left;
	margin-left: 0;
	text-align: left;
	width: 0
}
#fll {
	float: right;
	text-align: right;
	width: 100%
}
#ftby {
	padding-left: 0
}
#ftby>div, #fll>div, #footer a {
	display: inline-block
}

@media only screen and (min-width:1222px) {
#ftby {
	margin: 0 44px
}
}
</style>
<style>
.gl {
	white-space: nowrap
}
.big .tsf-p {
	padding-left: 126px;
	padding-right: 352px
}
.hp .tsf-p {
	padding-left: 173px;
	padding-right: 173px
}
.hp #tsf {
	margin: 0 auto;
	width: 833px
}
#tsf {
	width: 833px
}
.big #tsf, .hp .big #tsf {
	width: 1139px
}
.tsf-p {
	padding-left: 126px;
	padding-right: 46px
}
.hp .big .tsf-p {
	padding-left: 284px;
	padding-right: 284px
}
</style>
<link href="https://www.google.com/" rel="canonical">
<style type="text/css">
.gsok_a {
	background: url(data:image/gif;base64,R0lGODlhEwALAKECAAAAABISEv///////yH5BAEKAAIALAAAAAATAAsAAAIdDI6pZ+suQJyy0ocV3bbm33EcCArmiUYk1qxAUAAAOw==) no-repeat center;
	display: inline-block;
	height: 11px;
	line-height: 0;
	width: 19px
}
.gsok_a img {
	border: none;
	visibility: hidden
}
#qbi.gssi_a {
	background: url(data:image/gif;base64,R0lGODlhEgANAOMKAAAAABUVFRoaGisrKzk5OUxMTGRkZLS0tM/Pz9/f3////////////////////////yH5BAEKAA8ALAAAAAASAA0AAART8Ml5Arg3nMkluQIhXMRUYNiwSceAnYAwAkOCGISBJC4mSKMDwpJBHFC/h+xhQAEMSuSo9EFRnSCmEzrDComAgBGbsuF0PHJq9WipnYJB9/UmFyIAOw==) no-repeat center;
	cursor: pointer;
	display: inline-block;
	height: 13px;
	padding: 0;
	width: 18px
}
.gsst_a {
	display: inline-block
}
.gsst_a {
	cursor: pointer;
	padding: 0 4px
}
.gsst_a:hover {
	text-decoration: none!important
}
.gsst_b {
	font-size: 16px;
	padding: 0 2px;
	position: relative;
	user-select: none;
	-webkit-user-select: none;
	white-space: nowrap
}
.gsst_e {
	vertical-align: middle;
	opacity: 0.6;
}
.gsst_a:hover .gsst_e, .gsst_a:focus .gsst_e {
	opacity: 0.8;
}
.gsst_a:active .gsst_e {
	opacity: 1;
}
.sbib_a {
	background: #fff;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
}
.sbib_b {
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	height: 100%;
	overflow: hidden;
	padding: 6px 9px 0
}
.sbib_c[dir=ltr] {
	float: right
}
.sbib_c[dir=rtl] {
	float: left
}
.sbib_d {
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	height: 100%;
	unicode-bidi: embed;
	white-space: nowrap
}
.sbib_d[dir=ltr] {
	float: left
}
.sbib_d[dir=rtl] {
	float: right
}
.sbib_a, .sbib_c {
	vertical-align: top
}
.sbdd_a {
	z-index: 989
}
.sbdd_a[dir=ltr] .fl, .sbdd_a[dir=rtl] .fr {
	float: left
}
.sbdd_a[dir=ltr] .fr, .sbdd_a[dir=rtl] .fl {
	float: right
}
.sbdd_b {
	background: #fff;
	border: 1px solid #ccc;
	border-top-color: #d9d9d9;
	box-shadow: 0 2px 4px rgba(0,0,0,0.2);
	-webkit-box-shadow: 0 2px 4px rgba(0,0,0,0.2);
	cursor: default
}
.sbdd_c {
	border: 0;
	display: block;
	position: absolute;
	top: 0;
	z-index: 988
}
.sben_a {
	color: #333
}
.sbsb_c[dir=ltr] .sbqs_a {
	float: right
}
.sbsb_c[dir=rtl] .sbqs_a {
	float: left
}
.sbqs_b {
	visibility: hidden
}
.sbsb_d .sbqs_b {
	visibility: visible
}
.sbsb_c[dir=ltr] .sbqs_b {
	padding-left: 5px;
}
.sbsb_c[dir=rtl] .sbqs_b {
	padding-right: 5px;
}
.sbqs_c {
	word-wrap: break-word
}
.gspr_a {
	padding-right: 1px
}
.sbpqs_a {
	color: #52188c
}
.sbdd_a[dir=ltr] .sbpqs_a {
	padding-right: 8px
}
.sbdd_a[dir=rtl] .sbpqs_a {
	padding-left: 8px
}
.sbdd_a[dir=ltr] .sbpqs_b {
	padding-right: 3px
}
.sbdd_a[dir=rtl] .sbpqs_b {
	padding-left: 3px
}
.sbpqs_c {
	color: #666;
	line-height: 22px
}
.gsn_a {
	padding-top: 4px;
	padding-bottom: 1px
}
.gsn_b {
	display: block;
	line-height: 16px
}
.gsn_c {
	color: green;
	font-size: 13px
}
.sbls_a {
	color: red
}
.sbsb_a {
	background: #fff
}
.sbsb_b {
	list-style-type: none;
	margin: 0;
	padding: 0
}
.sbsb_c {
	line-height: 22px;
	overflow: hidden;
	padding: 0 10px
}
.sbsb_d {
	background: #eee
}
.sbsb_e {
	height: 1px;
	background-color: #e5e5e5
}
#sbsb_f {
	font-size: 11px;
	color: #36c;
	text-decoration: none
}
#sbsb_f:hover {
	font-size: 11px;
	color: #36c;
	text-decoration: underline
}
.sbsb_g {
	text-align: center;
	padding: 8px 0 7px;
	position: relative
}
.sbsb_h {
	font-size: 15px;
	height: 28px;
	margin: 0.2em;
	-webkit-appearance: button
}
.sbsb_i {
	font-size: 13px;
	color: #36c;
	text-decoration: none;
	line-height: 100%
}
.sbsb_i:hover {
	text-decoration: underline
}
.sbsb_j {
	padding-top: 1px 0 2px 0;
	font-size: 11px
}
.sbdd_a[dir=ltr] .sbsb_j {
	padding-right: 4px;
	text-align: right
}
.sbdd_a[dir=rtl] .sbsb_j {
	padding-left: 4px;
	text-align: left
}
.gscp_a, .gscp_c, .gscp_d, .gscp_e, .gscp_f {
	display: inline-block;
	vertical-align: bottom
}
.gscp_f {
	border: none
}
.gscp_a {
	background: #d9e7fe;
	border: 1px solid #9cb0d8;
	cursor: default;
	outline: none;
	text-decoration: none!important;
	user-select: none;
	-webkit-user-select: none;
}
.gscp_a:hover {
	border-color: #869ec9
}
.gscp_a.gscp_b {
	background: #4787ec;
	border-color: #3967bf
}
.gscp_c {
	color: #444;
	font-size: 13px;
	font-weight: bold
}
.gscp_d {
	color: #aeb8cb;
	cursor: pointer;
	font: 21px arial, sans-serif;
	line-height: inherit;
	padding: 0 7px
}
.gscp_a:hover .gscp_d {
	color: #575b66
}
.gscp_c:hover, .gscp_a .gscp_d:hover {
	color: #222
}
.gscp_a.gscp_b .gscp_c, .gscp_a.gscp_b .gscp_d {
	color: #fff
}
.gscp_e {
	height: 100%;
	padding: 0 4px
}
.gsc_b {
	background: url(data:image/gif;base64,R0lGODlhCgAEAMIEAP9BGP6pl//Wy/7//P///////////////yH5BAEKAAQALAAAAAAKAAQAAAMROCOhK0oA0MIUMmTAZhsWBCYAOw==) repeat-x scroll 0 100% transparent;
	display: inline-block;
	padding-bottom: 1px
}
.sbhcn {
	border: 1px solid #b9b9b9;
	border-top-color: #a0a0a0
}
.sbfcn {
	border: 1px solid #4d90fe
}
.vasq .sbdd_a {
	z-index: 1001
}
.srp.vasq .sbhcn, .srp.vasq .sbfcn {
	border-right-width: 0
}
</style>
</head>
<body class="hp" alink="#dd4b39" bgcolor="#fff" id="gsr" link="#12c" text="#222" vlink="#61c">
<div class="ctr-p" id="viewport">
  <div data-jiis="cc" id="doc-info"></div>
  <div data-jiis="cc" id="cst">
    <style>
.y.yp{display:none}.y.yf,.y.ys{display:block}.yi{}
</style>
  </div>
  <textarea name="csi" id="csi" style="display:none"></textarea>
  
  <div data-jibp="" id="mngb">
    <div id="gb">
      <div id="gbw">
        <div id="gbz"><span class="gbtcb"></span>
          <ol id="gbzc" class="gbtc">
            <li class="gbt"><a class="gbzt" id="gb_119" href="https://plus.google.com/?gpsrc=ogpy0&tab=wX"><span class="gbtb2"></span><span class="gbts">Google+</span></a></li>
            <li class="gbt"><a class="gbzt gbz0l gbp1" id="gb_1" href="https://www.google.com/webhp?tab=ww"><span class="gbtb2"></span><span class="gbts">搜索</span></a></li>
            <li class="gbt"><a class="gbzt" id="gb_2" href="https://www.google.com/imghp?hl=zh-CN&tab=wi"><span class="gbtb2"></span><span class="gbts">图片</span></a></li>
            <li class="gbt"><a class="gbzt" id="gb_8" href="https://maps.google.com/maps?hl=zh-CN&tab=wl"><span class="gbtb2"></span><span class="gbts">地图</span></a></li>
            <li class="gbt"><a class="gbzt" id="gb_78" href="https://play.google.com/?hl=zh-CN&tab=w8"><span class="gbtb2"></span><span class="gbts">Play</span></a></li>
            <li class="gbt"><a class="gbzt" id="gb_36" href="https://www.youtube.com/?tab=w1"><span class="gbtb2"></span><span class="gbts">YouTube</span></a></li>
            <li class="gbt"><a class="gbzt" id="gb_5" href="https://news.google.com/nwshp?hl=zh-CN&tab=wn"><span class="gbtb2"></span><span class="gbts">新闻</span></a></li>
            <li class="gbt"><a class="gbzt" id="gb_23" href="https://mail.google.com/mail/?tab=wm"><span class="gbtb2"></span><span class="gbts">Gmail</span></a></li>
            <li class="gbt"><a class="gbgt" id="gbztm" href="http://www.google.com/intl/zh-CN/options/" aria-haspopup="true" aria-owns="gbd"><span class="gbtb2"></span><span id="gbztms" class="gbts gbtsa"><span id="gbztms1">更多</span><span class="gbma"></span></span></a>
              <div class="gbm" id="gbd" aria-owner="gbztm">
                <div id="gbmmb" class="gbmc gbsb gbsbis">
                  <ol id="gbmm" class="gbmcc gbsbic">
                    <li class="gbmtc"><a class="gbmt" id="gb_49" href="https://drive.google.com/?tab=wo">云端硬盘</a></li>
                    <li class="gbmtc"><a class="gbmt" id="gb_24" href="https://www.google.com/calendar?tab=wc">日历</a></li>
                    <li class="gbmtc"><a class="gbmt" id="gb_51" href="https://translate.google.com/?hl=zh-CN&tab=wT">翻译</a></li>
                    <li class="gbmtc"><a class="gbmt" id="gb_17" href="http://www.google.com/mobile/?hl=zh-CN&tab=wD">移动</a></li>
                    <li class="gbmtc"><a class="gbmt" id="gb_10" href="https://books.google.com/bkshp?hl=zh-CN&tab=wp">图书</a></li>
                    <li class="gbmtc"><a class="gbmt" id="gb_212" href="https://wallet.google.com/manage/?tab=wa">电子钱包</a></li>
                    <li class="gbmtc"><a class="gbmt" id="gb_30" href="https://www.blogger.com/?tab=wj">Blogger</a></li>
                    <li class="gbmtc"><a class="gbmt" id="gb_27" href="https://www.google.com/finance?tab=we">财经</a></li>
                    <li class="gbmtc"><a class="gbmt" id="gb_31" href="https://photos.google.com/?tab=wq">相册</a></li>
                    <li class="gbmtc"><a class="gbmt" id="gb_12" href="http://video.google.com/?hl=zh-CN&tab=wv">视频</a></li>
                    <li class="gbmtc"><a class="gbmt" id="gb_25" href="https://docs.google.com/document/?usp=docs_alc">Google 文档</a></li>
                    <li class="gbmtc">
                      <div class="gbmt gbmh"></div>
                    </li>
                    <li class="gbmtc"><a href="http://www.google.com/intl/zh-CN/options/" class="gbmt">更多 »</a></li>
                  </ol>
                  <div class="gbsbt"></div>
                  <div class="gbsbb"></div>
                </div>
              </div>
            </li>
          </ol>
        </div>
        <div id="gbg">
          <h2 class="gbxx">Account Options</h2>
          <span class="gbtcb"></span>
          <ol class="gbtc">
            <li class="gbt"><a target="_top" href="https://accounts.google.com/ServiceLogin?hl=zh-CN&continue=https://www.google.com/%3Fgws_rd%3Dssl" id="gb_70" class="gbgt"><span class="gbtb2"></span><span id="gbgs4" class="gbts"><span id="gbi4s1">登录</span></span></a></li>
            <li class="gbt gbtb"><span class="gbts"></span></li>
            <li class="gbt"><a class="gbgt" id="gbg5" href="http://www.google.com/preferences?hl=zh-CN" title="选项"  aria-haspopup="true" aria-owns="gbd5"><span class="gbtb2"></span><span id="gbgs5" class="gbts"><span id="gbi5"></span></span></a>
              <div class="gbm" id="gbd5" aria-owner="gbg5">
                <div class="gbmc">
                  <ol id="gbom" class="gbmcc">
                    <li class="gbkc gbmtc"><a class="gbmt" href="https://www.google.com/preferences?hl=zh-CN">搜索设置</a></li>
                    <li class="gbmtc">
                      <div class="gbmt gbmh"></div>
                    </li>
                    <li class="gbe gbmtc"><a id="gmlas" class="gbmt" href="https://www.google.com/advanced_search?hl=zh-CN">高级搜索</a></li>
                    <li class="gbe gbmtc"><a class="gbmt" href="https://www.google.com/language_tools?hl=zh-CN">语言工具</a></li>
                    <li class="gbmtc">
                      <div class="gbmt gbmh"></div>
                    </li>
                    <li class="gbkp gbmtc"><a class="gbmt" href="http://www.google.com/history/optout?hl=zh-CN">网络历史记录</a></li>
                  </ol>
                </div>
              </div>
            </li>
          </ol>
        </div>
      </div>
      <div id="gbx3"></div>
      <div id="gbx4"></div>
    </div>
  </div>
  <div class="jhp big" id="searchform">
    <div class="sfbg nojsv" style="margin-top:-20px">
      <div class="sfbgg"></div>
    </div>
    <form class="tsf" action="<?php echo $searchPageName;?>" id="tsf" method="GET" name="adsfew" role="search">
      <div data-jibp="" data-jiis="uc" id="tophf">
        
      </div>
      <div class="tsf-p">
        <div class="nojsv logocont" id="logocont">
          <h1><a id="logo" href="https://www.google.com/webhp?hl=zh-CN" title="Google 首页"><img width="167" height="373" src="" alt="Google"></a></h1>
        </div>
        <div class="sfibbbc">
          <div class="sbtc" id="sbtc">
            <div class="sbibtd">
              <div class="sbibod " id="sfdiv">
                <div class="gstl_0 sbib_a" style="height: 28px;">
                  <div class="gsst_b sbib_c" id="gs_st0" dir="ltr" style="line-height: 28px; display: none;"></div>
                  <div class="sbib_b" id="sb_ifc0" dir="ltr">
                    <div id="gs_lc0" style="position: relative;">
                      <input class="gsfi" id="lst-ib" maxlength="2048" name="<?php echo $getArgName;?>" autofocus autocomplete="off" title="Google 搜索" type="text" value="" aria-label="搜索" aria-haspopup="false" role="combobox" aria-autocomplete="both" dir="ltr" spellcheck="false" style="border: none; padding: 0px; margin: 0px; height: auto; width: 100%; position: absolute; z-index: 6; left: 0px; outline: none; background: url(data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw%3D%3D) transparent;">
                      <div class="gsfi" id="gs_sc0" style="color: transparent; padding: 0px; position: absolute; z-index: 2; white-space: pre; visibility: hidden; background: transparent;"></div>
                      <input class="gsfi" disabled="" autocomplete="off" autocapitalize="off" aria-hidden="true" id="gs_taif0" dir="ltr" style="border: none; padding: 0px; margin: 0px; height: auto; width: 100%; position: absolute; z-index: 1; -webkit-text-fill-color: silver; color: silver; left: 0px; visibility: hidden; background-color: transparent;">
                      <input class="gsfi" disabled="" autocomplete="off" autocapitalize="off" aria-hidden="true" id="gs_htif0" dir="ltr" style="border: none; padding: 0px; margin: 0px; height: auto; width: 100%; position: absolute; z-index: 1; -webkit-text-fill-color: silver; color: silver; transition: all 0.218s; -webkit-transition: all 0.218s; opacity: 0; text-align: left; left: 0px; background-color: transparent;">
                    </div>
                  </div>
                </div>
              </div>
              <div class="sfsbc">
                <div class="nojsb">
                  <div class="ds" id="sbds">
                    <div class="lsbb kpbb" id="sblsbb">
                      <button class="lsb" value="Google 搜索" aria-label="Google 搜索" type="submit"> <span class="sbico"></span> </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="gstl_0 sbdd_a" style="display: none; min-width: 568px; top: 29px; position: absolute; left: 1px;">
              <div class="fl"></div>
              <div>
                <div class="sbdd_b"></div>
                <div></div>
              </div>
            </div>
          </div>
          <div>
            <div id="pocs" style="display:none;left:0px;white-space:nowrap">
              <div id="pocs0"><span><span>Google</span> 即搜即得不可用。请按回车键进行搜索。</span>&nbsp;<a href="https://www.google.com/support/websearch/bin/answer.py?answer=186645&form=bb&hl=zh-CN">了解详情</a></div>
              <div id="pocs1">由于网速慢，<span>Google</span> 即搜即得已关闭。请按回车键进行搜索。</div>
              <div id="pocs2">按回车键进行搜索。</div>
            </div>
          </div>
        </div>
        <div class="jsb" style="padding-top:2px">
          <center>
            <input value="Google 搜索" aria-label="Google 搜索" type="submit">
            <input value=" 手气不错 " aria-label=" 手气不错 "type="submit">
          </center>
        </div>
      </div>
      
    </form>
  </div>
  <div id="gac_scont"></div>
  <div class="content" data-jiis="cc" id="main"><span class="ctr-p" data-jiis="bp" id="body">
    <center>
      <div style="height:231px;margin-top:50px" id="lga">
        <div style="padding-top:112px">
          <div style="background:url(images/logo.png) no-repeat;background-size:269px 95px;height:95px;width:269px" title="Google" align="left" id="hplogo">
            <div style="color:#777;font-size:16px;font-weight:bold;position:relative;left:218px;top:70px" nowrap="">GFWed</div>
          </div>
        </div>
      </div>
      <div style="height:102px"></div>
      <div id="prm-pt" style="margin-top:12px"></div>
    </center>
    </span>
    <div class="ctr-p" data-jiis="bp" id="footer">
      <div id="footcnt">
        <style>
.fmulti{}._dQc{bottom:0;left:0;position:absolute;right:0}._GR{background:#f2f2f2;left:0;right:0;-webkit-text-size-adjust:none}.fbar p{display:inline}.fbar a,#fsettl{text-decoration:none;white-space:nowrap}.fbar{margin-left:-27px}._Gs{padding-left:27px;margin:0 !important}._eA{padding:0 !important;margin:0 !important}#fbarcnt{display:block}._E2 a:hover{text-decoration:underline}._HR img{margin-right:4px}._HR a,._GR #swml a{text-decoration:none}.fmulti{text-align:center}.fmulti #fsr{display:block;float:none}.fmulti #fuser{display:block;float:none}#fuserm{line-height:25px}#fsr{float:right;white-space:nowrap}#fsl{white-space:nowrap}#fsett{background:#fff;border:1px solid #999;bottom:30px;padding:10px 0;position:absolute;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);text-align:left;z-index:104}#fsett a{display:block;line-height:44px;padding:0 20px;text-decoration:none;white-space:nowrap}._E2 #fsettl:hover{text-decoration:underline}._E2 #fsett a:hover{text-decoration:underline}._mk{color:#777}._Nh{color:#222;font-size:14px;font-weight:normal;-webkit-tap-highlight-color:rgba(0,0,0,0)}._Nh:hover,._Nh:active{color:#444}._Mo{display:inline-block;position:relative}._Nh ._Mo ._cuf{opacity:0.55}a._Nh:hover ._Mo ._cuf,a._Nh:active ._Mo ._cuf{opacity:1.0}._ri,._Wk{height:13px;width:8px}._cuf{border:8px solid rgba(255,255,255,0);border-radius:8px;position:absolute}._ri ._cuf{border-left:8px solid #777;left:1px}._Wk ._cuf{border-right:8px solid #777;left:-9px}._ri ._duf,._Wk ._duf{border:12px solid rgba(255,255,255,0);position:absolute;top:-4px}._ri ._duf{border-left:10px solid #f6f6f6;left:-4px}._Wk ._duf{border-right:10px solid #f6f6f6;left:-10px}._Nh{padding:8px 16px;margin-right:10px}._mk{margin:40px 0}._dD{margin-right:10px}._nW{margin-left:135px}#fbar{background:#f2f2f2;border-top:1px solid #e4e4e4;line-height:40px;min-width:980px}._xac{margin-left:135px}.fbar p,.fbar a,#fsettl,#fsett a{color:#777}.fbar a:hover,#fsett a:hover{color:#333}.fbar{font-size:small}#fuser{float:right}._HR{margin-left:135px;line-height:15px;}
</style>
        <style>
#fsl{margin-left:30px}#fsr{margin-right:30px}.fmulti #fsl{margin-left:0}.fmulti #fsr{margin-right:0}
</style>
        <div class="_dQc _E2" id="fbar">
          <div class="fbar"> <span id="fsr"> <a class="_Gs" href="https://www.google.com/intl/zh-CN/policies/privacy/?fg=1">隐私权</a> <a class="_Gs" href="https://www.google.com/intl/zh-CN/policies/terms/?fg=1">条款</a> <span style="display:inline-block;position:relative"> <a class="_Gs" href="https://www.google.com/preferences?hl=zh-CN" id="fsettl" aria-controls="fsett" aria-expanded="false" role="button">设置</a> <span id="fsett" style="display:none"> <a href="https://www.google.com/preferences?hl=zh-CN&fg=1">搜索设置</a> <span data-jibp="h" data-jiis="uc" id="advsl"> <a href="https://www.google.com/advanced_search?hl=zh-CN&fg=1">高级搜索</a> </span> <a href="https://www.google.com/history/optout?hl=zh-CN&fg=1"> 历史记录 </a> <a href="https://support.google.com/websearch/?p=ws_results_help&hl=zh-CN&fg=1">搜索帮助</a> <a data-bucket="websearch" id="_Yvd" target="_blank" data-ved="0CAcQLg"> 发送反馈 </a> </span> </span> <a class="_Gs" href="https://www.google.com/setprefs?hl=en&sig=0_mNHtIsYdviLsFPE-kOsXyNRExZ4%3D&prev=https://www.google.com/?gws_rd%3Dssl&fg=1">Google.com in English</a> </span> <span id="fsl"> <a class="_Gs" href="https://www.google.com/intl/zh-CN/ads/?fg=1">广告</a> <a class="_Gs" href="https://www.google.com/services/?fg=1">商务</a> <a class="_Gs" href="https://www.google.com/intl/zh-CN/about.html?fg=1">Google 大全</a> </span> </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="xjsd"></div>
  <div id="xjsi" data-jiis="bp"></div>
  </div>
<style type="text/css">
#nycntg{margin:6px 25px 10px 0}#nycp{background-color:#fafafa;border-left:1px solid #ebebeb;bottom:0;left:0;margin-left:33px;min-width:240px;position:absolute;right:0;top:0;visibility:hidden;z-index:102;padding:38px 16px 10px 31px}.nyc_open #nycp{visibility:visible}#nycf{display:none;height:1px;left:0;min-width:940px;position:absolute;visibility:hidden;z-index:-1}.nyc_open #nycf{display:block}.nyc_opening #nycp,.nyc_opening #nycprv{display:block;visibility:hidden!important}#nyccur{background:#fafafa;height:100%;left:33px;opacity:0;position:absolute;top:0;width:0;z-index:120}#nyccur.wipeRight{border-right:1px solid #e8e8e8;opacity:1;-webkit-transition:width 0.08s ease-in;width:100%}#nyccur.fadeOut{opacity:0;-webkit-transition:opacity 0.08s linear;width:100%}#nyccur.fadeIn{opacity:1;-webkit-transition:opacity 0.08s linear;width:100%}#nyccur.wipeLeft{border-right:1px solid #eee;opacity:1;-webkit-transition:width 0.08s ease-out;width:0}.nyc_open .vspib,.nyc_opening .vspib{padding-right:0;-webkit-transition:padding-right .2s ease}.nyc_open .vspib .vspii,.nyc_opening .vspib .vspii{-webkit-border-top-right-radius:0;-webkit-border-bottom-right-radius:0;border-right:none}.nyc_open #nycxh{cursor:pointer;opacity:0.7;padding:15px;position:absolute;right:1px;top:12px}.nyc_open #nycxh:hover{opacity:1}#nycx{display:none}.nyc_open #nycx{border:none;cursor:pointer;display:block;padding:0}#nycntg h3 .esw{display:none}#nyc .vshid{display:inline}#nyc #nycntg .vshid a{white-space:nowrap}#nycntg a:link{border:0;text-decoration:none}#nycntg a:hover{text-decoration:underline}#vsi,.vsi{border:none;width:100%}.vslru.vso:before{border:1px solid #ebebeb;border-right:none;bottom:-8px;top:-7px;left:-7px;right:-9px;content:"";position:absolute;z-index:-1}.vslru div.vspib{bottom:-6px;top:-7px}.vslru div.vspib .vspii{border-radius:0}.vscl.vso.vslru:before,.vscl.vslru div.vspib{top:-4px}
</style>
</body>
</html>