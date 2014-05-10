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
					<h1 class="eclipse-title-main">Documentation</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="install.php">Installation Guide</a></li>
		                    <li><a href="tutorial/">Design Tutorial</a></li>
		                    <li><a href="integrating/">Integrating BIRT</a></li>
		                    <li><a href="sample-database.php">Sample Database</a></li>
		                    <li><a href="reference.php">Technical Reference</a></li>
		                    <li><a href="building-birt.php">Building BIRT</a></li>
		           		</ul>

			        </div>

					<h2 class="topic-section-header padding-top-small">Installation Guide</h2>
					<p>This guide will take you through the BIRT installation process. The topics included in this guide include:
					<ul class="eclipse-list">
						<li>Designer Install</li>
						<li>Framework Designer Install</li>
						<li>JDBC Drivers</li>
						<li>Updating a BIRT Installation</li>
						<li>Deploying to a Java EE Server</li>
						<li>Installing BIRT Language Packs on Windows</li>
						<li>Common Problems</li>
					</ul>
					</p>
					<p><a href="install.php">Learn More</a></p>
					
					<h2 class="topic-section-header padding-top-small">Design Tutorial</h2>
					<p>If you're new to BIRT, this tutorial is a good place to start. The Tutorial walks you though the steps to build a basic listing report and introduces the basic BIRT concepts. The topics include:
					<ul class="eclipse-list">
						<li>Introduction</li>
						<li>Creating a Report</li>
						<li>Brief UI Tour</li>
						<li>Building a Data Source</li>
						<li>Building a Data Set</li>
						<li>Building a Table</li>
						<li>Testing Your Report</li>
						<li>Setting Visual Properties</li>
						<li>Setting Data Properties</li>
						<li>Using Styles</li>
						<li>Cascading Styles</li>
						<li>Using a Grid</li>
						<li>Using a Text Item</li>
						<li>Next Steps</li>
					</ul>
					</p>
					<p><a href="tutorial/">Get Started</a></p>
					
					<h2 class="topic-section-header padding-top-small">Integrating BIRT</h2>
					<p>This guide takes you through what you'll need to know to get started with integrating BIRT into your application. The topics include:
					<ul class="eclipse-list">
						<li>Viewer Setup</li>
						<li>Viewer Usage</li>
						<li>Using PHP</li>
						<li>Report Scripting</li>
						<li>Design Engine API</li>
						<li>Report Engine API</li>
					</ul>
					</p>
					<p><a href="integrating/">Learn More</a></p>
					
					<h2 class="topic-section-header padding-top-small">Sample Database</h2>
					<p>The BIRT sample database provides a simple set of tables and data that form the basis for BIRT sample reports. The schema is for Classic Models, a retailer of scale models of classic cars. The database contains typical business data such as customers, orders, order line items, products and so on. It was designed to illustrate many of the features of the BIRT report designer. The sections included in this guid are:
					<ul class="eclipse-list">
						<li>Introduction</li>
						<li>Schema</li>
						<li>Install</li>
						<li>Apache Derby Version</li>
						<li>MySQL Version</li>
					</ul>
					</p>
					<p><a href="sample-database.php">Learn More</a></p>
					
					<h2 class="topic-section-header padding-top-small">Technical Reference</h2>
					<p>The topics in this guide include:
					<ul class="eclipse-list">
						<li>Report Object Model Documentation</li>
						<li>Report Object Model Specification Suite</li>
						<li>BIRT Project Specifications</li>
					</ul>
					</p>
					<p><a href="reference.php">Learn More</a></p>
					
					<h2 class="topic-section-header padding-top-small">Building BIRT</h2>
					<p>This guide describes how to get the BIRT source and build it under Eclipse. If you simply want to use BIRT, it is easier to simply <a href="http://download.eclipse.org/birt/downloads">download</a> an existing build. The topics included are:
					<ul class="eclipse-list">
						<li>Introduction</li>
						<li>Requirements</li>
						<li>Configuring Eclipse</li>
						<li>Understanding the CVS Structure</li>
						<li>Checking out Code from CVS</li>
						<li>Checking out the Data Tools Projects</li>
						<li>Import Additional Files</li>
						<li>Preparing the Viewer</li>
						<li>Running BIRT</li>
						<li>Instructions for Running JUnit Tests</li>
					</ul>
					</p>
					<p><a href="building-birt.php">Learn More</a></p>
					
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