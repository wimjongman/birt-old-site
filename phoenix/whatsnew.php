<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	 # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "What's New";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "birt.inc";
	
	$linkToTop				= linkToTop();


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<div class="homeitem">
		<h3>What's New</h3>
			<ul>
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.0
					</a>
					is now available for download.  Read about the feature set at <a href="project/notable2.0.php">Notable Features - BIRT 2.0</a>
					<span class="dates">
						01/22/06
					</span>
				</li>
				
				<li>
					<a href="project/pmc.php">
						The BIRT PMC
					</a>
					is pleased to announce that Mike Fox, from IBM / Rational, has joined the Committee.
					<span class="dates">
						01/16/06
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.0 Release Candidate
					</a>
					is available for download.
					<span class="dates">
						01/04/06
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.0 Milestone 3
					</a>
					can now be downloaded.
					Read about the feature set at <a href="project/notable2.0M3.php">Notable Features - BIRT 2.0 M3</a>
					<span class="dates">
						12/07/05
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads/examples/misc/BIRT/BIRT_demo_Camv3.html">
						A new BIRT Demo
					</a>
					is available for viewing.
					<span class="dates">
						11/03/05
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.0 Milestone 2
					</a>
					is available for download.
					Read about the feature set at <a href="project/notable2.0M2.php">Notable Features - BIRT 2.0 M2</a>
					<span class="dates">
						10/31/05
					</span>
				</li>
				<li>
					<a href="examples">
						New Examples
					</a>
					The examples have been restructured and many new examples are available.
					<span class="dates">
						10/21/05
					</span>
				</li>
				<li>
					<a href="project/plan.php">
						New Project Plan Page
					</a>
					This page contains information on the project plan and the milestone dates for BIRT 2.0.
					In addition the page contains bugzilla queries for feature and bug fixes for each milestone.
					<span class="dates">
						10/21/05
					</span>
				</li>
			</ul>
		</div>
	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
