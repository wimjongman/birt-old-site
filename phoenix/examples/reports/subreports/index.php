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
	$currentPage			= "Sub Report";
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
			Sub reports are a very common type of reports. These are also referred to as Master Detail reports or Parent Child reports. BIRT is a flexible tool in that it provides the report developer with the flexibility to design many reports and integrate them in sub report fashion via a few clicks of the mouse. This example demonstrates the use of BIRT to create reports that are linked together. For example, a main customer listing report provides the customer ID as input to a sub report that displays details about each customer. In this example, a customer purchase report list the totals for all customer IDs. A second report list customer details. This example combines these two reports.
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/subreports/SubReports.html" target="_blank" class="top">Sub Report Flash Example</a> –

				This example demonstrates the use of BIRT to link from a main to a sub report.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="reports"></a>Reports</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/subreports/before1.html" target="_blank" class="top">Customer Purchase Main Report Before</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/subreports/reports/SubReportsExampleMainBefore.rptdesign" target="_blank">rptdesign</a>) –

				A simple customer total purchase report.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/subreports/before2.html" target="_blank" class="top">Customer Purchase Sub Report Before</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/subreports/reports/SubReportsExampleSubBefore.rptdesign" target="_blank">rptdesign</a>) –

				A customer detail report.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/subreports/after.html" target="_blank" class="top">Customer Purchase Report After</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/subreports/reports/SubReportsExampleMainAfter.rptdesign" target="_blank">rptdesign</a>) –

				This is the combined Main report and Sub report.
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
