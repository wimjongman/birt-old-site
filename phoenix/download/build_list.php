<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Builds";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "download.inc";
	readLogs( );
	global $builds;
	$test = print_r($builds);

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#latest_downloads">Latest Downloads</a></li>
				<li><a href="#latest_releases">Latest Releases</a></li>
				<li><a href="#milestone_builds">Milestone Builds</a></li>
				<li><a href="#stable_builds">Stable Builds</a></li>
				<li><a href="#nightly_builds">Nightly Builds</a></li>
			</ul>
		</blockquote>

		Wrap<br>
		$test<br>
		End Wrap

		<h2><a name="latest_downloads"></a>Latest Downloads</h2>
		<p>
			This page lists the latest builds produced by
			the BIRT project. Build terminology is defined on the
			<a href="build_types.php">build types</a> page.
			If you are not sure
			what build you want, you probably want the
			<a href="index.php">latest release</a>.
			The daily
			<a href="drops/daily_build_report.html">build status report</a>
			shows the build status for the most recent build (of any sort), including compiliation and smoke test status.
		</p>
		<p>
			If you have
			problems downloading the drops, contact the
			<a href="mailto:webmaster@eclipse.org">webmaster</a>.
		</p>
		<p>
			<table cellpadding="3" cellspacing="0" width="100%">
			<tbody>
			<tr>
			 <td width="30%"><b>Build Type</b></td>
			 <td><b>Build Name</b></td>
			 <td><b>Build Date</b></td>
			</tr>
			<!--
			 <?php latestBuild( RELEASE_BUILD ); ?>
			 <?php latestBuild( MILESTONE_BUILD ); ?>
			 <?php latestBuild( STABLE_BUILD ); ?>
			 <?php latestBuild( NIGHTLY_BUILD ); ?>
			 -->
			</tbody>
			</table>
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>

		<hr class="clearer" />
		<h2><a name="latest_releases"></a>Latest Releases</h2>
		<p>
			Release builds are fully tested and are production ready.
		</p>
		<p>
			<table cellpadding="3" cellspacing="0" width="100%">
			<tbody><tr>
			<td width="30%"><b>Build Name</b></td>
			<td><b>Build Date</b></td>
			</tr>
			</table>
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />

		<h2><a name="milestone_builds"></a>Milestone Builds</h2>
		<p>
			Milestone builds have undergone testing and are ready for wider review. They are not production quality, but they allow you to see the latest features. Please try them and provide feedback.
		</p>
		<p>
			<table cellpadding="3" cellspacing="0" width="100%">
			<tbody><tr>
			<td width="30%"><b>Build Name</b></td>
			<td><b>Build Date</b></td>
			</tr>
			</table>
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />

		<h2><a name="stable_builds"></a>Stable Builds</h2>
		<p>
			Stable builds have undergone standard testing and are ready for wider testing. They are not production quality, and are primarily for use by the BIRT QA team.
		</p>
		<p>
			<table cellpadding="3" cellspacing="0" width="100%">
			<tbody><tr>
			<td width="30%"><b>Build Name</b></td>
			<td><b>Build Date</b></td>
			</tr>
			</table>
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
		<hr class="clearer" />

		<h2><a name="nightly_builds"></a>Nightly Builds</h2>
		<p>
			Nightly builds are created automatically each night for the use of the BIRT development team. Unless you're a BIRT developer, you probably don't want these builds.
		</p>
		<p>
			<table cellpadding="3" cellspacing="0" width="100%">
			<tbody><tr>
			<td width="30%"><b>Build Name</b></td>
			<td><b>Build Date</b></td>
			</tr>
			</table>
		</p>
		<p align="right"><small><a href="#top">go to top</a></small></p>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
