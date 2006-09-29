<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Extensibility";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Extensibility</h2>
		<p>
			The spectrum of reporting applications is enormous, and the BIRT team can never
			provide every feature needed by every application. BIRT's scripting support is
			one way to extend BIRT. Another is to create BIRT extensions that plug into
			BIRT.
		</p>
		<h2>Data Access</h2>
		<p>
			BIRT uses the Data Tools Open Data Access (ODA) framework for adding custom data access
			methods. Data access extensions include a runtime component for getting the data.
			They can also include custom design-time UI for building a custom query. For
			example, a packaged application vendor can use ODA to build data access UI
			that works with the vendor's own data model.
		</p>
		<h2>Report Items</h2>
		<p>
			BIRT provides a solid set of <i>report items</i> for presenting data. Applications
			that have specific needs can create additional report items that work within the
			designer and engine just like BIRT's own report items. For example, a performance
			management application might add report items that display stop lights, gauges
			and other visual indications of performance metrics.
		</p>
		<h2>Chart Types</h2>
		<p>
			The BIRT chart package provides a wide variety of chart types. However, some
			industries have developed very specific chart formats. Developers can create
			chart plug-ins that add these chart types into the BIRT charting engine.
		</p>
		<h2>Output Formats</h2>
		<p>
			BIRT Release 2.1.1 provides output in HTML, Paginated HTML and PDF. Many other types of output
			are possible: Excel, Rich Text Format (RTF), Scalable Vector Graphic (SVG),
			images, and more. While BIRT will add some of these over time, others may
			have a more limited audience. Developers can use BIRT engine interfaces to
			add additional converters, including those specific to a given application.
		</p>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>BIRT Overview</h6>
			<ul>
				<li><a href="index.php">Overview</a></li>
				<li><a href="intro02.php">Integration</a></li>
				<li><a href="intro03.php">Designer</a></li>
				<li><a href="intro04.php">Developing</a></li>
				<li><a href="intro05.php">Extensibility</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
