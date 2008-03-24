<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Presentations";
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


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

	<h2>EclipseCon 2008 Presentations</h2>
		
			<p>
			<ul>
			<li><a href="http://www.birt-exchange.com/modules/wfdownloads/singlefile.php?cid=2&lid=339">Advanced BIRT Report Customization: Report and Chart Scripting</a><br>
			This Presentation provides an explanation and examples using both report and chart scripting.<br><br>	

			<li><a href="http://www.birt-exchange.com/modules/wfdownloads/singlefile.php?cid=2&lid=340">BIRT Chart APIs</a><br>
			This long talk discusses the capabilities of the Charting APIs.  Examples are provided<br><br>
 			</ul>
			
			</p>



		
		<h2>AIUC 2007 Presentation</h2>

		<p>
		<ul>
			<li><a href="aiuc2007/AIUCDeployingBIRTEngine.ppt">Deploying the BIRT Engine</a><br>
			This Presentation discusses deploying the BIRT Engine.
			
			Source Code for the examples can be found <a href="aiuc2007/srccode.zip">here</a>.  </li>
			</ul>
			<br>
		</p>				
		<h2>Eclipse Forum Europe 2007 Presentation</h2>

		<p>
		<ul>
			<li><a href="efe2007/BirtIntegration.ppt">Integrating BIRT</a><br>
			This Presentation discusses the BIRT Design Engine and Report Engine APIs.
			
			Source Code for the examples can be found <a href="efe2007/efe2007.zip">here</a>.  These examples were built with BIRT 2.2 M5</li>
			</ul>
			<br>
		</p>		
		
		
	<h2>EclipseCon 2007 Presentations</h2>
		
			<p>
			<ul>
			<li><a href="eclipsecon2007/EclipseCon 2007 Introduction to the BIRT Project 2007-03-04.pdf">BIRT: Introduction to the Eclipse Business Intelligence & Reporting Tools Project</a><br>
			This Presentation provides an introduction to the BIRT Project.<br><br>	

			<li><a href="eclipsecon2007/3644 - Building Reports with BIRT.zip">Building Reports with BIRT</a><br>
			This long tutorial progressively walks through BIRT Reporting features.	<a href="eclipsecon2007/3644-Exercises.zip">Exercises Available.</a><br><br>

			<li><a href="eclipsecon2007/EclipseCon 2007 - (3804) Charting With Eclipse BIRT.zip">Charting with Eclipse BIRT</a><br>
			This long talk discusses the capabilities of the Charting package.<br><br>


			<li><a href="eclipsecon2007/BIRTWebApplication.zip">How to Easily Integrate BIRT Reports into your Web Application</a><br>
			This presentation discusses deploying BIRT applications.	<a href="eclipsecon2007/demoSamples.zip">Samples Available.</a><br><br>


			<li><a href="eclipsecon2007/EclipseCon_2007_3798.zip">Integrating Java code with Eclipse BIRT</a><br>
			This presentation covers event handling within BIRT.	<a href="eclipsecon2007/ScriptAccessToAWS.zip">Samples Available.</a><br><br>


			<li><a href="eclipsecon2007/Report_Integration_Tutorial_EclipseCon_2007.zip">Report Integration - The BIRT API's</a><br>
			This presentation provides details on the Report and Design Engine APIs.	<a href="eclipsecon2007/SourceCode.zip">Samples Available.</a><br><br>

			<li><a href="eclipsecon2007/EclipseCon 2007 - Eclipse Chart Engine API and Integration - Short Tutorial.zip">Eclipse Chart Engine API and Integration</a><br>
			This short tutorial details the Charting Engine API.<a href="eclipsecon2007/tutorial projects.zip">Samples Available.</a><br><br>

			<li><a href="eclipsecon2007/Extending_BIRT_2007.zip">Extending BIRT</a><br>
			This presentation details implementing some of the BIRT extension points.	<a href="eclipsecon2007/extension_example_src.zip">Samples Available.</a><br><br>

			<li><a href="eclipsecon2007/ODAExtenders_outline.zip">Open Data Access Extension Framework</a><br>
			This presentation discusses developing an ODA Data Provider for Custom Data Sources.<br><br>

 			</ul>

			
			
			</p>
		
		<h2>Eclipse Forum Europe 2006 Presentation</h2>

		<p>
			<a href="efe2006/EFEBIRT.ppt">Introduction to BIRT</a><br>
			This Presentation was used as an Introduction to BIRT at Eclipse Forum Europe 2006.
			<ul>
			<li>Source Code for the examples can be found <a href="http://download.eclipse.org/birt/downloads/share/engine_api.zip">here</a>.  These examples were built with BIRT 2.0.1</li>
			</ul>
			<br>
		</p>
		
		<h2>EclipseCon 2006 Presentations</h2>

		<p>
			<a href="eclipsecon2006/BIRTInDepth.ppt">Birt In Depth</a><br>
			This Presentation was used an EclipseCon tutorial and covers the following topics in detail.
			<ul>
			<li>BIRT Introduction</li>
			<li>Scripting in BIRT</li>
			<li>Deploying BIRT</li>
			<li>BIRT APIs</li>
			<li>Charting</li>
			</ul>
			<br>
			
			 
			<a href="eclipsecon2006/BIRTTheEclipseReportingFramework.ppt">Birt The Eclipse Reporting Framework</a><br>
			This Presentation was used with an EclipseCon long talk, discussing BIRT and covers topics such as:
			<ul>
			<li>BIRT Introduction</li>
			<li>BIRT Architecture</li>
			<li>BIRT Features</li>
			</ul>
			<br>

			<a href="eclipsecon2006/LeveragingBIRT.ppt">Leveraging BIRT </a><br>
			This Presentation was used with an EclipseCon long talk, discussing BIRT and covers topics such as:
			<ul>
			<li>Scripting in BIRT</li>
			<li>Deploying BIRT</li>
			<li>BIRT APIs</li>
			</ul>
			<br>
			
		</p>




	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
