<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Tutorials";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../birt.inc";
	$linkToTop				= linkToTop();

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#tutorial">Basic Tutorial</a></li>
				<li><a href="#movie">Flash Movie of "My First Report"</a></li>
			</ul>
		</blockquote>

		<h2><a name="tutorial"></a>Basic Tutorial</h2>
		<p>
			The Basic Tutorial walks you though the steps to build
			a basic listing report and introduces the basic
			BIRT concepts. This is the place to start.  To begin the tutorial click <a href="/birt/phoenix/tutorial/basic">here</>.
		</p>
		<h2><a name="movie"></a>Flash Movie of "My First Report"</h2>
		<p>
			<a href-"http://download.eclipse.org/birt/downloads/examples/reports/2.1/tutorial/tutorial.html">This Flash movie</a> shows the creation of My First Report from the tutorial in  BIRT's online help.
		</p>
		$linkToTop
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
