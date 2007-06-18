<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Business Intelligence and Reporting Tools (BIRT) Development Plans";
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

		<h2><a name="Overview"></a>Overview</h2>
		<p>
			Welcome to the Business Intelligence and Reporting Tools (BIRT) Project pages. This page contains links to Project Plans for the version(s) of BIRT currently in Development, as well as archives of previous release plans.
		</p>
		
		<h2><a name="latest">Latest Release Available </a></h2>
		<p>
		BIRT Release 2.1.2 (Feb 2007) is available for <a href=http://download.eclipse.org/birt/downloads/>download</a>. For information on features in this release, see the <a href="/birt/phoenix/project/notable2.1.php">New and Notable</a> page.
		</p>

		<h2>Releases Under Development/Planned</h2>




		<h3><i>BIRT Release 2.1.3</i></h3>
		Target Date: TBD
		
		<p>


				 
				<a
				href="
https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=BIRT&product=BIRT&target_milestone=2.1.3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0="
				>BIRT 2.1.3 Enhancements and Bug Fixes </a>

		<br>
		<a href="/birt/phoenix/project/project_plan_R2_1_3.php">BIRT 2.1.3 Project Development Plan</a>
		</p>	







		
		<h3><i>BIRT Release 2.2.0</i></h3>
		Target Date: Late June 2007
<p>



				<a
				href="
https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&classification=BIRT&product=BIRT&target_milestone=2.2.0&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_severity=blocker&bug_severity=critical&bug_severity=major&bug_severity=normal&bug_severity=minor&bug_severity=trivial&bug_severity=enhancement&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=
				"
				>BIRT 2.2.0 Enhancements and Bug Fixes </a>

	
<br>
		<a href="/birt/phoenix/project/project_plan_R2_2_0.php">BIRT 2.2.0 Project Development Plan</a>
		</p>	
		


		
		<h2><a name="archive"></a>Archive</h2>
		<p>
			This section contains links to information used in the development process for prior versions of BIRT.
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/project/archived.php">Archived Development Plans</a> – 1.x and 2.x Releases
			</li>
		</ul>
		
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
