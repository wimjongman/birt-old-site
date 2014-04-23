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
					<h1 class="eclipse-title-main">Building a Table</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="/birt/test/documentation/install.php">Installation Guide</a></li>
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
		                    <li><a href="/birt/test/documentation/integrating/">Integrating BIRT</a></li>
		                    <li><a href="/birt/test/documentation/sample-database.php">Sample Database</a></li>
		                    <li><a href="/birt/test/documentation/reference.php">Technical Reference</a></li>
		                    <li><a href="/birt/test/documentation/building-birt.php">Building BIRT</a></li>
		           		</ul>

			        </div>

					<h2 class="topic-section-header padding-top-small">Report Layout</h2>
					<p>Our customer listing report will display customer information in the form of a table: just like an HTML table, with the added ability to iterate over report data. The Grouped Listing template we chose earlier created the table for us, we just need to fill in the details. Before we do, let's introduce the various BIRT report items.</p>
					
					<h2 class="topic-section-header padding-top-small">Report Items (Elements)</h2>
					<p>BIRT provides a variety of report items or Elements for use when creating your report. Report items appear in the Palette view. Report items include:
					<ul class="eclipse-list">
						<li>Label - Displays a simple piece of text such as "Customer Name".</li><br />
						<li>Text - Text that can include HTML formatting and computed values. Used to create headings, form letters, "mail-merge" effects, etc.</li><br />
						<li>Dynamic Text - Displays a database column that can contain HTML formatted (CLOB) data. Allows for advanced CLOB data manipulation through expressions.</li><br />
						<li>Data - Displays a database column or a computed value. Provides formatting.</li><br />
						<li>Image - Any kind of image supported by a web browser. Images can be embedded in the report, referenced through a URI, read from the resource folder or retrieved from a BLOB field in a data set.</li><br />
						<li>Grid - Provides a tabular arrangement of report items, much like an HTML table. This element doesnt iterate over data sets like a List or a Table.</li><br />
						<li>List - Presents data from a data set in any kind of format. Used when the layout for each row is more sophisticated than a simple table row. This Element will iterate over a bound Data Set.</li><br />
						<li>Table - Presents data from a data set in the form of a table. Can contain grouping levels. Like an HTML table that has a table row for each data set row. This Element, like a list will iterate over a bound Data Set.</li><br />
						<li>Chart - Displays a business chart such as a pie chart, line chart, etc.</li>
					</ul>
					</p>
					<p>This tutorial will use all the elements except for List, Chart and Dynamic Text.</p>
					
					<h2 class="topic-section-header padding-top-small">Create the Table Detail</h2>
					<p>The New Report dialog created a starter report that contains a table item with one level of grouping. If we'd chosen a blank report, we could create the table simply by dragging it from the palette.</p>
					<p>The next step is to add content to the table. We'll start with the detail band which repeats to display each row from our data set. Here's how:
					<ul class="eclipse-list">
						<li>Display the Data Explorer if it's not already visible.</li><br />
						<li>Expand the Data Sets node of the tree.</li><br />
						<li>Expand the entry for the Customers data set that we created. This will display the columns available from the data set.</li><br />
						<li>Select the CUSTOMERNAME column.</li><br />
						<li>Locate the detail band within the table. (It is has a gray "Detail Row" label.)</li><br />
						<li>Drag the CUSTOMERNAME column into the detail band cell second from the left. This operation adds a Data Element and a Label Element to the Table Element. The Binding Editor maps the Data Element to the Data Set row column CUSTOMERNAME. The Binding Editor is available by selecting the Binding tab in the Property Editor for the Table. You can change this value by selecting the ellipse next to the expression within the Binding Editor. You will now see that the Table Element contains the new Label Element and the new Data Element.</li><br />
						<li>Drag the PHONE column into the rightmost cell of the detail band.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Create the State Group</h2>
					<p>We want our customer listing to be grouped by state, then city. Using a group causes all rows within the same state to appear together. Let's create the group header for states:
					<ul class="eclipse-list">
						<li>Locate the group header row in your table. It has a light gray "Group Header Row" label.</li><br />
						<li>Drag the STATE column into the leftmost cell within the Group Header row.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Creating Groups on your Own</h2>
					<p>We are using the group created for us by the New Report dialog. If we'd started by dragging the table from the palette, we'd create this first group as we'll explain in the next section.</p>
					<p>You must bind (associate) the table to a data set before you can create a group. The binding happened automatically when we dropped the first data set column into the table. However, if you build a table on your own, you can use the Binding tab in the Property Editor to bind the table to a data set.</p>
					
					<h2 class="topic-section-header padding-top-small">Create the City Group</h2>
					<p>Next, we'll create a city group within the state. This groups customers first by state, then by city.
					<ul class="eclipse-list">
						<li>Hover the cursor over the table and a Table tab will be displayed.</li><br />
						<li>Click on the Table tab to display the table scaffolding.</li><br />
						<li>Select the Property Editor->Binding Tab. You will see that the Table is bound to the Customers Data Set. Under Data Column Binding you will notice the three Table columns that have already been created.</li><br />
						<li>Select Add. Then Data Binding dialog will be displayed.</li><br />
						<li>Enter City in the Name field and select ellipse next to Expression. The BIRT Expression Builder will be displayed.</li><br />
						<li>Select Available Data Sets under Category, Customers under Sub-Category and then double-click on the CITY column.</li><br />
						<li>Select OK and change the Binding name from New Binding to CITY. The Data Set Row column CITY is now available to be used within the Table.</li><br />
						<li>Right-click on the row header for the state group header and a context menu will be displayed.</li><br />
						<li>From the context menu choose Insert Group->Below. The Group Details dialog appears.</li><br />
						<li>Chose the CITY column in the Group On field and type City in the Name field.</li><br />
						<li>Click OK.</li>
					</ul>
					</p>
					<p>Notice that BIRT automatically inserted a Data element for the city group.</p>
					
					<h2 class="topic-section-header padding-top-small">Add a Table Column</h2>
					<p>We need another table column to display our group heading:
					<ul class="eclipse-list">
						<li>Ensure the table scaffolding appears. Right-click on the shaded column header for the first column.</li><br />
						<li>Choose Insert->Column to the Right from the context menu. A new column appears.</li><br />
						<li>Move the CITY Data Element (the Element in the first column of the second group header) to the second column of the second group header by dragging it.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Create Column Headings</h2>
					<p>We're almost done with the basic setup of our table. We just need to refine our column headings. BIRT added headings for us for each column we added to the table.
					<ul class="eclipse-list">
						<li>Double-click on the first column header text to change it. Type "State" and press Enter.</li><br />
						<li>Drag a label from the palette into the second column heading, type "City" and press Enter.</li><br />
						<li>Change the third column header to "Name".</li><br />
						<li>Change the last column header to "Phone".</li>
					</ul>
					</p>
					
					<p><br /><a href="tutorial-5.php"><< Previous: Building a Data Set</a> | <a href="tutorial-7.php">Next: Testing Your Report >></a></p>
					
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