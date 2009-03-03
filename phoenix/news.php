<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	 # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "News";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "birt.inc";
	
	$linkToTop				= linkToTop();


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

			<div class="homeitem">
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
		</div>
	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
