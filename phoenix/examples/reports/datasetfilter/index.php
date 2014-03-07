<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Example Reports - Data Set Filter";
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
	$currentPage			= "Dataset Filtering";
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
				<li><a href="#demonstration">Demonstration</a></li>
				<li><a href="#reports">Reports</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			This example is intended to illustrate Data Set filtering within BIRT. The ability to apply filters on data sets is a powerful feature of BIRT. When integrating data into a report from multiple data sources that may not all provide inherent filtering, the data set filter is a powerful way to consistently constrain data to provide the relevant content on which to build reports.
		</p>


		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/DatasetFilter/DatasetFilter.html" target="_blank" class="top">Data Set Filter Flash Example</a> –
				This example is intended to illustrate Data Set filtering within BIRT.
			</li>
		</ul>


		<h2><a name="reports"></a>Reports</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/DatasetFilter/after.html" target="_blank" class="top">Stock Prices</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/DatasetFilter/reports/DatasetFilterExampleAfter.rptdesign" target="_blank">rptdesign</a>) –

				Presents a stock price report limited by price range using Filters.  The report uses a csv file as a data source.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/DatasetFilter/table.csv" target="_blank" class="top">Stock Prices CSV file</a> –
				Stock prices in CSV format.  The CSV file is used within the example.
			</li>
		</ul>

	</div>
	$reportLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
