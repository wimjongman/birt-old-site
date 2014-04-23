<?php

session_start();

require_once( $_SERVER['DOCUMENT_ROOT'] . "birt/test/common/config.php");
$PagePart 	= new PagePart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		/* Set Page Level Meta Details */
		$metaTitle 		= "Documentation";
		$metaKeywords	= "Eclipse Keywords";
		$metaAuthor		= "";
		$metaDescription = "Eclipse Super Description for SEO in da House";
		$ogTitle		= "This is the OG Super Title";
		$ogImage		= "http://www.actuate.com/images/logo.png";
		$ogDescription  = "This is the ogDescription to be displayed in share options.";
		
		//only use following if you know what you are doing - else just leave them as is.
		$robotsIndex 	= "index"; // ** *Only usable values are 'index', 'noindex'
		$robotsFollow	= "follow"; // ***Only usable values are 'follow', 'nofollow'
		$canonicalTag	= ""; //this is a canonical tag used for duplicate content *** DO NOT USE UNLESS YOU KNOW WHAT YOU ARE DOING *** Default is blank! ex:http://www.actuate.com/products/
	 	
	 	# Generate Meta Info
		echo $PagePart->getMetaInfo($metaTitle, $metaKeywords, $metaAuthor, $metaDescription, $ogTitle, $ogImage, $ogDescription, $robotsIndex, $robotsFollow, $canonicalTag);
	 ?>
</head>	

<body>

<?php echo $PagePart->getAfterBody(); ?>

