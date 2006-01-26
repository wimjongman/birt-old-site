<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Project Archived Information";
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

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#resources">Project Resources</a></li>
			</ul>
		</blockquote>

		<h2><a name="resources"></a>Project Resources</h2>
		<p>
			Resources used in version 1.0 and 1.0.1 development.
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/project/notable1.0.1.php">1.0.1 New and Notable Features</a> –

				New and Notable Features within BIRT 1.0.1.
			</li>
			<li>
				<a href="/birt/project/project_plan_R1_0_1.php">1.0.1 Project Plan</a> –

				The plans for the 1.0.1 release.
			</li>
			<li>
				<a href="/birt/project/summary_plan.php">1.0 Project Plan Summary</a> –

				The broad themes for the next several releases.
			</li>
			<li>
				<a href="/birt/project/R1_Requirements.pdf">Release 1.0 BIRT Requirements</a> –

				Requirements for capabilities that were included in BIRT Release 1.0.
			</li>
			<li>
				<a href="/birt/project/Eclipse_BIRT_Project_1_0_Release_Review_2005-04-28.pdf">BIRT Project 1.0 Release Review presentation</a> –

				Slides used during the formal release review of the BIRT 1.0 project.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
