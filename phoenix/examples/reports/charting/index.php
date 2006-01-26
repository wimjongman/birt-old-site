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

	require "../../../birt.inc";
	require "../reports.inc";
	$currentPage			= "Charting";
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
			Charting is an integral part of data summarization and analysis. BIRT provides an excellent package for charting, allowing diverse chart types such as bar charts, pie charts, line charts, scatter charts, and stock charts. Each chart type is also very customizable, offering a wide range of features to better represent data. This example demonstrates the use of BIRT's integrated charting package within the report designer. The example builds a two dimensional pie chart summarizing product revenue by product line.
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/Charting/Charting.html" target="_blank" class="top">Charting Flash Example</a> –
				This example is intended to illustrate a Charting example within BIRT.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="reports"></a>Reports</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/Charting/before.html" target="_blank" class="top">Product Revenue by Product Line Before</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/Charting/reports/ChartingExampleBefore.rptdesign" target="_blank">rptdesign</a>) –
				Presents product revenue by product line.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/Charting/after.html" target="_blank" class="top">Products Revenue by Product Line After</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/Charting/reports/ChartingExampleAfter.rptdesign" target="_blank">rptdesign</a>) –
				Presents product revenue by product line, with the addition of a pie chart, graphically summarizing the data.
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
