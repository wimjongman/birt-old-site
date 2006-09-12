<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "How to Contribute to the BIRT Project";
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

<p>
Interested in joining the BIRT project as a contributor? Maybe you found a bug and made a patch to the source code to address this, or perhaps you would like to make significant contribution in a specific area.<br>
</p><p>
For patches to specific bugs, you should make sure that the bug is entered in bugzilla (with clear steps to reproduce the problem) and then attach your code changes to the same bugzilla entry with any explanation required in order to apply the fix to the source code. One of the existing project Committers will then review this and contact you as needed.<br>
</p><p>

If you contribute a number of quality fixes to the BIRT project, an existing project Committer may suggest you become a Committer yourself -- this would allow you to contribute directly to the source code for the project. In this case, the process outlined in the  <a href="http://www.eclipse.org/birt/phoenix/project/charter.php#roles">BIRT Project Charter</a> would be followed to elect you to Committer status.<br>
</p><p>

For more significant contributions to an existing area of the project, the BIRT Project Management Committee (PMC) has outlined a process that provides for review of the proposed contribution, as well as working towards becoming a Committer for that contribution. This is described below.<br>
</p><p>

In either case, the Eclipse Foundation needs to ensure that all committers to the code and/or the website and/or the bug system understand their role in safeguarding the intellectual property of Eclipse. The Foundation also needs to ensure that we have accurate records of the people who are acting as change agents on the projects. To understand this better, you should review the Eclipse  <a href="http://www.eclipse.org/legal/newcommitter.php">New Committer guidelines</a>.<br>
</p><p>

<h1>Process for Significant Contributions</h1> 

The BIRT PMC has outlined the process under which a new contributor would get started with a significant contribution in an existing area of the project. 

Note that if the proposed contribution is for a new sub-project with BIRT, then the process is different and is described in the <a href="http://www.eclipse.org/projects/dev_process/proposal-phase.php">Proposal Phase</a> of the <a href="http://www.eclipse.org/projects/dev_process/index.php">Eclipse Development Process</a>.

This process is intended to work in tandem with, and does not replace, the Eclipse Foundation <a href="http://www.eclipse.org/legal/newcommitter.php">New Committer guidelines</a>.
<ol>
<li>New contributor develops a proposal a submits this to the BIRT PMC 
<li>The PMC and existing BIRT contributors review the proposal 
<li>New contributor provides some level of commitment to the PMC and state how many committers they ultimately see being involved.

<li>Assuming these initial steps are successful, the PMC gives initial provisional approval for the new contribution. 
<li>The proposal is posted on the BIRT Wiki pages for community review, and a Bugzilla entry is created to track comments and feedback.

<li>New contributor develops a high level project plan for review 
<li>In parallel and as a good faith offer, we grant the new contributor a temporary "observer" status on the BIRT PMC (assuming it makes sense for them to ultimately be part of the PMC).

<li>In parallel, and in the spirit of meritocracy that is a key element of the Eclipse Community, the new contributor makes initial contributions by fixing BIRT bugs in Bugzilla and attaching the patches to the bugzilla entries (since they will not have committer status). These will then be reviewed by a BIRT Committer and, if acceptable, checked into the code base. This allows the new contributor to gain familiarity with the code base and work towards becoming part of the BIRT community.

<li>Assuming bug fixing goes well, an existing Committer will nominate at least one individual from the new contributor to be a committer on the BIRT project after 10+ fixes have been submitted. Additional committers could be nominated once the project is underway.

<li>If the individual is accepted and they are not already an Eclipse Committer, the individual must complete the appropriate <a href="http://www.eclipse.org/legal/newcommitter.php">Eclipse process for New Committers</a>.

<li>Once the new contributor attains Committer status, they contribute the new code (which they will hopefully have been developing in parallel according to their high level project plan).

<li>Once the new controibutor(s) are active on the project, the PMC would nominate and vote on the "Observer" becoming a full member of the PMC. 
</ol>
	</div>
	$projectLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
