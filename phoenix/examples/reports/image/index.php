<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Example Reports - Images";
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
	require "../reports.inc";
	$currentPage			= "Image";
	$linkToTop				= linkToTop();
	$reportLinksSideItem  	= getReportsLinksSideItem($currentPage);



	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#demonstration">Demonstration</a></li>
				<li><a href="#reports">Reports</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			This example demonstrates how BIRT can be used to include images in a report.
		</p>
		<p>
			Two types of images can be referred to in a report. URI's refer to images read from another location. Images can also be embedded within a report design file. A scripted data source is used in this example to demonstrate how different images are displayed in a report. If you intend to try this example, download the images and place them in c:\temp.
		</p>


		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/Image/Image.html" target="_blank" class="top">Image Flash Example</a> –

				This example demonstrates using Images within a BIRT report.
			</li>
		</ul>


		<h2><a name="reports"></a>Reports</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/Image/after.html" target="_blank" class="top">Image Report</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/Image/reports/ImageExample.rptdesign" target="_blank">rptdesign</a>) –

				A simple report that demonstrates using images.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/Image/images.zip" target="_blank" class="top">Images</a> –

				Images used in the example report.
			</li>
		</ul>

	</div>
	$reportLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
