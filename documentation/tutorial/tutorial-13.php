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
					<h1 class="eclipse-title-main">Using a Text Item</h1>
					
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
			        
			        <p>The final step in our report is to create the actual header text. We want it to look something like this:</p>
			        <p><FONT size="6" color=blue>Customer Listing</FONT><br />
			        <I>For internal use only</I>
			        </p>
			        
			        <p>We could create this with two labels. But, we'll take this opportunity to try out the Text element which allows us to use HTML formatting within the text.</p>

					<h2 class="topic-section-header padding-top-small">Create a Text Item</h2>
					<p>Let's create our text item. To do this:
					<ul class="eclipse-list">
						<li>Drag a Text Element from the palette and drop it into the center cell within our grid.</li><br />
						<li>The Edit Text Item dialog appears.</li><br />
						<li>In the top combo box, choose HTML/Dynamic Text. The dialog displays a variety of HTML tags we can insert.</li><br />
						<li>Using the button next to Formatting, pull down the list and choose Layout.</li><br />
						<li>Click the &lt;CENTER&gt; tag to add it.</li><br />
						<li>From the list near the top of the dialog, insert a &lt;FONT&gt; element.</li><br />
						<li>In the attributes provided, set the size to 6 and the color to blue. Erase the face attribute. The text should now look like this:
					
					
							<blockquote>
								&lt;CENTER&gt;<br />
								&lt;FONT size="6" color=blue&gt;<br /><br />

								&lt;/FONT&gt;<br />
								&lt;/CENTER&gt;<br />
							</blockquote>
						</li>
						<li>Continue using the editor to create the text below:
							<blockquote>
								&lt;CENTER&gt;<br />
								&lt;FONT size="6" color=blue&gt;<br />
								Customer Listing<br />
								&lt;/FONT&gt;<br />
								&lt;BR&gt;<br />
								&lt;I&gt;For internal use only&lt;/I&gt;<br />
								&lt;/CENTER&gt;<br />
							</blockquote>
						</li>
						<li>Click OK and save your changes.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Dynamic Text</h2>
					<p>While we won't use it in this tutorial, there is one other feature of Text Elements to note. Select the Dynamic Text category and you'll see a tag. This allows you to insert expressions directly into your HTML. For example, to display an address line in US format, we could type:</p>
					<blockquote>
						&lt;value-of&gt;row["city"]&lt;/value-of&gt;,<br>
						&lt;value-of&gt;row["state"]&lt;/value-of&gt;<br>
						&lt;value-of format="@@@@@-@@@@"&gt;row["zip"]&lt;value-of&gt;
					</blockquote>
					<p>The row values correspond to the name column within the Binding Editor for the given report container element. So for example if we added a Text Element to our Table, we could use row["CUSTOMERNAME"] within the value-of tag.</p>
					
					<h2 class="topic-section-header padding-top-small">Final Test</h2>
					<p>We're now ready to give the report a final test. Click the Preview tab to see the report with formatting applied.</p>
					
					<p><br /><a href="tutorial-12.php"><< Previous: Using a Grid</a> | <a href="tutorial-14.php">Next: Next Steps >></a></p>
					
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