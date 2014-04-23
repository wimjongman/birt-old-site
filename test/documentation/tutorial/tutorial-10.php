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
					<h1 class="eclipse-title-main">Using Styles</h1>
					
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

					<h2 class="topic-section-header padding-top-small">About Styles</h2>
					<p>We mentioned that BIRT uses CSS to define the styles for report items. BIRT also allows you to define the properties in a style sheet, then to apply the style to a report item, just as in HTML. The result is that you create the style once and use it multiple times. If you need to change the look of a report, you can change the style in one place rather then in many different report items. If you've defined your own styles when creating HTML pages, you're well on your way to understanding the BIRT style system. Styles can also be placed into BIRT libraries (Using Themes) and shared across reports.</p>
					
					<h2 class="topic-section-header padding-top-small">Creating a Style</h2>
					<p>Let's use the style feature to format the table header. Let's make the table header a blue bar with contrasting text. Instead of formatting each label one-by-one, we'll define a style, then apply it. To do this:
					<ul class="eclipse-list">
						<li>Select the first label (State label) in the Table Header band.</li><br />
						<li>Right-click and select Style->New Style from the context menu.</li><br />
						<li>The Style Properties dialog appears.</li><br />
						<li>Enter "Header" in the Custom Style (Name) field on the General page and make sure that the Custom Style radio button is selected.</li><br />
						<li>Switch to the Background page from the left most column of the New Style dialog.</li><br />
						<li>Click the Background color button and choose the same blue: third from the right in the top row.</li><br />
						<li>Switch to the Font page.</li><br />
						<li>Set the Color to white.</li><br />
						<li>Set the Weight to Bold.</li><br />
						<li>Click OK.</li>
					</ul>
					</p>
					<p>Notice that the new style has been applied to the label.</p>
					
					<h2 class="topic-section-header padding-top-small">Applying a Style</h2>
					<p>Next, let's apply the style to the other three header labels. (We could have done this in a single step by selecting all four when we defined the style. We're doing it in two steps just to show how it's done.)
					<ul class="eclipse-list">
						<li>Select the other three labels: click on the City label, then use Ctrl+click to add the other two to the selection.</li><br />
						<li>Choose Style->Apply Style->Header from the context menu.</li>
					</ul>
					</p>
					<p>The other three cells are now also formatted.</p>
					
					<h2 class="topic-section-header padding-top-small">Editing a Style</h2>
					<p>Suppose we wanted to change the style we just created. Here's how we find and change it.
					<ul class="eclipse-list">
						<li>Find or open the Outline view.</li><br />
						<li>Scroll down to the bottom and find the Styles node.</li><br />
						<li>Open the Styles node to reveal our styles.</li><br />
						<li>Double-click the style you want to edit.</li><br />
						<li>You can also edit a style by selecting Style->Edit Style->Style Name from the context menu when a report item is selected.</li>
					</ul>
					</p>
					
					<p><br /><a href="tutorial-9.php"><< Previous: Setting Data Properties</a> | <a href="tutorial-11.php">Next: Cascading Styles >></a></p>
					
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