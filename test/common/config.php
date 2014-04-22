<?php 

if ($_SERVER['REMOTE_ADDR'] != "72.209.186.124") { 
 echo "You don't have access to view this page!"; 
 exit(); 
}

/******************************************* 
	Things that you will need to configure before pushing environment. 
	-Set basePath
		-Set the base folder strucutre - This is different then document root 
			For example on MAMP Local you would set 
			$basePath = "/_sites/eclipse/birt/"
	-
********************************************/
			
	$basePath = '/birt/test';

	/* Use URL that you are currently on */ 
	$currentUrl = "";
	$currentUrl = ($_SERVER['REQUEST_URI']);

class PagePart {



	function getMetaInfo($metaTitle, $metaKeywords, $metaAuthor,$metaDescription, $ogTitle, $ogImage, $ogDescription, $robotsIndex, $robotsFollow, $canonicalTag) {
		
		global $basePath;
		global $currentUrl;

		$metaInfo = '';
		
		$metaInfo = '
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="text/html; charset=utf-8" http-equiv="content-type" />
	<title>'.$metaTitle.'</title>
	<meta name="keywords" content="'.$metaKeywords.'" />';
	if ($metaAuthor)
	$metaInfo .= '<meta name="author" content="'.$metaAuthor.'">';

	$metaInfo .='
	<meta name="description" content="'.$metaDescription.'" />
	<meta property="og:title" content="'.$ogTitle.'"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://eclipse.org'.$currentUrl.'"/>
	<meta property="og:image" content="'.$ogImage.'"/>
	<meta property="og:site_name" content="eclipse.org/birt/"/>
	<meta property="og:description" content="'.$ogDescription.'"/>

	<!-- search engine Items -->
	<meta name="robots" content="'.$robotsIndex.','.$robotsFollow.'" />';
	if ($canonicalTag)
	$metaInfo .='<link rel="canonical" href="'.$canonicalTag.'"/>';


	$metaInfo .= '<meta id="metaViewport" name="viewport" content="width=1124, user-scalable=no" />
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic" rel="stylesheet" type="text/css">

	<script src="'.$basePath.'/js/jquery.js"></script>
	<script src="'.$basePath.'/js/actuate.js"></script>
	<script src="'.$basePath.'/js/bootstrap.min.js"></script>
	<script src="'.$basePath.'/js/modernizr.js"></script>
	<script src="'.$basePath.'/js/twitter-bootstrap-hover-dropdown.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

	<link href="'.$basePath.'/css/actuate.css" rel="stylesheet" />
	<link href="'.$basePath.'/css/eclipse.css" rel="stylesheet" />

	<!--[if lt IE 8]><link href="'.$basePath.'/css/yggdrasil-icon-font-ie7.css" rel="stylesheet" /><![endif]-->

		';
		return $metaInfo;
	}

	function getSideMenu() {

		global $currentUrl;
		global $basePath;

		$sideMenu = '';
		$sideMenu = '
			<a href="/birt/test/"><img src="'.$basePath.'/img/logo/Birt-logo.png" class="actu-birt-logo"/></a>
			<div class="actu-eclipse-container">
				<div class="actu-eclipse-container-inner">	
					<ul class="actu-eclipse-nav">
						<li><a href="'.$basePath.'/about/">About</a></li>
						<li><a href="'.$basePath.'/getting-started/">Getting Started</a></li>
						<li><a href="http://download.eclipse.org/birt/downloads/">Download</a></li>
						<li><a href="'.$basePath.'/demos/">Demos</a></li>
						<li><a href="'.$basePath.'/documentation/">Documentation</a></li>
						<li><a href="'.$basePath.'/community/">Community</a></li>
						<li><a href="'.$basePath.'/built-with-birt/">Built with BIRT</a></li>
					</ul>
					<hr>
					<a href="http://www.actuate.com/" ><img src="'.$basePath.'/img/logo/actuate-logo.png" /></a>
				</div>
			</div>
		';
		return $sideMenu;
		
	}

	function getAfterBody() {
		//google tag manager code will go here
		$afterBody = '';
		$afterBody = '	<!-- After body Start-->

	<!--After Body End -->';
		
		return $afterBody;
	}

	function getFooter() {
		$footer = '';
		$footer = '<!-- Footer Begin -->
			<div id="footer" class="content-area" style="margin-top:0px; padding-bottom:10px;">
					<div class="content-area-inner" style="padding-top:10px;">
<div class="col-3" style="width:180px;  margin-left:325px;">
<ul>
<li><a href="/">Home</a></li>
<li><a href="/legal/privacy.php">Privacy Policy</a></li>
<li><a href="/legal/termsofuse.php">Terms of Use</a></li>
</ul></div>
<div class="col-3" style="width:180px;">
<ul>
<li><a href="/legal/copyright.php">Copyright Agent</a></li>
<li><a href="/legal/">Legal</a></li>
<li><a href="/org/foundation/contact.php">Contact Us</a></li></ul></div>
			<div class="col-3" style="width:250px;">
			<img style="width:160px;" src="/birt/test/img/logo/eclipse_logo_colour.png" />
			<div class="clearfix"></div>
			<span style="font-size:10px">Copyright &copy; 2014 The Eclipse Foundation. All Rights Reserved.</span>
			</div>
			</div>
			</div>
		<!-- Footer End -->';
		return $footer;
	}

}
