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
	data access and scripting.  The current released version is 1.0.1. Please try BIRT and
	tell us what you think by filling bugs reports &amp; enhancement requests
	through Bugzilla as explained on the <a href="community.html">community</a>
	page.
		<div class="homeitem">
			<h3>What's New</h3>
			<ul>
				<li>
					<a href="http://www.eclipse.org/birt/index.php?page=project/pmc.html">
						The BIRT PMC is pleased to announce that Mike Fox, from IBM / Rational, has joined the Committee.
					</a>
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
						BIRT 2.0 Release Candidate
					</a>
					can now be downloaded.
					Read about the feature set at <a href="project/notable2.0M3.html">Notable Features - BIRT 2.0 M3</a>
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
					Read about the feature set at <a href="project/notable2.0M2.html">Notable Features - BIRT 2.0 M2</a>
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
						1/21/05
					</span>
				</li>
				<li>
					<a href="project/PlanAndDeliverables.html">
						New Project Plan Page
					</a>
					This page contains information on the project plan and the milestone dates for BIRT 2.0.
					In addition the page contains bugzilla queries for feature and bug fixes for each milestone.
					<span class="dates">
						10/21/05
					</span>
				</li>
				<li>
					<a href="project/project_plan_R2_0_0_Draft.html">
						BIRT Release 2.0 DRAFT Project Plan
					</a>
					Take a look at the projects that are being implemented for BIRT 2.0.  The 2.0 Milestone 1 release is available on the <a href="http://download.eclipse.org/birt/downloads/">downloads</a> page
					<span class="dates">
						07/30/05
					</span>
				</li>
				<li>
					<a href="whatsnew.html">
						More of What's New...
					</a>
					<span class="dates">
						07/02/05
					</span>
				</li>
			</ul>
		</div>
		<div class="homeitem">
			<h3>In the News</h3>
			<ul>
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
					<a href="http://tv.sys-con.com/read/109190.htm">
						BIRT at JavaOne
					</a>
					from
					<a href="http://www.sys-con.tv/" target="_blank">Sys-Con.tv</a>.
					<span class="dates">
						06/28/05
					</span>
				</li>
			</ul>
			<ul>
				<li>
					<a href="http://81.144.183.106/Articles/2005/06/08/210306/Eclipsereleasesopensourcebusinessintelligence.htm">
						Eclipse releases open source business intelligence
					</a>
					from
					<a href="http://81.144.183.106/Home/Default.aspx" target="_blank">ComputerWeekly.com</a>.
					<span class="dates">
						06/08/05
					</span>
				</li>
			</ul>
			<ul>
				<li>
					<a href="http://www.tdwi.org/Research/display.aspx?ID=7570">
						Eclipse Foundation Releases BI Reporting Tool for Java
					</a>
					from
					<a href="http://www.tdwi.org/index.aspx" target="_blank">tdwi Research</a>.
					<span class="dates">
						06/08/05
					</span>
				</li>
			</ul>
			<ul>
				<li>
					<a href="http://www.bizintelligencepipeline.com/showArticle.jhtml?articleId=164301123">
						BIRT Makes Open-Source Reporting Premiere
					</a>
					from
					<a href="http://www.bizintelligencepipeline.com" target="_blank">BizIntelligencePipeline</a>.
					<span class="dates">
						06/07/05
					</span>
				</li>
			</ul>
			<ul>
				<li>
					<a href="news.html">
						More News...
					</a>
				</li>
			</ul>
		</div>
		<div class="homeitem">
			<h3>EclipseWorld Presentations are now Available</h3>
			<ul>
				<li>
					<a href="presos/Eclipse BIRT Project IntroductionEclipseWorld.pdf">BIRT Introduction</a> - An Introduction to BIRT<br>
				</li>
				<li>
					<a href="presos/BIRTDemoEclipseWorld.pdf">BIRT Introduction - Demo</a> - Demonstration Script<br>
				</li>
				<li>
					<a href="presos/Eclipse BIRT Project Mastering BIRT.pdf">Mastering BIRT</a> - Exploring BIRT Extensions <br>
				</li>
				<li>
					<a href="presos/Eclipse BIRT Plugin Map.pdf">BIRT Plugin Map</a> - BIRT Projects and Extension Points<br>
				</li>
			</ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>New to BIRT?</h6>
			<ul>
				<li>
					<a href="intro">
						Introduction
					</a>
					<!--
					- Summary of BIRT, what it does, and how it fits into your Eclipse development environment and J2EE server environment.
					-->
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						Download
					</a>
					<!--
					- Download BIRT and find out what other software it requires.
					-->
				</li>
				<li>
					<a href="build/install.html">
						Install
					</a>
					<!--
					- A step by step guide to installing BIRT and associated software.
					-->
				</li>
				<li>
					<a href="tutorial">
						Tutorial
					</a>
					<!--
					- Try out BIRT for yourself by following this simple tutorial that walks you through building a report from scratch.
					-->
				</li>
				<li>
					<a href="db">
						Sample Database
					</a>
					<!--
					- BIRT provides a sample database used by the tutorial and some of the example reports. This database lets you learn BIRT on a simple, known database before you experiment with your own, real-world data sources.
					-->
				</li>
				<li>
					<a href="examples">
						Examples
					</a>
					<!--
					- Provides a variety of examples that show BIRT in action.
					-->
				</li>
				<li>
					<a href="deploy">
						Integration
					</a>
					<!--
					- You can integrate BIRT into your application using  the BIRT web app, design API, or engine API.
					-->
				</li>
				<li>
					<a href="wiki/index.php?n=FAQ.FAQ">
						FAQ
					</a>
					<!--
					- A summary of questions asked & answered in the newsgroup, delivered via the BIRT Wiki.
					-->
				</li>
				<li>
					<a href="community.html">
						Community
					</a>
					<!--
					- Other community resources, including the newsgroup, mailing lists, bugzilla, etc.
					-->
				</li>
				<li>
					<a href="ref">
						Reference
					</a>
					<!--
					- Reference information on BIRT's report design format: the Report Object Model (ROM).
					-->
				</li>
				<li>
					<a href="project">
						Project Organization
					</a>
					<!--
					- Information on the BIRT project, including charter, leadership, organization, etc.
					-->
				</li>
				<li>
					<a href="project/PlanAndDeliverables.html">
						Project Development Plan
					</a>
					<!--
					- Contains information on the project release schedule, project plan, and feature sets.
					-->
				</li>
				<li>
					<a href="build">
						Building BIRT
					</a>
					<!--
					- How to check out and build the BIRT source code.
					-->
				</li>
				<li>
					<a href="search.html">
						Search
					</a>
					<!--
					- Search the BIRT portion of the Eclipse web site with Google.
					-->
				</li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
