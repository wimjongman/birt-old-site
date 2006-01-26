<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Project Principles";
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
	$currentPage			= "Project Principles";
	$linkToTop				= linkToTop();
	$projectLinksSideItem  	= getProjectLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#principles">Project Principles</a></li>
			</ul>
		</blockquote>

		<h2><a name="principles"></a>Project Principles</h2>
		<p>
			Among the key principles on which this project has been initiated, and will be run, are the following:
		</p>
		<ul class="midlist">
			<li>
				<b>Extension of the Eclipse value proposition</b>
				<br>
				The Eclipse Project
				  has set a high standard for technical excellence, functional innovation
				  and overall extensibility within the Java IDE domain. We intend to apply
				  these same standards to the business intelligence and reporting domain.
			</li>
			<li>
				<b>Leverage Eclipse ecosystem</b>
				<br>
				A major goal of this project is to apply
				  the application development strengths of the Eclipse Project to the business
				  intelligence and reporting domain. The project will work closely with other
				  Eclipse project areas whenever possible to leverage the capabilities being
				  developed in those areas.
			</li>
			<li>
				<b>Vertical solutions</b>
				<br>
				Reporting and Business intelligence are a facet
				  of almost all applications that are developed today. A core principle of
				  this project is to provide a general purpose reporting capability that can
				  easily and seamlessly be integrated as a component of vertical applications
				  and solutions.
			</li>
			<li>
				<b>Extensibility</b>
				<br>
				To meet the varied requirements for reporting and
				  Business Intelligence, provide extension points that enable developers to
				  adapt the technology to meet application specific needs.
			</li>
			<li>
				<b>Vendor neutrality</b>
				<br>
				We aim to encourage Eclipse participation and
				  drive Eclipse market acceptance by providing vendor-neutral capabilities
				  and to encourage participation for complementary capabilities through additional
				  projects.
			</li>
			<li>
				<b>Open, standards-based development</b>
				<br>
				Where market adopted standards exist
				  that meet the design goals, our aim is to leverage and adhere to them. Where
				  market adopted standards do not exist, we will develop and publish any new
				  capabilities in the Eclipse open forum.
			</li>
			<li>
				<b>Incremental delivery</b>
				<br>
				In order to meet the pent-up demand for reporting
				  within the Java application market, a goal is to delivery functionality
				  to market as rapidly as possible via an incremental delivery model.
			</li>
			<li>
				<b>Agile development</b>
				<br>
				Our aim is to incorporate into our planning process
				  the innovations that arise once a project is underway, and the feedback
				  from our user community on our achievements to date. We think an agile development
				  and planning process, in which progress is incremental, near-term deliverables
				  are focused, and long-term planning is flexible, will be the best way to
				  achieve this.
			</li>
			<li>
				<b>Inclusiveness &amp; diversity</b>
				<br>
				We aim to assimilate the best ideas
				  from the largest number of participants representing the needs of the widest
				  range of end-users. So we will encourage organizations across a broad range
				  of technical, market and geographical domains to participate in this project.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />
	</div>
	$projectLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
