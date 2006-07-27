<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Project Management Committee (PMC) and Project Leads";
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
	$currentPage			= "Project Management Committee";
	$linkToTop				= linkToTop();
	$projectLinksSideItem  	= getProjectLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#pmc">PMC Membership</a></li>
				<li><a href="#leaders">Project Leaders</a></li>
			</ul>
		</blockquote>

		<h2><a name="pmc"></a>PMC Membership</h2>
		<ul class="midlist">
			<li>
				<b>Wenfeng Li, Actuate</b><br>
				Wenfeng led development of versions 6-8 of Actuate's enterprise reporting product suite, and prior to that, led the development of MicroStrategy's version 7 OLAP server. He is a co-inventor of three patents in business intelligence technology and is currently serving as the PMC Lead for the Eclipse BIRT Project. He is a member of the Eclipse Architecture Council.
			</li>
			<hr class="clearer" />
			<li>
				<b>Paul Clenahan, Actuate</b><br>
				Paul has over 15 years experience in the enterprise business intelligence industry working in a variety of Product Management roles with diverse customer applications. Paul is currently responsible for coordinating overall product direction and vision for Actuate. He is also a member of the Eclipse Planning and Requirements Councils.
			</li>
			<hr class="clearer" />
			<li>
				<b>Michael Fox, IBM / Rational</b><br>
				Mike has over 20 years experience with software product development and software project management. Mike has been responsible for developing reporting solutions for several companies. He is now the Technical Lead and Architect for the reporting components of IBM/Rational's Team Products, and involved with reporting work in other parts of IBM Software Group.
			</li>
			<hr class="clearer" />

			<li>
				<b>Larry Liang, Inetsoft</b><br>
				Larry has over 15 years experience in software development and advanced research. He currently serves as the chief architect at Inetsoft Technology, and is responsible for the development of its BI solutions.
			</li>
			<hr class="clearer" />

			<li>
				<b>Scott Rosenbaum, Innovent Solutions</b><br>
				Scott has been providing professional services consulting in the business intelligence space for more than seven years and has been involved in software development for more than 15.
			</li>
			<hr class="clearer" />
			<li>
				<b>Jason Weathersby, Actuate</b><br>
				Jason has 15 years experience in the software development and consulting fields, with in-depth experience in identifying and addressing customer's business intelligence needs. As part of the BIRT PMC, Jason is responsible for supporting and encouraging adoption of BIRT in the Open Source community.
			</li>
		</ul>


		<h2><a name="leaders"></a>Project Leaders</h2>
		<ul class="midlist">
			<li>
				<b>Wenbin He, Actuate</b><br>
    			Wenbin is the project lead for the BIRT Report Designer. Prior to working on BIRT, he led the development of Actuate's iStudio product, which is an Eclipse-based integration platform for Actuate's client products. His interests are in the areas of UI design, XML, web services and Java technology.
			</li>
			<hr class="clearer" />
			<li>
				<b>Wenbin He, Actuate</b><br>
    			Wenbin is the project lead for the BIRT Web-based Report Designer.
			</li>
			<hr class="clearer" />
			<li>
				<b>David Michonneau, Actuate</b><br>
    			David is the project lead for the BIRT Charting Engine. His experience in Eclipse technology includes the graphical architecture of the BIRT Report Editor and the design of the iStudio IDE framework. Prior to that, he led the development of Actuate's Active Portal for .NET, a highly customizable ASP.NET web application used to generate and view reports.
			</li>
			<hr class="clearer" />
			<li>
				<b>Stanley Wang, Actuate</b><br>
    			Stanley is project lead for the BIRT Report Engine. Prior to working on BIRT, he led development of Actuate's Information Object Designer, an Eclipse-based IDE for Enterprise Information Integration (EII). He also served as project lead for report rendering and printing at Actuate for more than 5 years.
			</li>
		</ul>

	</div>
	$projectLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
