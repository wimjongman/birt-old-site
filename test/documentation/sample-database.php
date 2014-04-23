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
					<h1 class="eclipse-title-main">Sample Database</h1>
					
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
					<p>The BIRT sample database provides a simple set of tables and data that form the basis for BIRT sample reports. The schema is for Classic Models, a retailer of scale models of classic cars. The database contains typical business data such as customers, orders, order line items, products and so on. It was designed to illustrate many of the features of the BIRT report designer.</p>
					<p>The sample database is open source; you are free to use it for your own use to experiment with other tools; to create samples for other tools, etc. The sample database is provided under the terms Eclipse.org <a href="http://www.eclipse.org/legal/notice.html" target="_blank">Software User Agreement</a>.</p>
					
					<h2 class="topic-section-header padding-top-small">Schema</h2>
					<p>The database consists of eight tables:
					<ul class="eclipse-list">
						<li>Offices: sales offices</li><br />
						<li>Employees: All employees, including sales reps who work with customers.</li><br />
						<li>Customers</li><br />
						<li>Orders: Orders placed by customers</li><br />
						<li>Order Details: Line items within an order.</li><br />
						<li>Payments: Payments made by customers against their account</li><br />
						<li>Products: The list of scale model cars</li><br />
						<li>Product Lines: The list of product line classifcation</li>
					</ul>
					</p>
					<p>This <a href="/birt/test/img/documentation/sample-database/ClassicModelsDBSchema.jpg" target="_blank">ER-diagram</a> shows the table structure and relationships. (<a href="/birt/test/resources/documentation/sample-database/ClassicModelsDBSchema.pdf" target="_blank">PDF version</a>)</p>
					
					<h2 class="topic-section-header padding-top-small">Install</h2>
					<p>The sample database is available in two forms:
					<ul class="eclipse-list">
						<li>Apache Derby database, which is included in the BIRT download</li><br />
						<li>Scripts to load a MySQL database (Instructions below)</li>
					</ul>
					</p>
					<p>The scripts to load a MySQL database are contained in the <a href="/birt/test/resources/documentation/sample-database/ClassicModels-MySQL.zip" target="_blank">sample database</a> zip file. This zip also has documentation and logos for the sample database.</p>
					
					<h2 class="topic-section-header padding-top-small">MySQL Version</h2>
					<p>To install the MySQL version of the sample database, you must have MySQL installed. See <a href="http://www.mysql.com" target="_blank">mysql.com</a> for instructions.</p>
					<p>Install the MySQL JDBC driver into BIRT:
					<ul class="eclipse-list">
						<li>Download and unzip MySQL Connector/J 3.1 JDBC driver located at:<br /><br />
						<a target="_blank" href="http://dev.mysql.com/downloads/">http://dev.mysql.com/downloads/</a></li><br />
						<li>Install the JDBC driver using the instructions on the install page. Enter the following for the URL template:<br /><br />
						jdbc:mysql://[host][,failoverhost...][:port]/[database]...</li>
					</ul>
					</p>
					<p>You are now ready to create the Classic Models database:
					<ul class="eclipse-list">
						
					</ul>
					</p>
					
					
					<h2 class="topic-section-header padding-top-small">Technical Reference</h2>
					<p>The topics in this guide include:
					<ul class="eclipse-list">
						<li>Report Object Model Documentation</li><br />
						<li>Report Object Model Specification Suite</li><br />
						<li>BIRT Project Specifications</li>
					</ul>
					</p>
					<p><a href="reference.php">Learn More</a></p>
					
					<h2 class="topic-section-header padding-top-small">Building BIRT</h2>
					<p>This guide describes how to get the BIRT source and build it under Eclipse. If you simply want to use BIRT, it is easier to simply <a href="http://download.eclipse.org/birt/downloads">download</a> an existing build. The topics included are:
					<ul class="eclipse-list">
						<li>Introduction</li><br />
						<li>Requirements</li><br />
						<li>Configuring Eclipse</li><br />
						<li>Understanding the CVS Structure</li><br />
						<li>Checking out Code from CVS</li><br />
						<li>Checking out the Data Tools Projects</li><br />
						<li>Import Additional Files</li><br />
						<li>Preparing the Viewer</li><br />
						<li>Running BIRT</li><br />
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