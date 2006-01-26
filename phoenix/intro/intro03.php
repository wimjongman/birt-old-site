<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************

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
		<h1>$pageTitle</h1>
		<h2>BIRT Report Designer</h2>
		<p>
			Application development with BIRT starts with the report designer. This
			Eclipse-based plugin offers a variety of tools to build reports quickly.
		</p>
		<hr class="clearer" />
		<ul class="midlist">
			<li>
				Data Explorer -
				Organizes your data sources (connections) and data sets (queries). The data
				set editor allows you to test your data set to ensure the report receives the
				correct data.
			</li>
			<li>
				Layout View -
				WYSIWYG editor that provides drag &amp; drop
				creation of the presentation portion of your report. Includes a palette of
				standard report items.
			</li>
			<li>
				Property Editor -
				Presents the most commonly used properties in a convenient format that makes
				editing quick and easy. BIRT also integrates with the standard Eclipse property
				view to provide a detailed listing of all properties for an item.
			</li>
			<li>
				Report Preview -
				You can test your report at any time with real data. The preview is a window
				directly within Eclipse.
			</li>
			<li>
				Script Editor -
				Scripting adds business logic to reports during data access, during report
				generation, or during viewing. The code editor provides standard Eclipse features
				for editing your scripts: syntax coloring, auto-complete and more. BIRT expressions
				are really just simple scripts, and an expression builder makes it easy to build
				expressions.
			</li>
			<li>
				Outline -
				BIRT reports are organized as a tree structure with the overall report as the
				root, and separate categories for styles, report content, data sources, data sets,
				report parameters and more. The Outline view provides a compact overview of your
				entire report structure.
			</li>
			<li>
				Cheat Sheets -
				Learning a new tool is always a challenge, but Eclipse offers an innovative
				solution: cheat sheets. These are short bits of documentation that walk you
				through new tasks.
			</li>
			<li>
				Library Explorer -
				BIRT allows the reuse of report objects, such as tables, data sources and styles.
				Objects created for reuse are stored in a library file.  
				To browse the contents of report libraries BIRT supplies a Library Explorer view.
			</li>			
			
			
		</ul>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>BIRT Overview</h6>
			<ul>
				<li><a href="index.php">Overview</a></li>
				<li><a href="intro02.php">Integration</a></li>
				<li><a href="intro03.php">Designer</a></li>
				<li><a href="intro04.php">Developing</a></li>
				<li><a href="intro05.php">Extensibility</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
