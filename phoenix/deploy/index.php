<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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

	require "../birt.inc";
	require "deploy.inc";
	$currentPage			= "Charting";
	$linkToTop				= linkToTop();
	$deployLinksSideItem  	= getDeployLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#integration">Integration Points</a></li>
				<li><a href="#viewer">Example Report Viewer (J2EE App/Plugin)</a></li>
				<li><a href="#designAPI">Design Engine API</a></li>
				<li><a href="#reportAPI">Report Engine API</a></li>
				<li><a href="#chartAPI">Chart Engine API</a></li>
				<li><a href="#scripting">BIRT Scripting</a></li>
				<li><a href="#extending">Extending BIRT</a></li>
			</ul>
		</blockquote>

		<h2><a name="integration"></a>Integration Points</h2>
		<p>
			BIRT supplies several APIs and an Example J2EE application for generating and viewing reports.  The major APIs
			are the Design Engine API(DE API), Report Engine API(RE API) and the Chart Engine API (CE API).  These pages describe the various APIs and illustrate examples on their usage.  In addition
			to the APIs, BIRT supports scripting using Rhino within report designs.  A primer is available to get started scripting.
		</p>



		<h2><a name="viewer"></a>Example Report Viewer (J2EE App/Plugin)</h2>
		<p>
			The BIRT Viewer can be used in a variety of ways:
		</p>
		<ul class="midlist">
			<li>
				As a stand-alone, pre-built web application for running and viewing reports.
			</li>
			<li>
				As a starter web application that you can customize to your needs.
			</li>
			<li>
			    Called through the BIRT tag library (BIRT 2.2 Required).
			</li>
			<li>
				As a plugin in existing RCP applications.
			</li>
			<li>
				As a way to run a report using a URL. This option provides a simple way to integrate BIRT reporting into applications build using non-Java technology such as Perl, PHP or even static web pages.
			</li>
		</ul>
		<p>
		     Web Viewer Links
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/deploy/viewerSetup.php">Integrating the BIRT Viewer</a> explains how to deploy the BIRT viewer onto your own application server. The explanation uses Apache Jakarta Tomcat as the sample deployment target.
			</li>
			<li>
				<a href="/birt/phoenix/deploy/viewerUsage.php">Using the BIRT Viewer BIRT 2.1.3</a> and <a href="/birt/phoenix/deploy/viewerUsage2.2.php">Using the BIRT Viewer BIRT 2.2</a> discuss the viewer operation URLs, parameters and settings.
			</li>
			<li>
				<a href="/birt/phoenix/deploy/usingPHP.php">Using the Viewer from PHP</a> discusses how to run BIRT reports from a non-Java scripting environment such as PHP. Also briefly summarizes how to use PHP to generate custom report designs.
			</li>
			<li>
				Viewer Pages discusses the JSP that make up the viewer. (Not yet available.)
			</li>
			<li>
				Viewer Tag Lirary. (Not yet available.)
			</li>			
			<li>
				The viewer code is available in the BIRT CVS repository in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/source/org.eclipse.birt.report.viewer/?cvsroot=BIRT_Project"> org.eclipse.birt.report.viewer</a> project. See the <a href="/birt/phoenix/build/buildInstructions.php">BIRT build instructions</a> for information on how to access CVS and build the viewer.
			</li>
		</ul>


		<h2><a name="designAPI"></a>Design Engine API</h2>
		<p>
			Use the Design Engine API (DE API) to create a custom report designer tool, or to explore or modify BIRT report designs. The BIRT Designer is built using this API.
			This API can also be called within BIRT script to modify the currently running report.
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/deploy/designEngineAPI.php">Using the Design Engine API</a>: a brief primer for using the DE API.
			</li>
			<li>
				The Design Engine code is available in the BIRT CVS repository in the  org.eclipse.birt.report.model project. See the BIRT build instructions for information on how to access CVS and build the code.
			</li>
		</ul>


		<h2><a name="reportAPI"></a>Report Engine API</h2>
		<p>
			Use the Report Engine API to run BIRT reports directly from Java code or to create a custom web application front end for BIRT.
	
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/deploy/reportEngineAPI.php">Using the Engine API</a> explains how to use the
  				Report Engine API to create a simple command-line program that runs reports.
			</li>
		</ul>

		<h2><a name="chartAPI"></a>Chart Engine API</h2>
		<p>
			Use the Chart Engine API to create and render charts apart from BIRT.
	
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/deploy/chartEngineAPI.php">Using the Chart Engine API</a> explains how to use the
  				Chart Engine API.
			</li>
		</ul>


		<h2><a name="scripting"></a>BIRT Scripting</h2>
		<p>
			BIRT uses Mozilla's Rhino engine to perform server side scripting.  Scripting is used in BIRT expressions and at key events during
			the generation and presentation phases of report creation.    
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/deploy/reportScripting.php">Scripting Primer</a> explains scripting in more detail. 
			</li>
		</ul>


		<h2><a name="extending"></a>Extending BIRT</h2>
		<p>
			Your application can extend BIRT for your specific needs:
		</p>
		<ul class="midlist">
			<li>
				Open Data Access (ODA) Extension API
				<br>
				BIRT provides a JDBC data source. Use the ODA API to create custom data sources drivers. Each driver has run-time behavior along with optional design-time UI.
			</li>
			<li>
				Report Item Extension API
				<br>
				The BIRT model is extensible; you can add new report items. Use this API to include design-time, run-time or presentation-time behavior.
			</li>
			
		</ul>







	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
