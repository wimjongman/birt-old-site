<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Project Plan and Deliverables";
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
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#plan">Project Plan</a></li>
				<li><a href="#milestone_dates">Milestone Dates</a></li>
				<li><a href="#milestone_planning">Milestone Planning</a></li>
				<li><a href="#archive">Archive</a></li>
			</ul>
		</blockquote>

		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			Welcome to the Business Intelligence and Reporting Tools (BIRT) Project pages. This page contains the Project Plan for the version of BIRT that is currently in Development. Selecting the milestone within the Milestone Planning List will allow you to see what features and bug fixes will be available in future milestones.
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="plan"></a>Project Plan</h2>
		<ul class="midlist">
			<li>
				<a href="/birt/project/project_plan_R2_0_0.php">2.0 Project Plan</a> –
				The plans for the 2.0 release.
			</li>
			<li>
				<a href="http://www.eclipse.org/birt/wiki/index.php?n=BPS.BPS">BIRT Project Specifications</a> –
				The project specifications detail proposed functionality for future
				releases of BIRT. Within the project plan, each BPS that is referenced
				for this release will be hyperlinked.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="milestone_dates"></a>Milestone Dates</h2>
		<p>
			Listed below are the milestone dates for this release of BIRT.
		</p>
		<ul class="midlist">
			<li>
				Friday, September 16, 2005 – BIRT 2.0 M1
			</li>
			<li>
				Monday, October 24, 2005 – BIRT 2.0 M2
			</li>
			<li>
				Monday, November 21, 2005 – BIRT 2.0 M3
			</li>
			<li>
				Monday, December 30, 2005 – BIRT 2.0 Release Candidate
			</li>
			<li>
				Friday, January 20, 2006 – BIRT 2.0 Final
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="milestone_planning"></a>Milestone Planning</h2>
		<p>
			Below is a list of the milestone builds. Each item has a link for the bug fixes and new features which are scheduled for each milestone. The FINAL links include all features and bug fixes for the release in total.
		</p>
		<ul class="midlist">
			<li>
				BIRT 2.0 M1  – <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.0.0+M1&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;bug_severity=enhancement&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">Features</a> List, <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.0.0+M1&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;bug_severity=blocker&amp;bug_severity=critical&amp;bug_severity=major&amp;bug_severity=normal&amp;bug_severity=minor&amp;bug_severity=trivial&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">Bug</a> Fixes
			</li>
			<li>
				BIRT 2.0 M2  –
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.0.0+M2&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;bug_severity=enhancement&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">Features</a> List, <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.0.0+M2&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;bug_severity=blocker&amp;bug_severity=critical&amp;bug_severity=major&amp;bug_severity=normal&amp;bug_severity=minor&amp;bug_severity=trivial&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">Bug</a> Fixes  <a href="/birt/project/notable2.0M2.php"> Notable Features - BIRT 2.0 M2</a>
			</li>
			<li>
				BIRT 2.0 M3  –
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.0.0+M3&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;bug_severity=enhancement&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">Features</a> List, <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.0.0+M3&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;bug_severity=blocker&amp;bug_severity=critical&amp;bug_severity=major&amp;bug_severity=normal&amp;bug_severity=minor&amp;bug_severity=trivial&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">Bug</a> Fixes <a href="/birt/project/notable2.0M3.php"> Notable Features - BIRT 2.0 M3</a>
			</li>
			<li>
				BIRT 2.0 FINAL  –
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.0.0+Final&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;bug_severity=enhancement&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">Features</a> List, <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.0.0+Final&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;bug_severity=blocker&amp;bug_severity=critical&amp;bug_severity=major&amp;bug_severity=normal&amp;bug_severity=minor&amp;bug_severity=trivial&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">Bug</a> Fixes <a href="/birt/project/notable2.0.php"> Notable Features - BIRT 2.0</a>
			</li>
			<li>
				BIRT 2.0  –
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.0.0+Final&amp;target_milestone=2.0.0+M1&amp;target_milestone=2.0.0+M2&amp;target_milestone=2.0.0+M3&amp;target_milestone=2.0.0+M4&amp;target_milestone=2.0.0+M5&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;bug_severity=enhancement&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">All Feautres</a> Scheduled, <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.0.0+Final&amp;target_milestone=2.0.0+M1&amp;target_milestone=2.0.0+M2&amp;target_milestone=2.0.0+M3&amp;target_milestone=2.0.0+M4&amp;target_milestone=2.0.0+M5&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;bug_severity=blocker&amp;bug_severity=critical&amp;bug_severity=major&amp;bug_severity=normal&amp;bug_severity=minor&amp;bug_severity=trivial&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">All Bug</a> Fixes Scheduled
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="archive"></a>Archive</h2>
		<p>
			This section contains links to information used in the development process for prior versions of BIRT.
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/project/archived.php">Archived Development Plans</a> – 1.0 and 1.0.1 Releases
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
