<?php  	
 require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
 require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
 require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
 $App 	= new App();	
 $Nav	= new Nav();	
 $Menu 	= new Menu();		
 include($App->getProjectCommon());    
 # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Example Reports";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../../../../birt.inc";
	
	$currentPage			= "Introduction";
	$linkToTop				= linkToTop();



	# Paste your HTML content between the EOHTML markers!
	
	ob_start();
?>
	
	<div id="maincontent">
		<div id="midcolumn">
<?php
		$handle = fopen("http://download.eclipse.org/birt/downloads/examples/reports/2.1/xmlds/index.html", "rb");
		$contnt = '';
		echo "test";
		while (!feof($handle)) {
			$contnt = fgets( $handle, 4096);
			echo $contnt;
		}
		fclose($handle);
?>
		</div>
	</div>
<?php


	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
