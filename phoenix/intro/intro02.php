<?php  	

Header("Location: /birt/about/architecture.php");																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	$pageTitle 		= "BIRT Integration";
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
		<h2>BIRT Components</h2>
		<p>
		The BIRT project delivers many components.  These are listed below with a brief description.
		More information about specific integration points is available in the <a href="../deploy">integration</a> section.
		</p>
		<ul class="midlist">
			<li>
			BIRT Report Designer -  The BIRT Report Designer is an Eclipse perspective that is used to create BIRT report designs.  
			These designs are stored in an open	XML format.  The Designer can be downloaded as a Rich Client Platform (RCP) application, a set of plug-ins to
			enable the Designer perspective within an existing Eclipse build or as an all in one download that includes
			Eclipse.<br>
			</li>
			<br>
			<li>
			Design Engine - This engine is responsible for creating and modifying report designs.  The 
			Design Engine API (DE API) wraps the functionality of the design engine and is available for use
			within any Java/Java EE project.  The BIRT Report Designer uses this API internally to construct the XML designs.<br>
			</li>
			<br>
			<li>
			Report Engine - The Report Engine uses the report design files to generate and render reports.  Using the
			Report Engine API (RE API) the engine can be embedded within any Java/Java EE application.
			The BIRT Web Viewer uses this API to execute and display reports.<br>
			</li>
			<br>
			<li>
			Charting Engine - The Charting Engine is used to design and generate Charts either in standalone or embedded within BIRT reports.
			The Charting Engine API (CE API) allows Java/Java EE developers to add charting capabilities to their applications.  The Design and Report
			Engines make use of this API to deliver Charts.<br>
			</li>
			<br>
			<li>
			BIRT Viewer - The BIRT project provides a sample "viewer" that is used to preview reports within Eclipse. 
			BIRT includes an Apache Tomcat server invoked each time you preview your report. In addition to being packaged
			as an Eclipse Plug-in, the Viewer is also available as a standalone Java EE application, which
			can be used in any JSP-compliant Java EE server.  The Viewer Plug-in can also be embedded within a Rich Client Platform (RCP) application.
			BIRT provides web output as a single HTML document, paginated HTML, PDF, XLS, DOC, PPT, and Postscript.  Additionally the
			viewer allows exporting the data to CSV, printing, and Table of Contents functionality.<br>
			</li>
			<br>
		</ul>	
			<center><img src="images/birtarch.PNG" ></center>

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
