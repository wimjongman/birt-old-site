<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Overview";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h2><a name="introduction"></a>BIRT Summary</h2>
		<p>
			BIRT is an Eclipse-based open source reporting system for web applications,
			especially those based on Java and Java EE. BIRT has two main components: a report
			designer based on Eclipse, and a runtime component that you can add to your
			app server.
			BIRT also offers a charting engine that lets you add charts to your own application.
		</p>
		<p></p>
		<p>
			The BIRT Project currently supports two releases 2.3.2 (Included in many comercial applications) and 2.5 (Latest). We encourage you to download
			BIRT, try it, and give us your feedback though the <a href="http://www.eclipse.org/birt/phoenix/community.php">newsgroups and Bugzilla</a>.
		</p>
		<p></p>
		<p>
			With BIRT, you can add a rich variety of reports to your application.
		</p>

		<hr class="clearer" />
		<ul class="midlist">
			<li>
				Lists -
				The simplest reports are lists of data. As the lists get longer, you can add
				grouping to organize related data together (orders grouped by customer, products
				grouped by supplier). If your data is numeric, you can easily add totals, averages
				and other summaries.
			</li>
			<li>
				Charts -
				Numeric data is much easier to understand when presented as a chart. BIRT
				provides pie charts, line &amp; bar charts and many more.  BIRT charts can be rendered in
				SVG and support events to allow user interaction.
			</li>
			<li>
				Crosstabs -
				Crosstabs (also called a cross-tabulation or matrix) shows data in two
				dimensions: sales per quarter or hits per web page. 
			</li>
			<li>
				Letters &amp; Documents -
				Notices, form letters, and other textual documents are easy to create with BIRT.
				Documents can include text, formatting, lists, charts and more.
			</li>
			<li>
				Compound Reports -
				Many reports need to combine the above into a single document. For example, a
				customer statement may list the information for the customer, provide text about
				current promotions, and provide side-by-side lists of payments and charges. A
				financial report may include disclaimers, charts, tables all with extensive formatting
				that matches corporate color schemes.
			</li>
		</ul>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
