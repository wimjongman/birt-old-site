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
	$currentPage			= "Mapping";
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
			This example is intended to illustrate Mapping within BIRT.
		</p>
		<p>
			The report presents a list of customers with their respective credit limits. In the example a new column will be added to the report to display a credit ranking classification. The company may use this field for promotional offers.
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/mapping/MappingFeature.html" target="_blank" class="top">Mapping Flash Example</a> –

				This example demonstrates the BIRT Mapping Feature.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="reports"></a>Reports</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/mapping/before.html" target="_blank" class="top">Customer Credit Before</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/mapping/reports/MappingExampleBefore.rptdesign" target="_blank">rptdesign</a>) –

				Presents a list of the customers with their respective credit limits.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/mapping/after.html" target="_blank" class="top">Customer Credit List After</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/mapping/reports/MappingExampleAfter.rptdesign" target="_blank">rptdesign</a>)
				–
				Presents a list of the customers with their respective credit limits
				and classification. The after report includes changes made, using the
				Mapping feature for credit limit classification.
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
