<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Examples";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	#$Nav->addNavSeparator("My Page Links", 	"downloads.php");
	#$Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	#$Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../birt.inc";
	$linkToTop				= linkToTop();


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#demo">BIRT Demo</a></li>
				<li><a href="#examples">Examples</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			Weclome to the examples section of the BIRT site.
			<br>
			Here you will find examples that illustrate some of the features of
			BIRT. This section will be changed frequently to add new examples. The
			example types are classified below.
			Feel free to make comments within the news group. Let us know what
			examples you would like to see.
		</p>


		<h2><a name="demo">BIRT Demo</a></h2>
		<p>
			<a href="http://download.eclipse.org/birt/downloads/examples/misc/BIRT2.1Demo/EclipseDemo.html" target="_blank" class="top">BIRT Demo</a>
			–
			This demonstration is a Flash presentation of BIRT that showcases some
			of its powerful features including summary and line graphs, JavaScript
			for dynamic images, style usage, highlighting, grouping and detail
			drill down..
		</p>


		<h2><a name="examples"></a>Examples</h2>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/examples/solution">Solution Reports</a> –
				This section contains several example solution reports, such as Business Forms.
			</li>
			<li>
				<a href="/birt/phoenix/examples/reports">Reporting Feature Examples</a> –
				This section demonstrates features and functions of the BIRT Report Designer.
			</li>
			<li>
				<a href="/birt/phoenix/examples/scripting">Scripting</a> –
				This section contains examples of scripting within the BIRT Designer
			</li>
			<li>
				<a href="/birt/phoenix/examples/integrating">Integrating BIRT</a> –
				This section demonstrates several examples of deploying and using the APIs of BIRT
			</li>
			<li>
				<a href="/birt/phoenix/examples/extending">Extending BIRT</a> –
				This section covers extending the feature set of BIRT, such as Open Data Access (ODA), Report Items, etc
			</li>
		</ul>

	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
