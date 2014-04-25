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
					<p>This <a href="/birt/img/documentation/sample-database/ClassicModelsDBSchema.jpg" target="_blank">ER-diagram</a> shows the table structure and relationships. (<a href="/birt/resources/documentation/sample-database/ClassicModelsDBSchema.pdf" target="_blank">PDF version</a>)</p>
					
					<h2 class="topic-section-header padding-top-small">Install</h2>
					<p>The sample database is available in two forms:
					<ul class="eclipse-list">
						<li>Apache Derby database, which is included in the BIRT download</li><br />
						<li>Scripts to load a MySQL database (Instructions below)</li>
					</ul>
					</p>
					<p>The scripts to load a MySQL database are contained in the <a href="/birt/resources/documentation/sample-database/ClassicModels-MySQL.zip" target="_blank">sample database</a> zip file. This zip also has documentation and logos for the sample database.</p>
					
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
						<li><a href="/birt/resources/documentation/sample-database/birt-database-2_0_1.zip" target="_blank">Download the zip file</a> containing the MySQL database scripts.</li></br />
						<li>Expand the zip file into a convenient location.</li><br />
						<li>Expanding the zip file created the ClassicModels/mysql directory with some MySQL scripts. From the command line, move to the this directory:<br /><br />
						% cd /ClassicModels/mysql</li><br />
						<li>Start the mysql utility, giving the name (and password, if needed) of a user permission to create databases. For example, to use the default root user:<br /><br />
						% mysql --user=root</li><br />
						<li>Create the ClassicModels database and load the schema. (Loading the schema the schema the first time will give error messages as it attemps to empty any existing tables, just ignore these.)<br /><br />
						mysql> create database ClassicModels;<br />
						mysql> use ClassicModels;<br />
						mysql> source create_classicmodels.sql;</li><br />
						<li>Load the table contents:<br /><br />
						mysql> source load_classicmodels.sql;</li><br />
						<li>Exit from mysql:<br /><br />
						mysql> quit;</li>
					</ul>
					</p>
					
					
					<h2 class="topic-section-header padding-top-small">Localized Version of the Sample Database</h2>
					<p>Following is the Derby Database localized into French, German, Spanish, Japanese, Korean, and Simplified Chinese.
					<ul class="eclipse-list">
						<li><a href="/birt/resources/documentation/sample-database/Localized_Derby_Sample_DB.zip" target="_blank">Localized Derby Sample Database</a></li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Usage</h2>
					<p>You can now use the sample database within BIRT to create reports. The key information you need to get started is how to create a data source for the database. The details vary depending on the database system you selected.</p>
					
					<h2 class="topic-section-header padding-top-small">Apache Derby</h2>
					<p>The Apache Derby version of the database is included in the BIRT download as a built-in data source. To access it, simply select the "Classic Models Inc. Sample Database" entry in the new data source dialog.</p>
					
					<h2 class="topic-section-header padding-top-small">MySQL</h2>
					<p>Data source properties for the MySQL sample database:
					<table border="1"><tbody>
					<tr><td>Driver Class:</td><td>com.mysql.jdbc.Driver</td></tr>
					<tr><td>URL:</td><td>jdbc:mysql://localhost/classicmodels</td></tr>
					<tr><td>User Name:</td><td>root</td></tr>
					<tr><td>Password:</td><td></td></tr>
					</tbody></table>
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