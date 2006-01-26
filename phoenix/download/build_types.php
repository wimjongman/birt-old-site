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
	$pageTitle 		= "BIRT Build Types";
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
		<h2>Introduction</h2>
		<h3>Releases</h3>
		<p>
				Releases are builds that have been declared major releases by the development team - for example "R1.0". Releases are the right builds for people who want a stable, tested release, and don't need the latest greatest features and improvements. Release builds always have an "R" at the beginning of the name i.e. R1.0, R2.0 etc. Non-release builds are named according to the date of the build - for example 20041027 is the build from Oct 27, 2004.
		</p>
		<h3>Stable Builds</h3>
		<p>
				Stable builds are integration builds that have been found to be stable enough for most people to use. They are promoted from integration build to stable build by the architecture team after they have been used for a few days and deemed reasonably stable. The latest stable build is the right build for people who want to stay up to date with what is going on in the latest development stream, and don't mind putting up with a few problems in order to get the latest greatest features and bug fixes. The latest stable build is the one the development team likes people to be using, because of the valuable and timely feedback.
		</p>
		<h3>Integration Builds</h3>
		<p>
				Periodically, component teams version off their work in what they believe is a stable, consistent state, and they update the build configuration to indicate that the next integration build should take this version of the component. Integration builds are built from these stable component versions that have been specified by each component team as the best version available. Integration builds may be promoted to stable builds after a few days of testing. Integration builds are built whenever new stable component versions are released into the build.
		</p>
		<h3>Nightly Builds</h3>
				Nightly builds are produced over night from whatever has been released into the HEAD stream of the CVS repository. They are completely untested and will almost always have major problems. Many will not work at all. These drops are normally only useful to developers actually working on the BIRT project.

				Note: Nightly builds are produced only as requested, and not necessarily every night, by developers to build what was in CVS HEAD.
		</p>
		<h3>Maintenance Builds</h3>
		<p>
				Periodically builds for maintenance of the current release will be performed. They will not necessarily be stable builds. When the maintenace is finalized and released, it will be moved up to a Release build. If the build name starts with an "M" i.e. M20031110, then it has not been tested for stability. If it is a release candidate, i.e. 0.5.0.1RC1, then it is a stable maintenance build.
	    </p>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
