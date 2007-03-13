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
	
		<table>
			<COLGROUP>
				<COL width="2%">
				<COL width="98%">
		<tr>
			<td></td>
			<td>
	
	<h1>BIRT Project</h1>
	<h2>Business Intelligence and Reporting Tools</h2>
	<p>
	BIRT is an open source Eclipse-based reporting system that integrates
	with your Java/J2EE application to produce compelling reports.
	</p>
	<table>
	<tr>
	<td>
	<a href="http://download.eclipse.org/birt/downloads"><img src="downloadbirt.jpg"></a>
	</td>
	<td>
	Get started now by going directly to the BIRT download page.
	</td>
	</tr>
	</table>
	<table>
	<tr>
	<td>
	<a href="birthelp.php"><img src="birthelp.jpg"></a>
	</td>
	<td>
	Need help with BIRT?
	</td>
	</tr>
	</table>
	<p>
	BIRT provides core reporting features such as report layout,
	data access and scripting.  The current released version is 2.1.2. Please try BIRT and
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
					<a href="http://wiki.eclipse.org/index.php/BIRT_Project">
						FAQ/Wiki
					</a>
					
					- Access to the BIRT FAQ and BIRT Project Specifications(BPS).
					
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
					<a href="db">
						Sample Database
					</a>
					
					- BIRT provides a sample database used by the tutorial and some of the example reports. This database lets you learn BIRT on a simple, known database before you experiment with your own, real-world data sources.
					
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
	 				<a href="project/notable2.2M5.php">Notable Features - BIRT 2.2 Milestone 5</a>
					<span class="dates">
						03/11/07
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.2M5-200702281100">
						BIRT 2.2M5
					</a>
					is now available for download.  
					<span class="dates">
						03/06/07
					</span>
				</li>
			
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1.2
					</a>
					is now available for download.
					<span class="dates">
						02/12/07
					</span>
				</li>			
				<li>
	 				<a href="http://www.eclipse.org/community/webinars2006.php">BIRT Webinar</a> - The BIRT PMC will be presenting a Webinar
	 				next week.  BIRT report development will be discussed with an emphasis on 2.2 Features.
					<span class="dates">
						02/01/07
					</span>
				</li>					
				<li>
	 				<a href="project/notable2.2M4.php">Notable Features - BIRT 2.2 Milestone 4</a>
					<span class="dates">
						01/19/07
					</span>
				</li>				
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=N-R1-2.2M4-200701100630">
						BIRT 2.2M4
					</a>
					is now available for download.  
					<span class="dates">
						01/16/07
					</span>
				</li>
				<li>
	 				<a href="project/notable2.2M2.php">Notable Features - BIRT 2.2 Milestone 2</a>
					<span class="dates">
						12/21/06
					</span>
				</li>			
				<li>
					<a href="http://www.awprofessional.com/bookstore/product.asp?isbn=0321442598&rl=1">
						<i>BIRT: A Field Guide to Reporting</i>
					</a>
					and 
					<a href="http://www.awprofessional.com/bookstore/product.asp?isbn=0321443853&rl=1">
						<i>Integrating and Extending BIRT</i> 
					</a>
					- Two books covering many aspects of BIRT are now available from Addison-Wesley. 
					<span class="dates">
						12/08/06
					</span>
				</li>				
				<li>
					<a href="http://www.surveymonkey.com/s.asp?u=597922894309">
						Eclipse BIRT Awareness Survey.
					</a>
					The BIRT team is interested in your feedback. 
					<span class="dates">
						11/22/06
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.2M2-200611171020">
						BIRT 2.2M2
					</a>
					is now available for download.  
					<span class="dates">
						11/20/06
					</span>
				</li>										
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.2M1
					</a>
					is now available for download.  Read about the feature set at <a href="project/notable2.2M1.php">Notable Features - BIRT 2.2 Milestone 1</a>
					<span class="dates">
						10/19/06
					</span>
				</li>					
				<li>
					<a href="project/plan.php">
						BIRT 2.2 Project Plan is available
					</a>
					This page contains information on the project plan and the milestone dates for BIRT 2.2.
					<span class="dates">
						10/03/06
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1.1
					</a>
					is now available for download.
					<span class="dates">
						09/29/06
					</span>
				</li>								
																					
				<li>
					<a href="whatsnew.php">
						More of What's New...
					</a>
				</li>
			</ul>
		</div>
		
		<br/>
		
		
		
		<div class="homeitem3col">
			<h3>In the News</h3>
			<ul>
				<li>
					<a href="http://www.itjungle.com/tlb/tlb021307-story03.html">
						Zend Upgrades Commercial Add-Ons for Its PHP Engine  
					</a>
					<span class="dates">
						02/13/07
					</span>
				</li>

				<li>
					<a href="http://opensource.sys-con.com/read/336872.htm">
						Developing an Application Using the Eclipse BIRT Report Engine API  
					</a>
					<span class="dates">
						02/12/07
					</span>
				</li>
						
				<li>
					<a href="http://jdj.sys-con.com/read/295339.htm">
						Developing an Eclipse BIRT Report Item Extension 
					</a>
					<span class="dates">
						11/20/06
					</span>
				</li>						
			
				<li>
					<a href="http://www.itweek.co.uk/itweek/news/2164968/open-source-server-monitor">
						Open-source server monitor boosts support 
					</a>
					<span class="dates">
						09/26/06
					</span>
				</li>						
				<li>
					<a href="http://www.onjava.com/pub/a/onjava/2006/07/26/deploying-birt.html">
						Deploying BIRT
					</a>
					<span class="dates">
						07/26/06
					</span>
				</li>			
				<li>
					<a href="http://www.bizintelligencepipeline.com/blog/archives/2006/06/bi_gets_a_boost.html">
						BI Gets A Boost From Open-Source Community
					</a>
					<span class="dates">
						06/29/06
					</span>
				</li>			
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

		
			</ul>
			<ul>
				<li>
					<a href="news.php">
						More News...
					</a>
				</li>
			</ul>

		</div>
	
		</td>
		</tr>
		</table>

	


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
