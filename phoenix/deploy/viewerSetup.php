<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Installing the BIRT Viewer in Tomcat";
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
	$currentPage			= "Viewer Setup";
	$linkToTop				= linkToTop();
	$deployLinksSideItem  	= getDeployLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#pojoviewer">BIRT PJO Viewer</a></li>
				<li><a href="#using">Using Tomcat</a></li>
				<li><a href="#install_viewer">Install the Viewer</a></li>
				<li><a href="#install_jdbc">Install your JDBC Drivers</a></li>
				<li><a href="#testing">Testing a More Complex Report</a></li>
				<li><a href="#jboss">Deploying to JBoss</a></li>
				<li><a href="#other">Other Java EE Servers</a></li>
	
			</ul>
		</blockquote>
		<h2><a name="pojoviewer"></a>BIRT POJO Viewer</h2>
		<p>
			Starting with the release of BIRT 3.7 the Viewer has been changed to be POJO based.  All required BIRT 
			plugins are now in the WEB-INF/lib folder of the Viewer, and the WEB-INF/platform directory has been removed.
			The Viewer should continue to operate as in previous versions of BIRT.  More information about this change is available 
			in the <a href="http://wiki.eclipse.org/Birt_3.7_Migration_Guide">BIRT 3.7 Migration Guide</a>.	
		</p>
		<h2><a name="using"></a>Using Tomcat</h2>
		<p>
			This page explains how to deploy the BIRT viewer to a Java EE container.
			We'll use <a href="http://jakarta.apache.org/tomcat/">Apache Tomcat</a>, since
			it is open source and readily available. The same concepts,  perhaps
			with different details, apply to other app servers. These instructions assume you'll
			install Tomcat on your own machine using the default port number of 8080.
		</p>

		<p>
			If you don’t have Tomcat installed on your system you can download it from <a href="http://jakarta.apache.org/tomcat">http://jakarta.apache.org/tomcat</a>.
		</p>
<div class="homeitem3col">
<h3>Birt 3.7 Note: </h3>
<ul>
 If you are installing BIRT 3.7 or later See <a href="http://wiki.eclipse.org/BirtPOJO_Viewer_Tomcat_Deployment">BIRT POJO Viewer Tomcat Deployment</a>.
 </ul>
</div>
		<h2><a name="install_viewer"></a>Install the Viewer</h2>
		<p>
			Deploy the BIRT Viewer application. Follow these steps:
		</p>
		<ul class="midlist">
			<li>
				Download the zip file with the BIRT report engine runtime. The file is named birt-runtime-version#.zip.
			</li>
			<li>
				Unzip the file in a staging area.
			</li>
			<li>
				Look under the birt-runtime-<version#> directory and locate the "Web Viewer Example" directory.
			</li>
			<li>
				Copy the Web Viewer Example directory to the webapps directory of your Tomcat installation. For ease of reference, rename the directory to "birt-viewer".
			</li>
			<li>
				Stop, then restart Tomcat.
			</li>
			<li>
				Display the Tomcat manager application to check that the viewer is deployed: <a href="http://localhost:8080/manager/html"> http://localhost:8080/manager/html</a>.
			</li>
			<li>
				Verify that birt-viewer is listed as an application, then click on the birt-viewer link.
			</li>
			<li>
				A page confirming that the BIRT viewer has been installed should be displayed. Click on the link labeled "View Example" to confirm that your installation is working properly.
			</li>
			<li>
			    The BIRT Viewer requires that cookies be enabled.
			</li>
		</ul>

		<p>
			If you choose to put the Viewer into some other location, you'll need to use a context entry within the server.xml file to indicate the deployment location. See Tomcat documentation for details.
		</p>


		<h2><a name="install_jdbc">Install your JDBC Drivers</a></h2>
		<p>
			Add the jar files for your JDBC drivers  to the Viewer. Copy the driver the following directory:
		</p>
		<p>		
