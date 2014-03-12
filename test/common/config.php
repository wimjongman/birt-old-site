<?php 
/******************************************* 
	Things that you will need to configure before pushing environment. 
	-Set basePath
		-Set the base folder strucutre - This is different then document root 
			For example on MAMP Local you would set 
			$basePath = "/_sites/eclipse/birt/"
	-
********************************************/
			
	$basePath = '/birt/test/';

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
			<a href="/birt/"><img src="'.$basePath.'/img/logo/birt-logo.png" class="actu-birt-logo"/></a>
			<div class="actu-eclipse-container">
				<div class="actu-eclipse-container-inner">	
					<ul class="actu-eclipse-nav">
						<li><a href="#">Introduction</a></li>
						<li><a href="#">Download</a></li>
						<li><a href="#">Install</a></li>
						<li><a href="#">Tutorial</a></li>
						<li><a href="#">Sample Database</a></li>
						<li><a href="#">Examples</a></li>
						<li><a href="#">Integration</a></li>
						<li><a href="#">FAQ/Wiki</a></li>
						<li><a href="#">Report a Bug</a></li>
						<li><a href="#">Community</a></li>
						<li><a href="#">Reference</a></li>
						<li><a href="#">Project Organization</a></li>
						<li><a href="#">Project Development Plan</a></li>
						<li><a href="#">Building BIRT</a></li>
						<li><a href="#">Introduction</a></li>
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
			<div>footer</div>
		<!-- Footer End -->';
		return $footer;
	}

}
