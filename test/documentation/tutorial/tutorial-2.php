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
					<h1 class="eclipse-title-main">Creating a Report</h1>
					
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

					<h2 class="topic-section-header padding-top-small">Create a Project</h2>
					<p>Eclipse uses projects to organize your files. So, the first step is to create a new project. For this demo, let's create a project called "My Reports":
					<ul class="eclipse-list">
						<li>Choose File->New->Project. The new project dialog appears.</li><br />
						<li>Open the "Business Intelligence and Reporting Tools" group and choose "Report Project".</li><br />
						<li>Click Next.</li><br />
						<li>Type "My Reports" (without the quotes) as the project name.</li><br />
						<li>Click Finish.</li><br />
						<li>Click OK if asked to switch to the Report Design perspective. (This occurs if you create a BIRT project while in a perspective other than Report Design.)</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Create a Report</h2>
					<p>We're now ready to create our first report:
					<ul class="eclipse-list">
						<li>Choose File->New->Report. The new report dialog appears.</li><br />
						<li>In the tree view, choose the project we just created: My Reports.</li><br />
						<li>Enter the following in the file name field: Customers.rptdesign.</li><br />
						<li>Click Next.</li>
					</ul>
					</p>
					<p>You can create a report in three ways: as a blank report, by using a BIRT-defined template, or by copying one of your report designs. In this tutorial we will use a Template descibed in the next section.</p>
					
					<h2 class="topic-section-header padding-top-small">Choose a Template</h2>
					<p>The next page of the New Report dialog presents a selection of report templates. Before we choose the one we want, let's walk though what's available.
					<ul class="eclipse-list">
						<li>My First Report - Starts a report template that takes you through a tutorial using on-line help. (That tutorial will eventually replace this one.)</li><br />
						<li>Blank Report - Creates a blank report with no predefined content.</li><br />
						<li>Simple Listing - A tabular listing with no grouping.</li><br />
						<li>Grouped Listing - A tabular listing with grouping. Grouping shows repeated values just once. Grouping also allows you to create subtotals.</li><br />
						<li>Dual Column Listing - Produces a listing with two columns side-by-side.</li><br />
						<li>Chart & Listing - A tabular listing that adds a chart to the top of the report.</li><br />
						<li>Dual Column Chart & Listing - Combines charts and tables so you can display two sets of related data in a single report.</li><br />
						<li>Side by Side Chart & Listing - Creates a grouped report where each group contains a chart and a listing side by side.</li>
					</ul>
					</p>
					<p>We're now ready to choose our template:
					<ul class="eclipse-list">
						<li>Select the Grouped Listing.</li><br />
						<li>Click Finish.</li>
					</ul>
					</p>
					<p>BIRT opens your new report in the Eclipse workspace.</p>
					<p><br /><a href="tutorial-1.php"><< Previous: Introduction</a> | <a href="tutorial-3.php">Brief UI Tour >></a></p>	
					
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