<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Presentations";
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


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>
		<h2>Eclipse Forum Europe 2006 Presentation</h2>

		<p>
			<a href="efe2006/EFEBIRT.ppt">Introduction to BIRT</a><br>
			This Presentation was used as an Introduction to BIRT at Eclipse Forum Europe 2006.
			<ul>
			<li>Source Code for the examples can be found <a href="http://download.eclipse.org/birt/downloads/share/engine_api.zip">here</a>.  These examples were built with BIRT 2.0.1</li>
			</ul>
			<br>
		</p>
		
		<h2>EclipseCon2 2006 Presentations</h2>

		<p>
			<a href="eclipsecon2006/BIRTInDepth.ppt">Birt In Depth</a><br>
			This Presentation was used an EclipseCon tutorial and covers the following topics in detail.
			<ul>
			<li>BIRT Introduction</li>
			<li>Scripting in BIRT</li>
			<li>Deploying BIRT</li>
			<li>BIRT APIs</li>
			<li>Charting</li>
			</ul>
			<br>
			
			 
			<a href="eclipsecon2006/BIRTTheEclipseReportingFramework.ppt">Birt The Eclipse Reporting Framework</a><br>
			This Presentation was used with an EclipseCon long talk, discussing BIRT and covers topics such as:
			<ul>
			<li>BIRT Introduction</li>
			<li>BIRT Architecture</li>
			<li>BIRT Features</li>
			</ul>
			<br>

			<a href="eclipsecon2006/LeveragingBIRT.ppt">Leveraging BIRT </a><br>
			This Presentation was used with an EclipseCon long talk, discussing BIRT and covers topics such as:
			<ul>
			<li>Scripting in BIRT</li>
			<li>Deploying BIRT</li>
			<li>BIRT APIs</li>
			</ul>
			<br>
			
		</p>




	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
