<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

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
	$pageTitle 		= "Eclipse BIRT Home";
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
	<h1>BIRT Project</h1>
	<h2>Business Intelligence and Reporting Tools</h2>
	BIRT is an open source, Eclipse-based reporting system that integrates
	with your  application to produce compelling reports for both web
	and PDF.
	<p>
	BIRT provides core reporting features such as report layout,
	data access and scripting.  The current released version is 2.0. Please try BIRT and
	tell us what you think by filling bugs reports &amp; enhancement requests
	through Bugzilla as explained on the <a href="community.php">community</a>
	page.
		<div class="homeitem">
			<h3>New to BIRT?</h3>
			<ul>
				<li>
					<a href="intro">
						Introduction
					</a>
					
					- Summary of BIRT, what it does, and how it fits into your Eclipse development environment and J2EE server environment.
					
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						Download
					</a>
					
					- Download BIRT and find out what other software it requires.
					
				</li>
				<li>
					<a href="build">
						Install
					</a>
					
					- A step by step guide to installing BIRT and associated software.
					
				</li>
				<li>
					<a href="tutorial">
						Tutorial
					</a>
					
					- Try out BIRT for yourself by following this simple tutorial that walks you through building a report from scratch.
					
				</li>
				<li>
					<a href="db">
						Sample Database
					</a>
					
					- BIRT provides a sample database used by the tutorial and some of the example reports. This database lets you learn BIRT on a simple, known database before you experiment with your own, real-world data sources.
					
				</li>
				<li>
					<a href="examples">
						Examples
					</a>
					
					- Provides a variety of examples that show BIRT in action.
					
				</li>
				<li>
					<a href="deploy">
						Integration
					</a>
					
					- You can integrate BIRT into your application using  the BIRT web app, design API, or engine API.
					
				</li>
				<li>
					<a href="community.php">
						Community
					</a>
					
					- Other community resources, including the newsgroup, mailing lists, bugzilla, etc.
					
				</li>
				<li>
					<a href="ref">
						Reference
					</a>
					
					- Reference information on BIRT's report design format: the Report Object Model (ROM).
					
				</li>
				<li>
					<a href="project">
						Project Organization
					</a>
					<
					- Information on the BIRT project, including charter, leadership, organization, etc.
					
				</li>
				<li>
					<a href="project/plan.php">
						Project Development Plan
					</a>
					
					- Contains information on the project release schedule, project plan, and feature sets.
					-->
				</li>
				<li>
					<a href="build/buildInstructions.php">
						Building BIRT
					</a>
					
					- How to check out and build the BIRT source code.
					
				</li>
			</ul>
		</div>

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
				<li>
					<a href="whatsnew.php">
						More of What's New...
					</a>
				</li>
			</ul>
		</div>
		
		
		
		
		
		<div class="homeitem">
			<h3>In the News</h3>
			<ul>
				<li>
					<a href="http://www.computerworld.com/softwaretopics/software/story/0,10801,107949,00.html?SKC=software-107949">
						Eclipse unveils updated BI tools
					</a>
					from
					<a href="http://www.computerworld.com" target="_blank">Computerworld</a>.
					<span class="dates">
						01/23/06
					</span>
				</li>
				<li>
					<a href="http://www.eweek.com/article2/0,1895,1914364,00.asp" target="_blank">
						Eclipse Advances Open-Source BI Platform
					</a>
					from
					<a href="http://www.eweek.com" target="_blank">eWeek</a>.
					<span class="dates">
						01/23/06
					</span>
				</li>
				<li>
					<a href="http://www.infoworld.com/article/06/01/23/74664_HNbirt_1.html" target="_blank">
						Eclipse focuses on reports in new business intelligence tool
					</a>
					from
					<a href="http://www.infoworld.com" target="_blank">InfoWorld</a>.
					<span class="dates">
						01/23/06
					</span>
				</li>
				<li>
					<a href="http://www.eclipsezone.com/articles/birt/" target="_blank">
						Business Intelligence and Reporting Tools Project
					</a>
					Written by John Ward
					<a href="http://www.eclipsezone.com" target="_blank">published by EclipseZone</a>.
					<span class="dates">
						01/18/06
					</span>
				</li>

				<li>
					<a href="http://www.theserverside.com/articles/article.tss?l=EclipseBRT" target="_blank">
						Using Eclipse BIRT Report Libraries and Templates
					</a>
					Written by Mark Gamble
					<a href="http://www.theserverside.com/" target="_blank">published by TheServerSide</a>.
					<span class="dates">
						01/04/06
					</span>
				</li>
		
				<li>
					<a href="http://dev.mysql.com/tech-resources/articles/using-birt/">
						Using BIRT To Report On Bugzilla in MySQL
					</a>
					from
					<a href="http://www.mysql.com/" target="_blank">MySQL</a>.
					<span class="dates">
						11/16/05
					</span>
				</li>
			</ul>
			<ul>
				<li>
					<a href="http://www.informationweek.com/story/showArticle.jhtml?articleID=171200352&pgno=1">
						Open Source Goes Corporate
					</a>
					from
					<a href="http://www.informationweek.com/" target="_blank">InformationWeek</a>.
					<span class="dates">
						07/28/05
					</span>
				</li>
			</ul>
			<ul>
				<li>
					<a href="news.php">
						More News...
					</a>
				</li>
			</ul>

		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
