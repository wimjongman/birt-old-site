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
	data access and scripting.  The current released version is 2.0.1. Please try BIRT and
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
						BIRT 2.1 RC5
					</a>
					is available for download.
					<span class="dates">
						06/21/06
					</span>
				</li>					
				<li>
					<a href="http://www.eclipse.org/downloads/download.php?file=/datatools/downloads/callisto/webinar_060506/webinar_demo.zip">
						Source code 
					</a>
					 for the Callisto webinar covering DTP/BIRT/RCP integration has been uploaded.
					 The Webinar recording is available 
					 <a href="http://adobedev.breezecentral.com/p89156273"/>here</a>
					<span class="dates">
						06/16/06
					</span>
				</li>			
				<li>
					<a href="project/releasereview/Eclipse BIRT Project 2_1 Release Review 2006-05-30.pdf">
						BIRT 2.1 Release Review Presentation
					</a>
					 has been uploaded.
					<span class="dates">
						06/02/06
					</span>
				</li>				
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1 RC4
					</a>
					is available for download.
					<span class="dates">
						06/02/06
					</span>
				</li>				
				<li>
					<a href="http://www.eclipse.org/callisto/webinars.php">
						Callisto Webinar on June 5 showcasing BIRT/DTP RCP Integration.
					</a>
					<span class="dates">
						05/30/06
					</span>
				</li>					
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1 RC3
					</a>
					is available for download.
					<span class="dates">
						05/22/06
					</span>
				</li>				
				<li>
					<a href="presos/index.php">
						Eclipse Forum Europe Presentation 
					</a>
					is available for download.
					<span class="dates">
						05/19/06
					</span>
				</li>						
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1 RC2
					</a>
					is now available for download.</a>
					<span class="dates">
						05/02/06
					</span>
				</li>		
				<li>
					<a href="http://www.eclipse.org/birt/phoenix/contest">
						The BIRT Contest 
					</a>
					deadline has been extended due to technical problems with the submission process.  The deadline for entries is Friday, May 26, 2006. 
					<span class="dates">
						05/01/06
					</span>
				</li>				
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1 RC0
					</a>
					is now available for download.  BIRT SDK can now be downloaded as well.</a>
					<span class="dates">
						04/17/06
					</span>
				</li>			
				<li>
					<a href="presos/index.php">
						BIRT EclipseCon 2006 Presentations 
					</a>
					are now available for download.
					<span class="dates">
						04/12/06
					</span>
				</li>						
				<li>
					<a href="project/Project_plan_R2_1.php">
						BIRT 2.1 Project Plan has been revised
					</a>
					This page contains information on the project plan and the milestone dates for BIRT 2.1.
					<span class="dates">
						03/31/06
					</span>
				</li>						
				<li>
					<a href="http://www.eclipse.org/birt/phoenix/contest">
						The BIRT Contest 
					</a>
					is now open for submissions.  The deadline for entries is Friday, April 28, 2006. 
					<span class="dates">
						03/14/06
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
					<a href="http://www.scapatech.com/news_events/press_releases/2006-02-05.html">
						Scapa Adds BIRT Reporting to Test Platform
					</a>
					<span class="dates">
						05/04/06
					</span>
				</li>		
				<li>
					<a href="http://java.sys-con.com/read/204706.htm">
						Java Feature — Business Intelligence and Reporting with BIRT
					</a>
					from
					<a href="http://java.sys-con.com/ target="_blank">Java Developer's Journal</a>.
					<span class="dates">
						04/17/06
					</span>
				</li>						
				<li>
					<a href="http://www.informationweek.com/windows/showArticle.jhtml?articleID=183701657&subSection=Open+Source">
						Eclipse Expands, Urges Shift Away From Windows User Interface
					</a>
					from
					<a href="http://www.informationweek.com" target="_blank">InformationWeek</a>.
					<span class="dates">
						03/23/06
					</span>
				</li>				
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