<div style="background-color:#f4f4f4;">
	<div class="content-area">
		<div class="content-area-inner" style="padding-top:40px;">
			
			<div class="actu-eclipse-side-menu">
				
				<?php echo $PagePart->getSideMenu(); ?>

			</div>


			<div class="dev-main eclipse-main">
				<div class="eclipse-main-container">	
					<h1 class="eclipse-title-main">Integrating BIRT</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="/birt/test/documentation/install.php">Installation Guide</a></li>
		                    <li><a href="/birt/test/documentation/tutorial/">Design Tutorial</a></li>
		                    <li><a href="index.php">Integrating BIRT</a>
		                    	<ul>
		                    		<li><a href="viewer-setup.php">Viewer Setup</a></li>
		                    		<li><a href="viewer-usage.php">Viewer Usage</a></li>
		                    		<li><a href="using-php.php">Using PHP</a></li>
		                    		<li><a href="scripting.php">Report Scripting</a></li>
		                    		<li><a href="deapi.php">Design Engine API</a></li>
		                    		<li><a href="reapi.php">Report Engine API</a></li>
		                    	</ul>
		                    </li>
		                    <li><a href="/birt/test/documentation/sample-database.php">Sample Database</a></li>
		                    <li><a href="/birt/test/documentation/reference.php">Technical Reference</a></li>
		                    <li><a href="/birt/test/documentation/building-birt.php">Building BIRT</a></li>
		           		</ul>

			        </div>

					<h2 class="topic-section-header padding-top-small">BIRT POJO Viewer</h2>
					<p>Starting with the release of BIRT 3.7 the Viewer has been changed to be POJO based.  All required BIRT plugins are now in the WEB-INF/lib folder of the Viewer, and the WEB-INF/platform directory has been removed.	The Viewer should continue to operate as in previous versions of BIRT.  More information about this change is available in the <a href="http://wiki.eclipse.org/Birt_3.7_Migration_Guide">BIRT 3.7 Migration Guide</a>.</p>
					
					<h2><a name="using"></a>Using Tomcat</h2>
					<p>This page explains how to deploy the BIRT viewer to a Java EE container.	We'll use <a href="http://jakarta.apache.org/tomcat/" target="_blank">Apache Tomcat</a>, since it is open source and readily available. The same concepts,  perhaps	with different details, apply to other app servers. These instructions assume you'll install Tomcat on your own machine using the default port number of 8080.</p>

					<p>If you don't have Tomcat installed on your system you can download it from <a href="http://jakarta.apache.org/tomcat" target="_blank">http://jakarta.apache.org/tomcat</a>.</p>
					
					<h3>Birt 3.7 Note: </h3>
					<p>If you are installing BIRT 3.7 or later See <a href="http://wiki.eclipse.org/BirtPOJO_Viewer_Tomcat_Deployment" target="_blank">BIRT POJO Viewer Tomcat Deployment</a>.</p>
 
					<h2 class="topic-section-header padding-top-small">Install the Viewer</h2>
					<p>Deploy the BIRT Viewer application. Follow these steps:
					<ul  class="eclipse-list">
						<li>Download the zip file with the BIRT report engine runtime. The file is named birt-runtime-version#.zip.</li><br />
						<li>Unzip the file in a staging area.</li><br />
						<li>Look under the birt-runtime-<version#> directory and locate the "Web Viewer Example" directory.</li><br />
						<li>Copy the Web Viewer Example directory to the webapps directory of your Tomcat installation. For ease of reference, rename the directory to "birt-viewer".</li><br />
						<li>Stop, then restart Tomcat.</li><br />
						<li>Display the Tomcat manager application to check that the viewer is deployed: <a href="http://localhost:8080/manager/html"> http://localhost:8080/manager/html</a>.</li><br />
						<li>Verify that birt-viewer is listed as an application, then click on the birt-viewer link.</li>
						<li>A page confirming that the BIRT viewer has been installed should be displayed. Click on the link labeled "View Example" to confirm that your installation is working properly.</li><br />
						<li>The BIRT Viewer requires that cookies be enabled.</li>
					</ul>
					<p>If you choose to put the Viewer into some other location, you'll need to use a context entry within the server.xml file to indicate the deployment location. See Tomcat documentation for details.</p>


					<h2 class="topic-section-header padding-top-small">Install your JDBC Drivers</h2>
					<p>Add the jar files for your JDBC drivers  to the Viewer. Copy the driver the following directory:</p>
					
					<h3>BIRT JDBC Driver Location Note:</h3>
					<p>If you are installing BIRT 2 series the driver needs to be copied to birt-viewer\WEB-INF\platform\plugins\org.eclipse.birt.report.data.oda.jdbc\drivers directory.<br />
 					If you are installing BIRT 3.7 or higher, the jdbc driver should be placed in the WebViewer's classpath (eg WEB-INF/lib).</p>


					<h2 class="topic-section-header padding-top-small">Testing a More Complex Report</h2>
					<p>We'll test the viewer further using one of the example reports created for the "Classic Models" database. Note that Classic Models database is included in the birt runtime distribution so no further set-up is required. Follow these steps:
					<ul class="eclipse-list">
						<li>Download the zip file with the BIRT report engine runtime. The file is named birt-runtime-<version#>.zip.</li><br />
						<li>Click on the following link to download the example report design, <a href="/birt/phoenix/examples/solution/SalesInvoice.rptdesign" target="_blank">SalesInvoice.rptdesign</a> into another browser window. Use the "Save as..." command from the file menu to save the report into the birt-viewer/report directory.</li><br />
						<li>If you've installed everything in its default location, then click on the following link. If you've changed anything, then copy the following URL into your browser and make the needed changes.
						<blockquote>
							http://localhost:8080/birt-viewer/run?__report=Report\SalesInvoice.rptdesign 
						</blockquote>
						or
						<blockquote>
							http://localhost:8080/birt-viewer/frameset?__report=Report\SalesInvoice.rptdesign
						</blockquote>
						</li>
					</ul>
					<p>The report should run and appear in your browser.  See <a href="viewer-usage.php">Viewer Usage</a> for information on the Viewer Operations.</p>
		
					<h2 class="topic-section-header padding-top-small">Deploying to JBoss</h2>
					<p>If you are deploying BIRT version 2 series to JBoss use the following steps:
					<ul class="eclipse-list">
						<li>Download the zip file with the BIRT report engine runtime. The file is named birt-runtime-version#.zip.</li><br />
						<li>Unzip the file in a staging area.</li><br />
						<li>Look under the birt-runtime-<version#> directory and locate the "WebViewerExample" directory.</li><br />
						<li>Copy the "WebViewerExample" directory to your JBoss installation, under the deploy directory for your configuration. (eg) C:\jboss-4.0.3SP1\server\default\deploy.</li><br />
						<li>Rename the WebViewerExample directory to birt.war, so it will deploy in place.</li><br />	
						<li>Start up JBoss and enter the URL to BIRT (ie http://localhost:8080/birt) and run the test report.</li>
					</ul>
					</p>
					
					<p>If you are deploying the BIRT Viewer version 3.7 or later to JBoss use the directions supplied on the following link:<br />
					<a href="http://wiki.eclipse.org/BirtPOJO_Viewer_JBOSS_Deployment">BIRT POJO Viewer JBoss Deployment</a></p>
		
		
					<h2 class="topic-section-header padding-top-small">Other Java EE Servers</h2>
					<p<The <a href="http://wiki.eclipse.org/BIRT/FAQ/Deployment">BIRT FAQ</a> has instructions for many other deployement options.<br /><br />
					If you are installing BIRT 3.7 or later see these pages:<br />
					<a href="http://wiki.eclipse.org/BirtPOJO_Viewer_WebSphere_Deployment">BIRT POJO Viewer Websphere Deployment</a><br />
					<a href="http://wiki.eclipse.org/BirtPOJO_Viewer_WebLogic_Deployment">BIRT POJO Viewer WebLogic Deployment</a><br />
					<a href="http://wiki.eclipse.org/BirtPOJO_Viewer_JBOSS_Deployment">BIRT POJO Viewer JBoss Deployment</a><br />
					<a href="http://wiki.eclipse.org/BirtPOJO_Viewer_Tomcat_Deployment">BIRT POJO Viewer Tomcat Deployment</a><br />
					
					
				</div>
			</div>

		</div>
	</div>

	
	<footer>
		<?php echo $PagePart->getFooter(); ?>
	</footer>
</div>
</body>
</html>