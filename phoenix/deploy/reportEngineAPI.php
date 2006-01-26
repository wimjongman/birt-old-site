<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Report Engine API";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../birt.inc";
	require "deploy.inc";
	$currentPage			= "Report Engine API";
	$linkToTop				= linkToTop();
	$deployLinksSideItem  	= getDeployLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#background">Background</a></li>
				<li><a href="#installing">Installing the API</a></li>
				<li><a href="#config">Installing the Engine</a></li>
				<li><a href="#jdbc">Configuring JDBC Drivers</a></li>
				<li><a href="#api">API Overview</a></li>
				<li><a href="#example">Example Application</a></li>
			</ul>
		</blockquote>








<h2><a name="background"></a>Background</h2>


The BIRT Report Engine API allows you to integrate the run-time part of BIRT
into your application. The engine supports the following operations:

<ul>
<li>Discover the set of parameters defined for a report.
<li>Get the default values for parameters.<li>Run a report to produce an HTML or PDF output.
<li>Fetch an image or chart for a report.
</ul>

<p>The report engine supports extensions for custom report items, and for custom 
output formats. Extensions are discussed elsewhere. This article focus on how 
your application integrates with the report engine.
</p>


	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
