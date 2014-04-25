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
		$metaTitle 		= "About";
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
					<h1 class="eclipse-title-main">Architecture Overview</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="index.php">What is BIRT?</a></li>
		                    <li><a href="design.php">BIRT Design Overview</a></li>
		                    <li><a href="architecture.php">Architecture Overview</a></li>
		                    <li><a href="designer.php">Designer Overview</a></li>
		                    <li><a href="customization.php">Customization Overview</a></li>
		                    <li><a href="extensibility.php">Extensibility Overview</a></li>
		                    <li><a href="project-organization/">Project Organization</a></li>
		                    <li><a href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a></li>
		                    <!--<li><a href="birt-and-actuate.php">BIRT and Actuate</a></li>-->		                    
		                </ul>

			        </div>

			        <h2 class="topic-section-header padding-top-small">BIRT Components</h2>
					<p>The BIRT project delivers many components. These are listed below with a brief description. More information about BIRT components and architecture is available in the <a href="/birt/documentation/">documentation</a> section.
					<ul class="eclipse-list">
						<li>BIRT Report Designer - The BIRT Report Designer is an Eclipse perspective that is used to create BIRT report designs. These designs are stored in an open	XML format. The Designer can be downloaded as a Rich Client Platform (RCP) application, a set of plug-ins to enable the Designer perspective within an existing Eclipse build or as an all in one download that includes Eclipse.</li>
						<br />
						<li>Design Engine - This engine is responsible for creating and modifying report designs. The Design Engine API (DE API) wraps the functionality of the design engine and is available for use within any Java/Java EE project. The BIRT Report Designer uses this API internally to construct the XML designs.</li>
						<br />
						<li>Report Engine - The Report Engine uses the report design files to generate and render reports. Using the Report Engine API (RE API) the engine can be embedded within any Java/Java EE application. The BIRT Web Viewer uses this API to execute and display reports.</li>
						<br />
						<li>Charting Engine - The Charting Engine is used to design and generate Charts either in standalone or embedded within BIRT reports. The Charting Engine API (CE API) allows Java/Java EE developers to add charting capabilities to their applications. The Design and Report Engines make use of this API to deliver Charts.</li>
						<br />
						<li>BIRT Viewer - The BIRT project provides a sample "viewer" that is used to preview reports within Eclipse. BIRT includes an Apache Tomcat server invoked each time you preview your report. In addition to being packaged as an Eclipse Plug-in, the Viewer is also available as a standalone Java EE application, which can be used in any JSP-compliant Java EE server. The Viewer Plug-in can also be embedded within a Rich Client Platform (RCP) application. BIRT provides web output as a single HTML document, paginated HTML, PDF, XLS, DOC, PPT, and Postscript. Additionally the viewer allows exporting the data to CSV, printing, and Table of Contents functionality.</li>
					</ul>
					</p>

					<h2 class="topic-section-header padding-top-small">Architecture Diagram</h2>
					<img src="/birt/img/about/birtarch.png" />
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