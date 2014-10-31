<?php 

if ($_SERVER['REMOTE_ADDR'] != "72.209.186.124") { 
 echo "You don't have access to view this page!"; 
 exit(); 
}

require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	
	
	include($App->getProjectCommon());

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

	function getAfterBody() {
		//google tag manager code will go here
		$afterBody = '';
		$afterBody = "	<!-- After body Start-->
	<!-- Google Tag Manager -->
<noscript><iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-PW8LFV\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PW8LFV');</script>
<!-- End Google Tag Manager -->
	<!--After Body End -->";
		
		return $afterBody;
	}

}
