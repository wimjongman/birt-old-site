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
					<h1 class="eclipse-title-main">Building a Data Set</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="/birt/documentation/install.php">Installation Guide</a></li>
		                    <li><a href="index.php">Design Tutorial</a>
		                    	<ul>
		                    		<li><a href="tutorial-1.php">Introduction</a></li>
		                    		<li><a href="tutorial-2.php">Creating a Report</a></li>
		                    		<li><a href="tutorial-3.php">Brief UI Tour</a></li>
		                    		<li><a href="tutorial-4.php">Building a Data Source</a></li>
		                    		<li><a href="tutorial-5.php">Building a Data Set</a></li>
		                    		<li><a href="tutorial-6.php">Building a Table</a></li>
		                    		<li><a href="tutorial-7.php">Testing Your Report</a></li>
		                    		<li><a href="tutorial-8.php">Setting Visual Properties</a></li>
		                    		<li><a href="tutorial-9.php">Setting Data Properties</a></li>
		                    		<li><a href="tutorial-10.php">Using Styles</a></li>
		                    		<li><a href="tutorial-11.php">Cascading Styles</a></li>
		                    		<li><a href="tutorial-12.php">Using a Grid</a></li>
		                    		<li><a href="tutorial-13.php">Using a Text Item</a></li>
		                    		<li><a href="tutorial-14.php">Next Steps</a></li>
		                    	</ul>
		                    </li>
		                    <li><a href="/birt/documentation/integrating/">Integrating BIRT</a></li>
		                    <li><a href="/birt/documentation/sample-database.php">Sample Database</a></li>
		                    <li><a href="/birt/documentation/reference.php">Technical Reference</a></li>
		                    <li><a href="/birt/documentation/building-birt.php">Building BIRT</a></li>
		           		</ul>

			        </div>

					<h2 class="topic-section-header padding-top-small">Build a Data Set</h2>
					<p>Now we're ready to build and test our data set.
					<ul class="eclipse-list">
						<li>Find or open the Data Explorer view.</li><br />
						<li>Select the Data Sets node in the tree view.</li><br />
						<li>Right-click to open the context menu. (We'll just say "open the context menu" or "choose x from the context menu" from now on.)</li><br />
						<li>Select New Data Set. The New Data Set dialog will appear.</li><br />
						<li>Enter "Customers" for the Data Set Name field.</li><br />
						<li>Ensure that the Data Source field shows the Sample data source created above.</li><br />
						<li>Ensure that the Data Set Type field shows "SQL Select Query".</li><br />
						<li>Click Next.</li><br />
						<li>Enter the following Query:
							<em>SELECT *<br />
							FROM CUSTOMERS<br />
							WHERE COUNTRY = 'USA'</em></li><br />
						<li>Click Finish.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Data Set Editor Pages</h2>
					<p>The data set editor now opens. Let's take a look at the pages within this editor. The data set editor provides the following pages:
					<ul class="eclipse-list">
						<li>Query - Displays your SQL SELECT statement. This is where you create and change your SQL query. Once you have the basic query, you can add a WHERE clause, adjust the set of selected columns, and more. Use the SQL editor to add computed columns that are to be calculated by the database engine. Give such columns a name using the SQL ALIAS clause.</li><br />
						<li>Data Source - Displays the name of the data source for this data set so you can view or change it.</li><br />
						<li>Preview Results - Lets you test your query and see the output. Very handy to make sure that the data is right before you proceed with report design.</li><br />
						<li>Computed Columns - Computed columns are calculated by BIRT and appear to the rest of the report just like any other column. You can use JavaScript expressions, and even call into Java for advanced business logic.</li><br />
						<li>Parameters - SQL SELECT statements can include input parameters that pass data into the query. They are marked using the SQL "?" symbol in the query. This page lets you give the parameters a name, a default value, and so on. There must be a one-to-one correspondence between entries on this page and the "?" symbols in your query.</li><br />
						<li>Filters - Additional filters that BIRT applies to your data. Filters restrict the data passed to the report. The WHERE clause is also a filter: one executed by the database. This tab lets you define additional filters using BIRT (JavaScript) scripting.</li><br />
						<li>Output Columns - Shows the columns within the query, and lets you define a column alias for use in the report. Note that this view shows the columns as the report will see them. The Query page shows the columns as selected from the database.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Database Browser</h2>
					<p>Switch to the Query page if you're not already there. This page provides a simple database browser.
					<ul class="eclipse-list">
						<li>Expand the Sample data source to see the schemas within this database. There is only one: "CLASSICMODELS".</li><br />
						<li>Expand "CLASSICMODELS" to see the list of tables in the database.</li><br />
						<li>Expand a table to see its columns.</li><br />
						<li>This editor supports drag and drop.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Test the Query</h2>
					<p>With the data set editor open, do the following:
					<ul class="eclipse-list">
						<li>Click on the Preview Results item.</li>
					</ul>
					</p>
					<p>The preview page appears. This page shows the columns selected in your query listed across the top. The actual rows in your query appear down the page.
					<ul class="eclipse-list">
						<li>Verify that the list of customers appears.</li><br />
						<li>Click OK to close the data set editor.</li>
					</ul>
					</p>
					<p>If an error dialog appears, check the following:
					<ul class="eclipse-list">
						<li>Your Eclipse is installed in a directory without spaces.</li><br />
						<li>You have typed the SQL statement as shown above.</li><br />
						<li>You have not put a semi-colon at the end of your statement.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Edit a Data Set</h2>
					<p>Your new data set appears in the Data Explorer along with your data source. We can use the data set editor to change the data set, and to test it to make sure it returns the correct data.
					<ul class="eclipse-list">
						<li>Find or open the Data Explorer.</li><br />
						<li>Open the Data Sets node.</li><br />
						<li>Double-click the Customers data set. The Data Set editor opens.</li>
					</ul>
					</p>
					
					<p><br /><a href="tutorial-4.php"><< Previous: Building a Data Source</a> | <a href="tutorial-6.php">Next: Building a Table >></a></p>
					
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