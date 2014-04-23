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

					<h2 class="topic-section-header padding-top-small">Introduction</h2>
					<p>This document describes how to get the BIRT source from CVS and build it under Eclipse. If you simply want to use BIRT, it is easier to simply <a href="http://download.eclipse.org/birt/downloads">download</a> an existing build.</p>
					<p>Building BIRT 2.1.1 is described below.<br />
					For the latest instructions, see the <a href="http://wiki.eclipse.org/BIRT/FAQ/Birt_Project#Q:_How_do_I_build_BIRT.3F">BIRT Wiki</a>.</p>
					
					<h2 class="topic-section-header padding-top-small">Requirements</h2>
					<p>Download the BIRT all in one designer. It is listed under "Report Designer Full Eclipse Install" on the download page. It is possible to build BIRT with an existing Eclipse install, but this method is the quickest, as all the required files, with the exception of iText.jar and iTextAsian.jar are present.</p>
					
					<h2 class="topic-section-header padding-top-small">Configuring Eclipse</h2>
					<p>The BIRT source code uses some features that are only present in JDK 1.4.2 or later. In order for it to successfully build you need to set your compiler compliance to 1.4. Make sure this is not set to 5.0. You can set this for the entire workbench as follows:
					<ul class="eclipse-list">
						<li>From the menu, choose Window->Preferences.</li><br />
						<li>In the tree, expand Java and choose Compiler.</li><br />
						<li>On Compiler compliance level, select 1.4.</li><br />
						<li>Unselect Use default compliance settings.</li><br />
						<li>On Generated .class files compatibility, select 1.4.</li><br />
						<li>On Source compatibility, select 1.4.<br /><br />
							The following illustration shows these settings.<br />
							<img src="/birt/test/img/compliancepreference.jpg" />
						</li><br />
						<li>Report Engine API</li>
					</ul>
					</p>
					<p><a href="integrating/">Learn More</a>
					
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