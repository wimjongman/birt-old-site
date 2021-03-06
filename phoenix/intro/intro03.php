<?php  				

Header("Location: /birt/about/designer.php");																										require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	$pageTitle 		= "BIRT Designer";
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

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PW8LFV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PW8LFV');</script>
<!-- End Google Tag Manager -->

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>BIRT Report Designer</h2>
		<p>
			Application development with BIRT starts with the report designer. This
			Eclipse-based set of plug-ins offers a variety of tools to build reports quickly.
			Some of these are listed below.
		</p>
		<hr class="clearer" />
		<ul class="midlist">
			<li>
				Data Explorer -
				Organizes your data sources (connections) and data sets (queries). The data
				set editor allows you to test your data set to ensure the report receives the
				correct data.  Within this view multi dimensional cubes can be created using existing data sets.
				Cubes are currently used when building dynamic cross tables.
				This view also is used to design report parameters.
			</li>
			<li>
				Layout View -
				WYSIWYG editor that provides drag &amp; drop
				creation of the presentation portion of your report. 
			</li>
			<li>
				Palette -
				Contains the standard BIRT report elements such as labels, tables, and charts and is used
				in conjunction with the Layout View to design reports.
			</li>
			<li>
				Property Editor -
				Presents the most commonly used properties in a convenient format that makes
				editing quick and easy. BIRT also integrates with the standard Eclipse property
				view to provide a detailed listing of all properties for an item.
			</li>
			<li>
				Report Preview -
				You can test your report at any time with real data. The preview is a window
				directly within Eclipse.
			</li>
			<li>
				Script Editor -
				Scripting adds business logic to reports during data access, during report
				generation, or during viewing. The code editor provides standard Eclipse features
				for editing your scripts: syntax coloring, auto-complete and more.  An interesting new feature, for 
				BIRT 2.3 is the ability to debug scripts while the report is running. 
			</li>
			<li>
				Outline -
				BIRT reports are organized as a tree structure with the overall report as the
				root, and separate categories for styles, report content, data sources, data sets,
				report parameters and more. The Outline view provides a compact overview of your
				entire report structure.
			</li>
			<li>
				Cheat Sheets -
				Learning a new tool is always a challenge, but Eclipse offers an innovative
				solution: cheat sheets. These are short bits of documentation that walk you
				through new tasks.
			</li>
			<li>
				Resource Explorer -
				BIRT allows the reuse of report objects, such as tables, data sources and styles.
				Objects created for reuse are stored in a library file.  
				To browse the contents of report libraries BIRT supplies a Resource Explorer view.  This view
				list all libraries within the resource folder, in addition other shared content
				such as images and JavaScript files.
			</li>
			<li>
				Chart Builder -
				Adding Charts to BIRT designs is expedited with the Chart Builder.
				Chart creation is separated into three phases: Select Chart Type, Select Data, and Format Chart. 
				
			</li>				
			<li>
				Expression Builder -
				BIRT expressions are really just simple scripts that return a value. 
				Expressions are used for assigning data values to report elements, building image locations, hyperlinks, parameter default values
				and many other places.  Expressions are 
				constructed within BIRT using the Expression Builder.
			</li>							
			
		</ul>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>BIRT Overview</h6>
			<ul>
				<li><a href="index.php">Overview</a></li>
				<li><a href="intro02.php">Integration</a></li>
				<li><a href="intro03.php">Designer</a></li>
				<li><a href="intro04.php">Developing</a></li>
				<li><a href="intro05.php">Extensibility</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
