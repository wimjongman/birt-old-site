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
	$currentPage			= "Dynamic Text";
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
			The look and feel aspects of a report are essential for the end-user experience. BIRT's Text Element allows a broad range of formatting options such as Multi-line text, Text that contains multiple style formats and Text that combines static text with dynamic values retrieved at runtime. This example demonstrates the flexible formatting features of the BIRT Dynamic Text feature.
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="demonstration"></a>Demonstration</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/DynamicText/DynamicText.html" target="_blank" class="top">Dynamic Text Flash Example</a> �
				This example demonstrates flexible formatting using the Text element.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="reports"></a>Reports</h2>
		<ul class="midlist">
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/DynamicText/before.html" target="_blank" class="top">Customer List Before</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/DynamicText/reports/DynamicTextExampleBefore.rptdesign" target="_blank">rptdesign</a>) �

				Presesents a simple customer list report.
			</li>
			<li>
				<a href="http://download.eclipse.org/birt/downloads/examples/reports/DynamicText/after.html" target="_blank" class="top">Customer List After</a>
				(<a href="http://download.eclipse.org/birt/downloads/examples/reports/DynamicText/reports/DynamicTextExampleAfter.rptdesign" target="_blank">rptdesign</a>) �

				Presents a customer list with special formatting.
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
