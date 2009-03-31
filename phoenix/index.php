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
	<a href="http://download.eclipse.org/birt/downloads/index2.2.2.php"><img src="DB2-2-2.jpg"</a>
	</td>
	<td>
	Get started with the latest in the BIRT 2.2 series, the release used in many commercial products.
	</td>	    
    </tr>		
	<tr>
	<td>
	<a href="http://download.eclipse.org/birt/downloads"><img src="DB2-3-2.jpg"></a>
	</td>
	<td>
	Get started with the newest major release, BIRT 2.3.2.
	</td>
	</tr>
	</table>
	<table>
	<tr>
	<td>
	<a href="birthelp.php"><img src="birthelpwide.jpg"></a>
	</td>
	<td>
	Need help with BIRT?
	</td>
	</tr>
	</table>
	<p>
	BIRT provides core reporting features such as report layout,
	data access and scripting.  Please try BIRT and
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
					<a href="presos">
						BIRT Presentations
					</a>
					
					- Provides presentations previously given on BIRT topics.
					
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
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.5M6-200903181537">
						BIRT 2.5 M6 
					</a>
					is now available for download.
					<span class="dates">
						03/18/09
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.3.2 
					</a>
					is now available for download.
					<span class="dates">
						02/25/09
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.3.1 
					</a>
					is now available for download.
					<span class="dates">
						09/24/08
					</span>
				</li>
				<li>				
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.3
					</a>
					 has been officially released.  To discover what is available, see the 
					 <a href="project/notable2.3.php">Notable Features - BIRT 2.3</a>.   To view a webinar demonstrating the 2.3 features see the
					 <a href="http://live.eclipse.org/node/484">BIRT 2.3 Overview and New Features</a> webinar.  Examples demonstrated in the webinar are located 
					 <a href="http://www.birt-exchange.com/modules/wfdownloads/singlefile.php?cid=2&lid=425"> here.</a>
					<span class="dates">
						06/25/08
					</span>
				</li>				
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3RC4-200806121055">
						BIRT 2.3 RC4 
					</a>
					is now available for download.
					<span class="dates">
						06/12/08
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3RC3-200806041709">
						BIRT 2.3 RC3 
					</a>
					is now available for download.
					<span class="dates">
						06/04/08
					</span>
				</li>	
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3RC2-200805281334">
						BIRT 2.3 RC2 
					</a>
					is now available for download.
					<span class="dates">
						05/28/08
					</span>
				</li>				
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3RC1-200805221340">
						BIRT 2.3 RC1 
					</a>
					is now available for download.
					<span class="dates">
						05/22/08
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3RC0-200805071619">
						BIRT 2.3 RC0 
					</a>
					is now available for download.
					<span class="dates">
						05/12/08
					</span>
				</li>

				<li>
	 				<a href="project/notable2.3M6.php">Notable Features - BIRT 2.3 Milestone 6</a>
					<span class="dates">
						04/14/08
					</span>
				</li>					
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3M6-200804080800">
						BIRT 2.3 M6 
					</a>
					is now available for download.
					<span class="dates">
						04/08/08
					</span>
				</li>						
				<li>
	 				<a href="project/notable2.3M5.php">Notable Features - BIRT 2.3 Milestone 5</a>
					<span class="dates">
						03/05/08
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.2.2
					</a>
					is now available for download.
					<span class="dates">
						03/03/08
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3M5-200802191157">
						BIRT 2.3M5
					</a>
					is now available for download.  
					<span class="dates">
						02/19/08
					</span>
				</li>		
				<li>
					Want to help improve BIRT usability?  Take the 
					<a href="http://www.surveymonkey.com/s.aspx?sm=lyIMZ7S5OXtuS_2fW8y1f9aQ_3d_3d">
						BIRT Survey
					</a>
					<span class="dates">
						12/18/07
					</span>
				</li>			
						
				<li>
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.2.1
					</a>
					is now available for download.
					<span class="dates">
						10/03/07
					</span>
				</li>				
				<li>
					<a href="project/project_plan_R2_3_0.php">
						BIRT 2.3
					</a>
					Draft Project Plan is now available.
					<span class="dates">
						09/24/07
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/index2.1.3.php">
						BIRT 2.1.3
					</a>
					is now available for download.
					<span class="dates">
						06/23/07
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
					<a href="http://www.theserverside.com/tt/articles/article.tss?l=IntegratingBIRTwithPHP">
						Integrating BIRT with PHP
					</a>
					<span class="dates">
						03/03/09
					</span>
				</li>			
				<li>
					<a href="http://live.eclipse.org/">
						DTP SQL Query Builder Webinar Mar 5.
					</a>
					<span class="dates">
						02/26/09
					</span>
				</li>
			
				<li>
					<a href="http://live.eclipse.org/node/484">
						BIRT 2.3 Overview and New Features webinar.
					</a>
					<span class="dates">
						06/24/08
					</span>
				</li>
				<li>
					<a href="http://www.birt-exchange.com/modules/news-events/">
						BIRT Webinar Series.
					</a>
					<span class="dates">
						06/02/08
					</span>
				</li>
				<li>
					<a href="http://www.eclipsemag.net">
						BIRT 2.2 Dynamic Cross Tables  
					</a>
					<span class="dates">
						011/15/07
					</span>
				</li>			
				<li>
					<a href="http://www.eclipsemag.net">
						BIRT 2.2 Web Service ODA  
					</a>
					<span class="dates">
						09/19/07
					</span>
				</li>					
				<li>
					<a href="http://eclipse.sys-con.com/read/367994.htm">
						How to Develop an Application Using the Eclipse BIRT Design Engine API  
					</a>
					<span class="dates">
						04/30/07
					</span>
				</li>			
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
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-1835992-1";
urchinTracker();
</script>
	


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
