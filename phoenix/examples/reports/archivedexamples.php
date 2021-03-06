<?php  							

Header("Location: /birt/demos/");																							require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PW8LFV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PW8LFV');</script>
<!-- End Google Tag Manager -->

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
		Examples for previous versions of BIRT.
		</p>
			
		
		<h1>BIRT 2.0 Examples</h1>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/examples/reports/charting">Charting</a> ?
				This example demonstrates building a report with several chart types.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/chartingsubreport">Chart as a Sub Report</a> ?
				This example demonstrates building a report that uses a stock chart as a sub report.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/datasetfilter">Dataset Filtering</a> ?
				This example demonstrates the dataset filtering feature.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/dynamictext">Dynamic Text</a> ?
				This example demonstrates using Dynamic Text within a report.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/grouping">Grouping</a> ?
				This example demonstrates building a grouped report.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/highlighting">Conditional Highlighting</a> ?
				This example demonstrates the Highlighting Feature.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/hyperlinking">Hyperlinking</a> ?
				This example demonstrates the ability to embed hyperlinks in BIRT reports.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/image">Image</a> ?
				This example demonstrates using images within a BIRT report.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/listing">Listing</a> ?
				This example demonstrates building a listing report.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/mapping">Mapping</a> ?
				This example demonstrates the Mapping Feature.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/mysqlex">MySQL Data Source</a> ?
				This example demonstrates configuring BIRT to report against MySQL Data.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/parallel">Parallel Reports</a> ?
				This example demonstrates building BIRT parallel reports.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/parameters">Parameters</a> ?
				This example demonstrates using dataset parameters.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports/subreports">Sub Report</a> ?
				This example demonstrates building and linking a subreport.</td>
			</li>
		</ul>

	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
