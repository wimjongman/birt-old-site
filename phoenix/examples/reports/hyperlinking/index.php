<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Example Reports - Hyperlinking";
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
	$currentPage			= "Hyperlinking";
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
			This example is intended to illustrate Hyperlinking within BIRT.
		</p>
		<p>
			This example demonstrates the ability to embed hyperlinks in BIRT reports. You can embed links to drill through from one report to another report. You can also embed links to external web sites within a report.
		</p>


		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/hyperlinking/Hyperlinking.html" target="_blank" class="top">Hyperlinking Flash Example</a> –

				This example demonstrates hyperlinking within BIRT.
			</li>
		</ul>


		<h2><a name="reports"></a>Reports</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/hyperlinking/before.html" target="_blank" class="top">Sales By Office Before</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/hyperlinking/reports/HyperlinkingExampleBefore.rptdesign" target="_blank">rptdesign</a>) –

				Presents a list of Sales grouped by Office.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/highlighting/after.html" target="_blank" class="top">Products List After</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/highlighting/reports/HighlightingExampleAfter.rptdesign" target="_blank">rptdesign</a>)
				–
				Presents a list of the current stock of products. The after report
				includes changes made, using the Highlight feature for readability and
				low stock indication.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/hyperlinking/SalesOfAProduct.html" target="_blank" class="top">Sales for a given Product</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/hyperlinking/reports/SalesOfAProduct.rptdesign" target="_blank">rptdesign</a>) –

				Detail report used in the hyperlinking example.
			</li>
		</ul>

	</div>
	$reportLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
