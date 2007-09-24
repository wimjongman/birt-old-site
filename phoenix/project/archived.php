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


		<h2><a name="resources"></a>2.0 Project Resources</h2>
		<p>
			Resources used in version 2.0 development.
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/project/project_plan_R2_1_3.php">2.1.3 Project Plan</a> –

				The project plan for the 2.1.3 release.
			</li>				
			<li>
				<a href="/birt/phoenix/project/notable2.2.php">2.2 New and Notable Features</a> –

				New and Notable Features within BIRT 2.2.
			</li>		
			<li>
				<a href="/birt/phoenix/project/project_plan_R2_2_0.php">2.2 Project Plan</a> –

				The project plan for the 2.2 release.
			</li>			
			<li>
				<a href="/birt/phoenix/project/project_plan_R2_1_2.php">2.1.2 Project Plan</a> –

				The project plan for the 2.1.2 release.
			</li>		
			<li>
				<a href="/birt/phoenix/project/project_plan_R2_1_1.php">2.1.1 Project Plan</a> –

				The project plan for the 2.1.1 release.
			</li>
			<li>
				<a href="/birt/phoenix/project/Project_plan_R2_1.php">2.1 Project Plan</a> –

				The plans for the 2.1 release.
			</li>
			<li>
				<a href="/birt/phoenix/project/notable2.1.php">2.1 New and Notable Features</a> –

				New and Notable Features within BIRT 2.1.
			</li>
			
			<li>
				<a href="releasereview/Eclipse BIRT Project 2_1 Release Review 2006-05-30.pdf">BIRT Project 2.1 Release Review presentation</a>
			</li>
			
			
			<li>
				<a href="/birt/phoenix/project/project_plan_R2_0_0.php">2.0 Project Plan</a> –

				The plans for the 2.0 release.
			</li>
			<li>
				<a href="/birt/phoenix/project/notable2.0.php">2.0 New and Notable Features</a> –

				New and Notable Features within BIRT 2.0.
			</li>
			<li>
				BIRT 2.0 FINAL  Bugzilla Queries–
				<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.0.0+Final&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;bug_severity=enhancement&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">Features</a> List and <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.0.0+Final&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;keywords_type=allwords&amp;keywords=&amp;bug_severity=blocker&amp;bug_severity=critical&amp;bug_severity=major&amp;bug_severity=normal&amp;bug_severity=minor&amp;bug_severity=trivial&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=">Bug</a> Fixes 
			</li>
			
		</ul>

		<h2><a name="resources"></a>1.0 and 1.0.1 Project Resources</h2>
		<p>
			Resources used in version 1.0 and 1.0.1 development.
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/project/notable1.0.1.php">1.0.1 New and Notable Features</a> –

				New and Notable Features within BIRT 1.0.1.
			</li>
			<li>
				<a href="/birt/phoenix/project/project_plan_R1_0_1.php">1.0.1 Project Plan</a> –

				The plans for the 1.0.1 release.
			</li>
			<li>
				<a href="/birt/phoenix/project/summary_plan.php">1.0 Project Plan Summary</a> –

				The broad themes for the next several releases.
			</li>
			<li>
				<a href="/birt/phoenix/project/R1_Requirements.pdf">Release 1.0 BIRT Requirements</a> –

				Requirements for capabilities that were included in BIRT Release 1.0.
			</li>
			<li>
				<a href="/birt/phoenix/project/Eclipse_BIRT_Project_1_0_Release_Review_2005-04-28.pdf">BIRT Project 1.0 Release Review presentation</a> –

				Slides used during the formal release review of the BIRT 1.0 project.
			</li>
		</ul>

	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
