<?php

session_start();

require_once( $_SERVER['DOCUMENT_ROOT'] . "birt/common/config.php");
$PagePart 	= new PagePart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		/* Set Page Level Meta Details */
		$metaTitle 		= "Documentation";
		$metaKeywords	= "Eclipse,BIRT,Java,Java EE,Web,RCP,Data,Visualization,Reports,Reporting,Embed,Rich-Client,Dashboards";
		$metaAuthor		= "";
		$metaDescription = "BIRT is an open source technology platform used to create data visualizations and reports that can be embedded into rich client and web applications.";
		$ogTitle		= "Eclipse BIRT Project Home";
		$ogImage		= "http://www.eclipse.org/birt/img/logo/Birt-logo.png";
		$ogDescription  = "BIRT is an open source technology platform used to create data visualizations and reports that can be embedded into rich client and web applications.";
		
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
		                    <li><a href="/birt/documentation/install.php">Installation Guide</a></li>
		                    <li><a href="/birt/documentation/tutorial/">Design Tutorial</a></li>
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
		                    <li><a href="/birt/documentation/sample-database.php">Sample Database</a></li>
		                    <li><a href="/birt/documentation/reference.php">Technical Reference</a></li>
		                    <li><a href="/birt/documentation/building-birt.php">Building BIRT</a></li>
		           		</ul>

			        </div>

					<h2 class="topic-section-header padding-top-small">Integration Points</h2>
					<p>BIRT supplies several APIs and an Example Java EE application for generating and viewing reports. The major APIs are the Design Engine API(DE API), Report Engine API(RE API) and the Chart Engine API (CE API). These pages describe the various APIs and illustrate examples on their usage. In addition to the APIs, BIRT supports scripting using Rhino within report designs. A primer is available to get started scripting.</p>
					
					<h2 class="topic-section-header padding-top-small">Example Report Viewer (Java EE App/Plugin)</h2>
					<p>The BIRT Viewer can be used in a variety of ways:<br />
					Note that the BIRT Viewer requires that cookies be enabled.
					<ul class="eclipse-list">
						<li>As a stand-alone, pre-built web application for running and viewing reports.</li><br />
						<li>As a starter web application that you can customize to your needs.</li><br />
						<li>Called through the BIRT tag library.</li><br />
						<li>As a plugin in existing RCP applications.</li>
					</ul>
					</p>
					
					<h3>Web Viewer Links</h3>
					<p>
					<ul class="eclipse-list">
						<li><a href="viewer-setup.php">Integrating the BIRT Viewer</a> explains how to deploy the BIRT viewer onto your own application server. The explanation uses Apache Jakarta Tomcat as the sample deployment target.</li><br />
						<li><a href="viewer-usage.php">Using the BIRT Viewer</a> discusses the viewer operation URLs, parameters and settings.</li><br />
						<li><a href="using-php.php">Using the Viewer from PHP</a> discusses how to run BIRT reports from a non-Java scripting environment such as PHP.</li><br />
						<li><a href="viewer-usage.php">Viewer Tag Lirary</a> discusses how to integrate BIRT using the Tag Libraries.</li><br />
						<li>The viewer code is available in the BIRT CVS repository in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/source/org.eclipse.birt.report.viewer/?cvsroot=BIRT_Project">org.eclipse.birt.report.viewer</a> project. See the <a href="/birt/documentation/building-birt.php">BIRT build instructions</a> for information on how to access CVS and build the viewer.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Design Engine API</h2>
					<p>Use the Design Engine API (DE API) to create a custom report designer tool, or to explore or modify BIRT report designs. The BIRT Designer is built using this API. This API can also be called within BIRT script to modify the currently running report.
					<ul class="eclipse-list">
						<li><a href="deapi.php">Using the Design Engine API</a> is a brief primer for using the DE API.</li><br />
						<li>The Design Engine code is available in the BIRT CVS repository in the org.eclipse.birt.report.model project. See the BIRT build instructions for information on how to access CVS and build the code.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Report Engine API</h2>
					<p>Use the Design Engine API (DE API) to create a custom report designer tool, or to explore or modify BIRT report designs. The BIRT Designer is built using this API. This API can also be called within BIRT script to modify the currently running report.
					<ul class="eclipse-list">
						<li><a href="reapi.php">Using the Engine API</a> explains how to use the Report Engine API to create a simple command-line program that runs reports.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Chart Engine API</h2>
					<p>Use the Chart Engine API to create and render charts apart from BIRT. Several examples can be found on the <a href="http://developer.actuate.com" target="_blank">BIRT Developer Center</a>.
					<ul class="eclipse-list">
						<li><a href="http://developer.actuate.com/community/devshare/_/designing-birt-reports/webinar-archive-using-the-birt-charting-apis-r288" target="_blank">Chart Engine API Webinar</a></li><br />
						<li><a href="http://developer.actuate.com/community/devshare/_/designing-birt-reports/463-birt-chart-engine-api-webinar-examples/" target="_blank">Chart Engine API Webinar Examples</a></li><br />
						<li><a href="http://developer.actuate.com/community/devshare/_/designing-birt-reports/1344-eclipsecon-2011-api-examples" target="_blank">Chart Engine API Examples</a></li><br />						
						<li><a href="http://developer.actuate.com/resources/search/" target="_blank">Search the BIRT Developer Center DevShare</a></li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">BIRT Scripting</h2>
					<p>BIRT uses Mozilla's Rhino engine to perform server side scripting. Scripting is used in BIRT expressions and at key events during the generation and presentation phases of report creation.
					<ul class="eclipse-list">
						<li><a href="scripting.php">Scripting Primer</a> explains scripting in more detail.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Extending BIRT</h2>
					<p>Your application can extend BIRT for your specific needs:
					<ul class="eclipse-list">
						<li>Open Data Access (ODA) Extension API - BIRT provides a JDBC data source. Use the ODA API to create custom data sources drivers. Each driver has run-time behavior along with optional design-time UI.</li><br />
						<li>Report Item Extension API - The BIRT model is extensible; you can add new report items. Use this API to include design-time, run-time or presentation-time behavior. A two part tutuorial is available: <a href="http://www.eclipse.org/articles/article.php?file=Article-BIRT-ExtensionTutorial1/index.html" target="_blank">Part 1</a> <a href="http://www.eclipse.org/articles/article.php?file=Article-BIRT-ExtensionTutorial2/index.html" target="_blank">Part 2</a></li>
					</ul>
					</p>
					
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