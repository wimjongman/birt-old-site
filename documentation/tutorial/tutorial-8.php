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
					<h1 class="eclipse-title-main">Setting Visual Properties</h1>
					
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

					<h2 class="topic-section-header padding-top-small">Resizing Table Columns</h2>
					<p>Let's adjust the size of the table columns. Tables & columns can be sized using absolute sizes (inches, centimeters), or relative sizes (percentage of the width of the page.) Here, we'll adjust the column widths by directly changing them in the report layout. To do this:
					<ul class="eclipse-list">
						<li>Click the Layout tab to switch back to the report layout.</li><br />
						<li>Display, then click on the table tab to display the "scaffolding."</li><br />
						<li>Find the black line that separates the "City" and "State" column headings.</li><br />
						<li>With the cursor over this line, hold down the left mouse button and resize the column to be about big enough to hold the two-letter state code and label.</li><br />
						<li>Repeat the above to resize the city column.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Setting the Background Color</h2>
					<p>Let's dress up the state heading by setting the row's background color. To do this:
					<ul class="eclipse-list">
						<li>Select the state group header row (first group header) by clicking on the shaded box to the left of the row. (Remember to display, then click on the table tab to display the scaffolding.)</li><br />
						<li>Locate or open the Property Editor.</li><br />
						<li>A list of property types appears at the left of the view. Click on the General group.</li><br />
						<li>Find the Background color field. Click on the empty gray button to display the color picker.</li><br />
						<li>Pick the blue color third from the right in the top row. This is a standard color, but is a bit too dark for our needs.</li><br />
						<li>Click on the "Define Custom Colors" button.</li><br />
						<li>Take the right-most slider (saturation) and move it up to produce a very light blue.</li><br />
						<li>Click OK.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Setting the Font</h2>
					<p>Now, let's give the state a bold font. We'll also dress up the city group heading by giving it a dark blue, bold, larger font. To do this:
					<ul class="eclipse-list">
						<li>Select the state Data Element. (it's located below the state label.)</li><br />
						<li>Switch to the General property group in the Property Editor.</li><br />
						<li>Find the Font size field. Change the size to "Large".</li><br />
						<li>Click the [B] (bold) button to make the font bold.</li><br />
						<li>Select the city Data Element.</li><br />
						<li>Again, switch to the General property group.</li><br />
						<li>Set the font size to Large.</li><br />
						<li>Click on the Font Color button.</li><br />
						<li>The color chooser again opens. Again choose the blue that is third from the right in the top row.</li><br />
						<li>Click OK.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Formatting Data</h2>
					<p>We want to format the phone numbers so that they have correct North American format: (123) 555-1212. We do this by applying a string format to the phone number field. Formats are also available for dates and numbers.
					<ul class="eclipse-list">
						<li>Select the phone number Data Element.</li><br />
						<li>Switch to the Format String page in the Property Editor.</li><br />
						<li>Choose Custom for Format String as.</li><br />
						<li>Choose Phone Number from the list.</li><br />
						<li>In the Format Code field, add a space after the closing parenthesis to produce the following:<br /><br />
						(@@@) @@@-@@@@</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Setting a Border</h2>
					<p>Next, let's put a "drop shadow" border around our table.
					<ul class="eclipse-list">
						<li>Click on the table tab.</li><br />
						<li>Select the Borders page in the Property Editor.</li><br />
						<li>Set the Style field to a solid line. (This is the default.)</li><br />
						<li>Set the Color field to a black. (Use the color name pull-down, or choose the bottom left color in the color picker.)  (This is the default.)</li><br />
						<li>Set the Width property to the thinnest line.</li><br />
						<li>Click the top, bottom, left and right border buttons. A thin border appears around the table.</li><br />
						<li>Switch to the Properties view (Window->Show View->Properties) to specify that a wider border should be used for the bottom and right sides.</li><br />
						<li>Click on the table tab to initialize the Properties view with the table's properties.</li><br />
						<li>Expand the Box node in the Properties View and set the Border bottom width and Border left width fields to medium.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">More on Properties</h2>
					<p>BIRT provides a wide variety of properties for formatting report items. The properties are based on the <a href="http://www.w3.org/TR/CSS21/" target="_blank">W3C CSS</a> (Cascading Style Sheet) standard. If you've ever used CSS to format HTML, you are well on your way to understanding formatting in BIRT.</p>
					
					<p><br /><a href="tutorial-7.php"><< Previous: Testing Your Report</a> | <a href="tutorial-9.php">Next: Setting Data Properties >></a></p>
					
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