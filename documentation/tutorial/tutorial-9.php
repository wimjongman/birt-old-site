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
					<h1 class="eclipse-title-main">Setting Data Properties</h1>
					
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
			        
			        <p>In addition to the visual properties we just saw, BIRT provides a set of data-related properties for each report item. We'll use these to control the sort order of the customers within our report.</p>
			        <p>Data sets in BIRT are reusable: you can use the same data set multiple times. For example, suppose you want to show year-to-date (YTD) sales three ways: by month, by sales rep, and as a chart. With BIRT, you define the data set once, but present it three times. Each use of the data set can provide data properties that customize the data set to that particular use.</p>
			        <p>Data properties include:
			        	<ul class="eclipse-list">
			        		<li>Data set binding: lets you specify the data set to use with any given report item.</li><br />
			        		<li>Parameter binding: you can pass data into the data set. For example, you can create a "master/detail" subreport by using data set parameters to pass data from the current row in the master report to the detail for the subreport. Or as another example, you can obtain a list of customers from one database, then have the subreport display orders from a different database.</li><br />
			        		<li>Filters: provide filter conditions unique to a given presentation. For example, a list of transactions might list all transactions, but then use filters to display sales in one chart, returns in another.</li><br />
			        		<li>Groups: provide ability to create subtotals as we have already seen.</li><br />
			        		<li>Sorting: controls the order of the detail rows within a table. This is the property we'll use.</li>
			        	</ul>
			        </p>

					<h2 class="topic-section-header padding-top-small">Setting the Detail Sort</h2>
					<p>We're ready to specify the sort order for customers within our report.
					<ul class="eclipse-list">
						<li>Select the table. (by clicking on the table tab in the Layout Editor.)</li><br />
						<li>Choose the Sorting tab within the Property Editor. (Note: Sorting is a tab on the top of the Property Editor and not a page on the left as we've used thus far.)</li><br />
						<li>Click the Add button to add a new sort condition.</li><br />
						<li>Use the pull-down under Sort Key to choose "CUSTOMERNAME".</li><br />
						<li>Leave the Sort Direction at Ascending.</li>
					</ul>
					</p>
					
					<p><br /><a href="tutorial-8.php"><< Previous: Setting Visual Properties</a> | <a href="tutorial-10.php">Next: Using Styles >></a></p>
					
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