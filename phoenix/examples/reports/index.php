<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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

	require "../../birt.inc";
	require "reports.inc";
	$currentPage			= "Introduction";
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
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			This section of Examples focuses on the feature set within BIRT. Simple reports are used to illustrate a function within BIRT. Most examples will have a before and after report that can be downloaded. In addition, the example is illustrated in a Flash presentation.
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/examples/reports/charting">Charting</a> –
				This example demonstrates building a report with several chart types.
			</li>
			<li>
				<a href="/birt/examples/reports/chartingsubreport">Chart as a Sub Report</a> –
				This example demonstrates building a report that uses a stock chart as a sub report.
			</li>
			<li>
				<a href="/birt/examples/reports/datasetfilter">Dataset Filtering</a> –
				This example demonstrates the dataset filtering feature.
			</li>
			<li>
				<a href="/birt/examples/reports/dynamictext">Dynamic Text</a> –
				This example demonstrates using Dynamic Text within a report.
			</li>
			<li>
				<a href="/birt/examples/reports/grouping">Grouping</a> –
				This example demonstrates building a grouped report.
			</li>
			<li>
				<a href="/birt/examples/reports/highlighting">Conditional Highlighting</a> –
				This example demonstrates the Highlighting Feature.
			</li>
			<li>
				<a href="/birt/examples/reports/hyperlinking">Hyperlinking</a> –
				This example demonstrates the ability to embed hyperlinks in BIRT reports.
			</li>
			<li>
				<a href="/birt/examples/reports/image">Image</a> –
				This example demonstrates using images within a BIRT report.
			</li>
			<li>
				<a href="/birt/examples/reports/listing">Listing</a> –
				This example demonstrates building a listing report.
			</li>
			<li>
				<a href="/birt/examples/reports/mapping">Mapping</a> –
				This example demonstrates the Mapping Feature.
			</li>
			<li>
				<a href="/birt/examples/reports/mysql">MySQL Data Source</a> –
				This example demonstrates configuring BIRT to report against MySQL Data.
			</li>
			<li>
				<a href="/birt/examples/reports/parallel">Parallel Reports</a> –
				This example demonstrates building BIRT parallel reports.
			</li>
			<li>
				<a href="/birt/examples/reports/parameters">Parameters</a> –
				This example demonstrates using dataset parameters.
			</li>
			<li>
				<a href="/birt/examples/reports/subreports">Sub Report</a> –
				This example demonstrates building and linking a subreport.</td>
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
