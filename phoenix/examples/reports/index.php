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
			This section of Examples focuses on the feature set within BIRT. Simple reports are used to illustrate a function within BIRT. Most examples will have a before and after report that can be downloaded. In addition, the example is illustrated in a Flash presentation.  The examples use popups to explain the process and provide no sound.
		</p>
		<h1>BIRT 2.1 Examples</h1>
		<ul class="midlist">
			<li>
				<a href="birt2.1/xmlds/index.php">XML Data Source</a> –
				This example demonstrates creating a report using the XML Datasource.
			</li>
			<li>
				<a href="birt2.1/lib/index.php">Libraries</a> –
				This example demonstrates creating and using BIRT libraries.
			</li>
			<li>
				<a href="birt2.1/combochart/index.php">Combination Chart</a> –
				This example demonstrates building a Combinatio Chart with Drill to details.
			</li>
			<li>
				<a href="birt2.1/cascade/index.php">Cascaded Parameter Report</a> –
				This example demonstrates building a BIRT Report that uses a cascaded parameter.
			</li>								
			<li>
				<a href="birt2.1/querymod/index.php">Query Modification</a> –
				An example of modifying the query using Property Binding or Script.
			</li>
			<li>
				<a href="birt2.1/drill/index.php">Drill to Details</a> –
				Example used to demonstrate linking a Master report to a Detail report.
			</li>
			<li>
				<a href="birt2.1/elements/index.php">Report Elements</a> –
				This example demonstrates using Label, Text, Dynamic Text, Data, and Image Report elements.
			</li>				
			<li>
				<a href="birt2.1/subreport/index.php">Sub Reports</a> –
				This example demonstrates building sub reports using nested tables.
			</li>				
			<li>
				<a href="birt2.1/mappingsorting/index.php">Mapping and Sorting</a> –
				This example demonstrates using the Mapping and Sorting features of BIRT.
			</li>															
			<li>
				<a href="birt2.1/parallel/index.php">Parallel Report</a> –
				This example demonstrates how to build a report with parallel sections.
			</li>	
			<li>
				<a href="birt2.1/highlighting/index.php">Highlighting and Conditional Formatting</a> –
				This example demonstrates how to add highlighting and conditional formatting to a BIRT report.
			</li>	
			<li>
				<a href="birt2.1/grouping/index.php">Grouping</a> –
				This example demonstrates building a grouped report in BIRT.
			</li>	
						
		</ul>		
		
		
		<h1>Archived Examples</h1>
		<ul><li>
		<a href="archivedexamples.php">Archived Examples</a> - Examples for previous versions of BIRT.<br><br>
		</li></ul>
	</div>
	
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
