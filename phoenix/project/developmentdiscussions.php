<?php  			

Header("Location: /birt/about/project-organization/development-discussions.php");																											require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Development Discussions in the BIRT Project Community";
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
	require "project.inc";
	$currentPage			= "";
	$linkToTop				= linkToTop();
	$projectLinksSideItem  	= getProjectLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#development">Development Discussions</a></li>
				<li><a href="#help">Discussions on Using BIRT</a></li>
				<li><a href="#track">Tracking Bugzilla Discussions</a></li>
			</ul>
		</blockquote>

Discussions around development activities in the BIRT project happen in a number of ways, depending on the item being discussed.

		<h2><a name="development"></a>Development Discussions</h2>
		<ul class="midlist">
			<li>
				<b>New Features and Projects</b> :
BIRT projects use a BPS (BIRT Project Specification) process for project level proposals.  
Preliminary feature specifications are added to BIRT's <a href="http://wiki.eclipse.org/index.php/BPS">Wiki pages</a> 
and the community can then add comments regarding the specification via the associated Bugzilla entries. 
BIRT's Project Management Committee will decide which BPS is scheduled for a release based on the project scope and, 
more importantly, if a committer signs up to complete the project within the release timeframe.  
For scheduled projects, a Bugzilla entry is assigned to a target milestone.  
The majority of design discussions from that point forward are done through Bugzilla.  
You can always find the list of projects for each release in BIRT's <a href="http://www.eclipse.org/birt/phoenix/project/plan.php">Project Development Plan</a> page.
			</li>
			<li>
				<b>Non-Committer Patch Submission Reviews</b> :
Non-Committers can assist in the development of the project by submitting patches. 
When a patch is submitted it should be attached to that Bugzilla entry. 
An existing Committer will then review the patch that is attached to the Bugzilla entry and the committer 
will put his/her comments in Bugzilla to indicate if any changes are needed on the code and if the patch has 
been accepted and checked into the project code base. Others can also put in comments in the Bugzilla entry.				
			</li>
			<li>
				<b>Community Feature Requests</b> :
The user community can submit feature/enhancement requests through Bugzilla at any time. 
Follow-up discussions will happen in the Bugzilla entry.  Small enhancements on existing features are 
often scheduled for a release by committers based on their interests and available time. 
Large enhancement or brand new functional areas will go through the planning process outlined above in 
New Features and Projects.			
			</li>			
			<li>
				<b>Schedule, Build and Coordination</b> :
Discussions about project structure, build process, release schedule and release coordination 
messages that are of concern to the general BIRT Committer typically happen in the birt-dev mailing list. 
This can often be the starting point for other project development related discussions that are not tracked 
via any of the items above. However, please note that the birt-dev mailing list is only for discussions related to 
development of the BIRT project. It should not be used for general questions on using BIRT.			
			</li>
						
		</ul>

		<h2><a name="help"></a>Discussions on Using BIRT</h2>
		<p>
Links to locations for discussion on how to install, integrate and use BIRT are available on the <a href="http://www.eclipse.org/birt/phoenix/birthelp.php">How to Get Help 
on Using BIRT</a> page.
		</p>

		<h2><a name="track"></a>Tracking Bugzilla Discussions</h2>
		<p>
A lot of discussion in the Eclipse community leverages Bugzilla. 
A common question is how to keep up to speed on what is happening for a Bugzilla entry you are interested in. 
Bugzilla has a feature that makes it very easy to stay informed without having to check the Bugzilla entry daily -- 
just add your email address to the CC: field for the Bugzilla entry and you will automatically be emailed any time 
the entry is changed.	
		</p>


	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
