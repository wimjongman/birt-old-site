<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Design Engine API";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../../../birt.inc";
	$linkToTop				= linkToTop();



	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#demonstration">Demonstration</a></li>
				<li><a href="#java">Java Code</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			This example presents a Java program that utilizes the BIRT Design Engine API. The BIRT Design Engine API provides the Java developers added flexibility to produce reports programmatically. Using the API, the Design Engine provides the capability to customize elements of the report while integrating this capability into existing enterprise applications.
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/integrating/DesignEngine/DesignEngine.html" target="_blank" class="top">Design Engine Flash Example</a> –

				This example demonstrates using the Design Engine API.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="java"></a>Java Code</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/integrating/DesignEngine/CColumn.java" target="_blank" class="top">CColumn.java</a> –

				Java code used in the demonstration.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/integrating/DesignEngine/TestCColumn.java" target="_blank" class="top">TestCColumn.java</a> –

				Java code used to test the class that uses the Design Engine API.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />
	</div>
	$reportLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
