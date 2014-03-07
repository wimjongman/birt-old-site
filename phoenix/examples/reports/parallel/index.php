<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Example Reports - Parallel";
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
	$currentPage			= "Parallel Reports";
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
			The ability to create reports with parallel sections gives the report developer added flexibility and control within the report layout. This allows for better visualization and data analysis. This example demonstrates the use of BIRT to create reports with parallel sections. The example relies on the same data set for two tables that are located side by side. It uses table level filters to constrain the data rows that are to be displayed in each table.
		</p>


		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/ParallelReports/ParallelReport.html" target="_blank" class="top">Parallel Report Flash Example</a> –

				This example demonstrates building a BIRT parallel report.
			</li>
		</ul>

		<h2><a name="reports"></a>Reports</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/ParallelReports/after.html" target="_blank" class="top">Employee List After</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/ParallelReports/ParallelReportExampleAfter.rptdesign" target="_blank">rptdesign</a>) –

				Presents a list of employees by office code and grouped by manager.  Two office codes are used one for each parallel table.
			</li>
		</ul>

	</div>
	$reportLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
