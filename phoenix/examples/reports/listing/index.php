<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Example Reports - Listing";
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
	$currentPage			= "Listing";
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
			This example demonstrates the use of BIRT to create a simple listing report. Listing reports present data in tabular form and are very popular because of their ease of use. This example demonstrates the use of BIRT to create a simple listing report using data from the sample database bundled with BIRT. The user is guided through the steps to add a data source, define a query and specify the report layout.
		</p>

		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/ListingReport/ListingReport.html" target="_blank" class="top">Listing Report Flash Example</a> –

				This example demonstrates the use of BIRT to create a simple listing report.
			</li>
		</ul>


		<h2><a name="reports"></a>Reports</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/ListingReport/before.html" target="_blank" class="top">Customer List Before</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/ListingReport/reports/ListingExampleBefore.rptdesign" target="_blank">rptdesign</a>) –

				Blank report with company header.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/ListingReport/after.html" target="_blank" class="top">Customer List After</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/ListingReport/reports/ListingExampleAfter.rptdesign" target="_blank">rptdesign</a>) –

				Presents a listing report of customers.
			</li>
		</ul>

	</div>
	$reportLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
