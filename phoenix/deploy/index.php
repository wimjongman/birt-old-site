<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Sample Database";
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
				<li><a href="#runtime">Runtime Integration</a></li>
				<li><a href="#design">Design-Time Integration</a></li>
				<li><a href="#extending">Extending BIRT</a></li>
				<li><a href="#viewer">Report Viewer</a></li>
				<li><a href="#reportAPI">Report Engine API</a></li>
				<li><a href="#designAPI">Design Engine API</a></li>
			</ul>
		</blockquote>

		<h2><a name="integration"></a>Integration Points</h2>
		<p>
			BIRT reporting provides a variety of integration points to accomplish various tasks:
		</p>
		<ul class="midlist">
			<li>
				<a href="#runtime">Runtime integration</a>
			</li>
			<li>
				<a href="#design">Design-time integration</a>
			</li>
			<li>
				<a href="#extending">Extensions to BIRT</a>
			</li>
		</ul>
		<p>
			BIRT charting APIs are described elsewhere. (Not yet available.)
		</p>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="runtime"></a>Runtime Integration</h2>
		<p>
			Your application can integrate the BIRT web and engine runtimes:
		</p>
		<ul class="midlist">
			<li>
				<a href="#viewer">BIRT Report Web App</a>
				<br>
				A series of URLs that your application can
				use to display a parameter page, run and display a report, etc.
			</li>
			<li>
				<a href="#reportAPI">Report Engine API</a>
				<br>
				A Java interface used to embed the BIRT report engine within your application.
				The engine behavior can be customized for use in a web app, RCP app, command
				line app, etc.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="design"></a>Design-Time Integration</h2>
		<p>
			Your application can explore or create BIRT XML report designs:
		</p>
		<ul class="midlist">
			<li>
				<a href="#designAPI">Design Engine API</a>
				<br>
				Provides access to a BIRT report design. You can explore the design,
				modify it and so on. Use this API to create your own custom report designer,
				or to perform batch tasks on designs.
			</li>
			<li>
				<a href="/birt/phoenix/deploy/usingPHP.php">Generate a Report Design Directly</a><br>

				If you can write XML files, or with  templates, you can generate report
				designs based on an application-specific report designer. This technique is
				ideal for non-Java scripting environments such as PHP.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="extending"></a>Extending BIRT</h2>
		<p>
			Your application can extend BIRT for your specific needs:
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/ref">Scripting</a>
				<br>
				BIRT provides extensive scripting support. You can create anything from computed columns to sophisticated business logic to extensive integration with existing Java code.
			</li>
			<li>
				Open Data Access (ODA) Extension API
				<br>
				BIRT provides a JDBC data source. Use the ODA API to create custom data sources drivers. Each driver has run-time behavior along with optional design-time UI.
			</li>
			<li>
				Scripted Data Source
				<br>
				The scripted data source and data set elements allow you to access custom data sources directly from your report without the need to create an ODA driver. This solution is ideal for one-off data sources, prototypes, and the like.
			</li>
			<li>
				Open Data Access (ODA) Extension API
				<br>
				The BIRT model is extensible; you can add new report items. Use this API to include design-time, run-time or presentation-time behavior.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="viewer"></a>Report Viewer</h2>
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
				As an example for learning how to build your own reporting web application, or to learn how to use the BIRT engine.
			</li>
			<li>
				As a way to run a report using a URL. This option provides a simple way to integrate BIRT reporting into applications build using non-Java technology such as Perl, PHP or even static web pages.
			</li>
		</ul>
		<p>
			The BIRT viewer is a web application included with BIRT to perform the report preview operation within Eclipse. It is also a sample of how to integrate birt with a web application.
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/deploy/viewer-deploy.html">Integrating the BIRT Viewer</a> explains how to deploy the BIRT viewer onto your own application server. The explanation uses Apache Jakarta Tomcat as the sample deployment target.
			</li>
			<li>
				<a href="/birt/phoenix/deploy/viewer-use.html">Using the BIRT Viewer</a> discusses the viewer operation URLs and their parameters.
			</li>
			<li>
				<a href="/birt/phoenix/deploy/viewer-php.html">Using the Viewer from PHP</a> discusses how to run BIRT reports from a non-Java scripting environment such as PHP. Also briefly summarizes how to use PHP to generate custom report designs.
			</li>
			<li>
				Viewer Pages discusses the JSP that make up the viewer. (Not yet available.)
			</li>
			<li>
				The viewer code is available in the BIRT CVS repository in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/source/org.eclipse.birt.report.viewer/?cvsroot=BIRT_Project"> org.eclipse.birt.report.viewer</a> project. See the <a href="build/build_instr.html">BIRT build instructions</a> for information on how to access CVS and build the viewer.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="reportAPI"></a>Report Engine API</h2>
		<p>
			Use the Report Engine API to run BIRT reports directly from Java code or to create a custom web application front end for BIRT.
		</p>
		<ul class="midlist">
			<li>
				<a href="deploy/engine.html">Using the Engine API</a> explains how to use the
  				Engine API to create a simple command-line program that runs reports.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />

		<h2><a name="designAPI"></a>Design Engine API</h2>
		<p>
			Use the Design Engine API (DE API) to create a custom report designer tool, or to explore or modify BIRT report designs. The BIRT Designer is built using this API. (Internally, the Design Engine is also called the "report model" or just "model.")
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/deploy/designEngineAPI.html">Using the Design Engine API</a>: a brief primer for using the DE API.
			</li>
			<li>
				The Design Engine code is available in the BIRT CVS repository in the  org.eclipse.birt.report.model project. See the BIRT build instructions for information on how to access CVS and build the code.
			</li>
		</ul>
		$linkToTop
		<hr class="clearer" />
	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
