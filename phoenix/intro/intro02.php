<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>BIRT in a J2EE Application</h2>
		<p>
			The BIRT Report Engine is packaged as a JAR file that you add to your J2EE
			application. The Report Engine is a series of POJOs (Plain Old Java Objects)
			that your JSP pages can call to integrate reporting into your application.
		</p>
		<p>
			BIRT also delivers an example web application that can be deployed to an 
			existing application server.
		</p>
		<p>
			<img src="../project/chart1.jpg" width="658" height="237">
		</p>
		<p>
			BIRT has four main integration points with your application:
		</p>
		<hr class="clearer" />
		<ul class="midlist">
			<li>
				Parameter UI -
				Most reports allow the user to specify some kind of input, called a
				<i>report parameter</i>. For example, a customer report might ask for the
				customer to display. Your parameter page can be static: custom designed
				for each report. Or, you can use a dynamic page powered by parameter
				meta-data so that a single page works for any report.  BIRT also supports
				the concept of dynamic and cascaded parameters.  This allows parameters to be
				tied to Data Sets defined within the report. 
			</li>
			<li>
				Running the Report -
				When the user submits the parameter form, your web application passes the
				parameters to the BIRT report engine which reads the report design file,
				reads the data, and produces the report output. BIRT uses the term
				<i>factory</i> when the engine runs a report.
			</li>
			<li>
				Data Access -
				Reports obtain data from your application as explained above. Java applications
				often provide data to the BIRT factory via Java objects.
			</li>
			<li>
				Viewing -
				BIRT uses a Java servlet, called the viewer, to enable the user to view the output
				of the report in paginated HTML.  The viewer also supports exporting data to CSV, parameter
				collection and table of contents functionality..
			</li>
		</ul>

		<h2>Example Viewer</h2>
		<p>
			The BIRT project provides a sample "viewer" to help you get get started. The
			sample viewer is also used to preview reports within Eclipse: BIRT includes an
			Apache Tomcat server invoked each time you preview your report. The viewer
			can also be used in any JSP-compliant J2EE server.
		</p>
		<p>
			BIRT Release 2.0 provides web output as a single HTML document, paginated HTML and PDF.  Additionally the
			viewer allows exporting the data to CSV and Table of Contents functionality..<p>
		</p>
		<p>
			More information about the sample viewer is available in the <a href="../deploy">
			integration</a> section.
		</p>
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
