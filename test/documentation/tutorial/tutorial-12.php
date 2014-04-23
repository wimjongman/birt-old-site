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
					<h1 class="eclipse-title-main">Using a Grid</h1>
					
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

					<h2 class="topic-section-header padding-top-small">Create a Grid</h2>
					<p>Let's add a suitable heading to our report. It will use the classic "left/center/right" layout: a logo on the left, the report title in the center, and the run date on the right. Before you do this you may want to remove the current basic heading, which simply says "Report Header". To do this:
					<ul class="eclipse-list">
						<li>Select the Grid item containing the "Report Header" which is located above your table.</li><br />
						<li>Delete it by right-clicking on it and selecting the delete option from the context menu.</li>
					</ul>
					</p>
					<p>The easiest way to create such a layout is to use a grid. A grid is like an HTML table, it tells BIRT the desired layout, and BIRT does the work to make it happen. In this case, we want a one-row grid with three columns each 1/3 the width of the page.
						<ul class="eclipse-list">
							<li>Drag a Grid item from the palette into your report above your table. The Insert Grid dialog appears.</li><br />
							<li>Choose 3 columns and 2 rows.</li><br />
							<li>Click OK.</li>
						</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Row Properties</h2>
					<p>We want the contents of the header to be top-aligned. And we'll use the second row as a spacer between the header proper and the report body:
					<ul class="eclipse-list">
						<li>Select the entire first row of the Grid that you just added.</li><br />
						<li>In the General page of the Property Editor, set the vertical alignment to Top.</li><br />
						<li>Select the second row.</li><br />
						<li>In the General page of the Property Editor, set the height to 0.25 in.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Column Properties</h2>
					<p>We want each of the three columns to be 1/3 the width of the page, and we want them to be left, center and right aligned:
					<ul class="eclipse-list">
						<li>Select the first column header.</li><br />
						<li>Switch to the General tab in the Property Editor. Notice that the width	is unset. As in HTML, if the column width is not set, BIRT will size the column to its content.</li><br />
						<li>Set the column widths to 33%. Do this by typing "33" in the width field, then selecting "%" from the adjacent pull-down.s</li><br />
						<li>Select the middle column.</li><br />
						<li>Repeat the step above to set the width to 33%.</li><br />
						<li>In the General page of the Property Editor, set the text alignment to Center.</li><br />
						<li>Select the rightmost column.</li><br />
						<li>Repeat the step above to set the width to 33%.</li><br />
						<li>In the General page of the Property Editor, set the text alignment to Right.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Insert an Image</h2>
					<p>Let's click the preview tab to see how our report looks after the formatting. Not bad, but we still need the report heading. To do this:
					<ul class="eclipse-list">
						<li>Drag an Image item from the palette into the left-most cell of your grid.</li><br />
						<li>The Image Builder dialog appears.</li><br />
						<li>Ensure that the URL radio button is selected.</li><br />
						<li>Enter the following URL: "http://www.eclipse.org/birt/tutorial/multichip-4.jpg". (don't forget to add the quotes.)</li><br />
						<li>Click the Preview button to ensure that the URL is correct.</li><br />
						<li>Click Insert to add the image to your report.</li>
					</ul>
					</p>
					<p>You can also embed an image from your local disk. Embedding the image copies the image into the report design. Using a URL is more efficient.</p>
					
					<h2 class="topic-section-header padding-top-small">Insert a Run Date</h2>
					<p>Next, let's display the current date in the right-most cell in the heading. To do this:
					<ul class="eclipse-list">
						<li>Drag a Data item from the Palette into the right-most cell of your grid.</li><br />
						<li>The New Data Item dialog will be displayed. Change the name to current_date.</li><br />
						<li>Set the Data Type column to Date Time. Select the ellipse next to the Expression. The expression builder will appear.</li><br />
						<li>Type "new Date( )" (without the quotes) to display the current date.</li><br />
						<li>Click OK.</li><br />
						<li>Set the date format. Select the Format DateTime page within the Property Editor.</li><br />
						<li>Choose the date format that looks like this: May 12, 2005. (The actual date will be today's date.) This is the BIRT "Medium Date" date format.</li>
					</ul>
					</p>
					<p>BIRT uses Java formatting for dates, numbers and strings. In addition, BIRT adds a number of specialized, locale-aware date formats described in the <a href="/birt/test/documentation/ROM_Styles_SPEC.pdf" target="_blank">ROM Styles Specification</a>.</p>
					
					<p><br /><a href="tutorial-11.php"><< Previous: Cascading Styles</a> | <a href="tutorial-13.php">Next: Using a Text Item >></a></p>
					
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