<div class="homeitem3col">
<h3>Birt JDBC Driver Location Note: </h3>
<ul>
 If you are installing BIRT 2 series the driver needs to be copied to birt-viewer\WEB-INF\platform\plugins\org.eclipse.birt.report.data.oda.jdbc\drivers directory.<br>
 If you are installing BIRT 3.7 or higher, the jdbc driver should be placed in the WebViewer's classpath (eg WEB-INF/lib).
 </ul>
</div>
		</p>


		<h2><a name="testing">Testing a More Complex Report</a></h2>
		<p>
			We'll test the viewer further using one of the example reports created for the "Classic Models" database. Note that Classic Models database is included in the birt runtime distribution so no further set-up is required. Follow these steps:
		</p>
		<ul class="midlist">
			<li>
				Download the zip file with the BIRT report engine runtime. The file is named birt-runtime-<version#>.zip.
			</li>
			<li>
				Click on the following link to download the example report design, <a href="/birt/phoenix/examples/solution/SalesInvoice.rptdesign" target="_blank">SalesInvoice.rptdesign</a> into another browser window. Use the "Save as..." command from the file menu to save the report into the birt-viewer/report directory.
			</li>
			<li>
				If you've installed everything in its default location, then click on the following link. If you've changed anything, then copy the following URL into your browser and make the needed changes.
				<blockquote>
					http://localhost:8080/birt-viewer/run?__report=Report\SalesInvoice.rptdesign 
				</blockquote>
				or
				<blockquote>
					http://localhost:8080/birt-viewer/frameset?__report=Report\SalesInvoice.rptdesign
				</blockquote>
			</li>
		
		<p>
			The report should run and appear in your browser.  See <a href="viewerUsageMain.php">Viewer Usage</a> for information on the Viewer Operations.
		</p>
		</ul>

		<h2><a name="jboss">Deploying to JBoss</a></h2>
		If you are deploying BIRT version 2 series to JBoss use the following steps:
		<ul class="midlist">
			<li>
				Download the zip file with the BIRT report engine runtime. The file is named birt-runtime-version#.zip.
			</li>
			<li>
				Unzip the file in a staging area.
			</li>
			<li>
				Look under the birt-runtime-<version#> directory and locate the "WebViewerExample" directory.
			</li>
			<li>
				Copy the "WebViewerExample" directory to your JBoss installation, under the deploy directory for your configuration. (eg) C:\jboss-4.0.3SP1\server\default\deploy. 
			</li>
			<li>
				Rename the WebViewerExample directory to birt.war, so it will deploy in place.
			</li>			
			<li>
				Start up JBoss and enter the URL to BIRT (ie http://localhost:8080/birt) and run the test report.
			</li>
		</ul>
		
		If you are deploying the BIRT Viewer version 3.7 or later to JBoss use the directions supplied on the following link:<br>
		<a href="http://wiki.eclipse.org/BirtPOJO_Viewer_JBOSS_Deployment">BIRT POJO Viewer JBoss Deployment</a>
		
		
		<h2><a name="other">Other Java EE Servers</a></h2>
		The <a href="http://wiki.eclipse.org/BIRT/FAQ/Deployment">BIRT FAQ</a> has instructions for many other deployement options.<br>
		If you are installing BIRT 3.7 or later see these pages:<br>
		<a href="http://wiki.eclipse.org/BirtPOJO_Viewer_WebSphere_Deployment">BIRT POJO Viewer Websphere Deployment</a><br>
		<a href="http://wiki.eclipse.org/BirtPOJO_Viewer_WebLogic_Deployment">BIRT POJO Viewer WebLogic Deployment</a><br>
		<a href="http://wiki.eclipse.org/BirtPOJO_Viewer_JBOSS_Deployment">BIRT POJO Viewer JBoss Deployment</a><br>
		<a href="http://wiki.eclipse.org/BirtPOJO_Viewer_Tomcat_Deployment">BIRT POJO Viewer Tomcat Deployment</a><br>


	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
