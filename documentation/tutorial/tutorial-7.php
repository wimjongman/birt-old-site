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
					<h1 class="eclipse-title-main">Testing Your Report</h1>
					
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

					<p>We're now ready to test the report layout. We verified the data set earlier, so now we want to verify that the report is presenting the data as we expect.</p>
					<p>We preview the report by clicking on the Preview tab in the lower left corner of the report editor. This report has no parameters, but if it did, they could be modified by selecting the Show Report Parameters button.</p>
					<p>The window that appears is an embedded web browser, which displays the report in HTML format. The report appears as a single page. This works best for smaller data sets. Since the sample database has quite a bit of data, we used a WHERE clause to limit the results. We could also use a report parameter or a data set filter to limit the amount of data displayed at any one time.</p>
					<p>There are a number of ways we can improve the report's appearance:</p>
					<p>
						<ul class="eclipse-list">
							<li>Add a title to the top of the report.</li><br />
							<li>Add some color to enhance the column headings.</li><br />
							<li>Shrink the size of the city and state columns.</li><br />
							<li>Add some color to make the state and city group headers stand out.</li><br />
							<li>Format the phone numbers.</li><br />
							<li>Sort customers by name.</li>
						</ul>
					</p>
					<p>Before we apply these aesthetic enhancements, let's look at other ways to preview the report.</p>
					
					<h2 class="topic-section-header padding-top-small">Preview as HTML</h2>
					<p>The Preview tab is handy for a quick review of your report. BIRT runs the report each time you switch to Preview. However, you can have either the Layout or the Preview tab open, but not both.</p>
					<p>Instead, we can preview the report in a separate window. Find the Preview button in the toolbar. Use the little arrow next to it to open the pull-down. You can then Preview as HTML in a separate window. This allows you to switch back and forth between your layout editor and your preview without rerunning the report.</p>
					
					<h2 class="topic-section-header padding-top-small">Preview in Web Viewer</h2>
					<p>This option is similar to the one above. It allows the report to be previewed as HTML in a separate browser window using the BIRT Web Viewer. The viewer provides powerful navigation capabilities such as TOC, Previous Page, Next Page, Goto Page as well as search and export capabilities.</p>
					<p>To preview the report in the Web Viewer use the toolbar Preview button and select the Web Viewer option or alternatively invoke File->Preview in Web Viewer.</p>
					
					<h2 class="topic-section-header padding-top-small">Preview as PDF</h2>
					<p>You can also choose Preview as PDF. This converts the layout to a multi-page PDF format.</p>
										
					<p><br /><a href="tutorial-6.php"><< Previous: Building a Table</a> | <a href="tutorial-8.php">Next: Setting Visual Properties >></a></p>
					
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