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
	<p>
	BIRT is an open source Eclipse-based reporting system that integrates
	with your Java/Java EE application to produce compelling reports.
	</p>
	<p>	
	<table>		
	<tr>
	<td>
	<a href="http://download.eclipse.org/birt/downloads"><img src="DB4-3-1.jpg"></a>
	</td>
	<td>
	Get started with the newest major release, BIRT 4.3
	</td>
	</tr>	
	<tr>
	<td>
	<a href="http://download.eclipse.org/birt/downloads/index3.7.2.php"><img src="DB3-7-2.jpg"></a>
	</td>
	<td>
	Get started with the latest release in the BIRT 3.7 series.
	</td>
	</tr>


	<tr>
	<td>
	<a href="birthelp.php"><img src="birthelpwide.jpg"></a>
	</td>
	<td>
	Need help with BIRT?
	</td>
	</tr>
	</table>
	</p>
	<p>
	BIRT provides core reporting features such as report layout,
	data access and scripting.  Please try BIRT and
	tell us what you think by filling bugs reports &amp; enhancement requests
	through Bugzilla as explained on the <a href="community.php">community</a>
	page.
	</p>
		<div class="homeitem">
			<h3>New to BIRT?</h3>
			<ul>
				<li>
					<a href="intro">
						Introduction
					</a>
					
					- Summary of BIRT, what it does, and how it fits into your Eclipse development environment and Java EE server environment.
					
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

		<div class="homeitem3col">
			<h3>In the News</h3>
			<ul>
				<li>
					<a href="http://birtworld.blogspot.com/2012/06/birt-42-released.html">
						BIRT 4.2 New Features Post
					</a>
					<span class="dates">
						06/27/12
					</span>
				</li>			
			
				<li>
					<a href="http://birtworld.blogspot.com/2012/03/birt-372-new-features.html">
						BIRT 3.7.2 New Features Post
					</a>
					<span class="dates">
						03/16/12
					</span>
				</li>			
				<li>
					<a href="http://www.informit.com/articles/article.aspx?p=1748986&WT.rss_f=Article&WT.rss_a=Little-Known%20But%20Useful%20BIRT%20Extension%20Points&WT.rss_ev=a">
						Little-Known But Useful BIRT Extension Points
					</a>
					<span class="dates">
						09/13/11
					</span>
				</li>				
			
				<li>
					<a href="http://www.actuate.com/birt-roadshow-india-contest/ ">
						BIRT Contest Announced 
					</a>
					<span class="dates">
						08/30/11
					</span>
				</li>			
				<li>
					<a href="http://birtworld.blogspot.com/2011/03/birt-262-enhancements.html">
						BIRT 2.6.2 Enhancements
					</a>
					<span class="dates">
						03/04/11
					</span>
				</li>
				<li>
					<a href="http://developer.actuate.com/community/forum/index.php/blog/6/entry-150-federal-birt-competition/">
						Federal BIRT Competition
					</a>
					<span class="dates">
						07/15/10
					</span>
				</li>
				<li>
					<a href="http://live.eclipse.org/node/910">
						New BIRT 2.6 Features in Helios
					</a>
					<span class="dates">
						07/08/10
					</span>
				</li>							
						
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
	<div id="rightcolumn">
  <br/>              
<a href="http://developer.actuate.com" >
<img border="0" alt="BIRT-Exchange Home" src="images/ActuateLogo2014.PNG"/>
</a>
<br/>
<br/>
<br/>
<a href="http://www.innoventsolutions.com/birt-overview.html" >
<img border="0" alt="Innovent Home" src="http://www.innoventsolutions.com/pics/logo_innovent.gif"/>
</a>
<br/>
<br/>
<br/>
<a href="http://www.ibm.com/" >
<img border="0" alt="IBM Home" src="images/IBMLogo.gif"/>
</a>
<br/>
<br/>
<br/>
<div class="sideitem">
                
                        <h6>What's New</h6>
                        <ul>
                                <li>
                                        <a href="http://download.eclipse.org/birt/downloads/">
                                                BIRT 4.3.1
                                        </a>
                                         has been officially released. 
                                        <span class="dates">
                                                09/27/13
                                        </span>
                                </li>
                                <li>
                                        <a href="http://download.eclipse.org/birt/downloads/">
                                                BIRT 4.3
                                        </a>
                                         has been officially released.  To discover what is available, see the
                                         <a href="project/notable4.3.php">Notable Features - BIRT 4.3</a>.
                                        <span class="dates">
                                                06/26/13
                                        </span>
                                </li>
                                <li>
                                        <a href="http://download.eclipse.org/birt/downloads/">
                                                BIRT 4.2.2
                                        </a>
                                         has been officially released. 
                                        <span class="dates">
                                                03/04/13
                                        </span>
                                </li>                           
                                <li>
                                        <a href="http://download.eclipse.org/birt/downloads/">
                                                BIRT 4.2.1
                                        </a>
                                         has been officially released. 
                                        <span class="dates">
                                                09/28/12
                                        </span>
                                </li>                         
                                <li>
                                        <a href="http://download.eclipse.org/birt/downloads/">
                                                BIRT 4.2
                                        </a>
                                         has been officially released.  To see what is now available take a look at the
                                         <a href="project/notable4.2.php">Notable Features - BIRT 4.2</a>.
                                        <span class="dates">
                                                06/27/12
                                        </span>                                        
                                        
                                        
                                </li>                         
                                <li>
                                        <a href="http://download.eclipse.org/birt/downloads/">
                                                BIRT 3.7.2
                                        </a>
                                         has been officially released. 
                                        <span class="dates">
                                                02/24/12
                                        </span>
                                </li> 
                                <li>
                                        <a href="http://download.eclipse.org/birt/downloads/">
                                                BIRT 3.7.1
                                        </a>
                                         has been officially released. 
                                        <span class="dates">
                                                09/24/11
                                        </span>
                                </li>                            
                        		<li>
										Want to help improve BIRT?  Take the 
										<a href="http://www.surveymonkey.com/s/5NV9XEC">
										BIRT Developer Survey
										</a>
										<span class="dates">
										07/26/11
										</span>
								</li>
                                <li>
                                        <a href="http://download.eclipse.org/birt/downloads/">
                                                BIRT 3.7
                                        </a>
                                         has been officially released.  To discover what is available, see the
                                         <a href="project/notable3.7.php">Notable Features - BIRT 3.7</a>.
                                        <span class="dates">
                                                06/22/11
                                        </span>
                                </li>                         
                                                                                    
                    
                                                                     
                                            

		</div>
	</div>
</div>
	
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
