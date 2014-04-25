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
					<h1 class="eclipse-title-main">Next Steps</h1>
					
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

					<h2 class="topic-section-header padding-top-small">Wrap Up</h2>
					<p>In this tutorial we created a simple listing that touched on many of the features of the BIRT Report Designer and Report Object Model (ROM). Now that you are familiar with BIRT, you're ready to learn more about it.</p>
					
					<h2 class="topic-section-header padding-top-small">Next Steps</h2>
					<p>Additional BIRT topics include:
					<ul class="eclipse-list">
						<li>Charting with interactivity</li><br />
						<li>Scripting and Expressions using JavaScript</li><br />
						<li>Custom data access extensions</li><br />
						<li>Advanced formatting</li><br />
						<li>Advanced queries</li><br />
						<li>Multi-part reports (multiple lists, side-by-side lists, master-detail reports, etc.)</li><br />
						<li>Conditional formatting</li><br />
						<li>Extended data items</li><br />
						<li>Dynamic and cascaded parameterss</li><br />
						<li>Joined Data Sets</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">More Information</h2>
					<p>A number of resources are available to help you learn more:
					<ul class="eclipse-list">
						<li>The extensive online help included within BIRT. Select Help->Help Contents from the Eclipse menu and then click on the BIRT Developer Guide.</li><br />
						<li><a href="/birt/documentation/reference.php" target="_blank">Reference material, including ROM (Report Object Model) specifications.</a></li><br />
						<li><a href="/birt/demos/" target="_blank">Additional example reports.</a></li><br />
						<li><a href="/birt/community/" target="_blank">BIRT newsgroup</a></li><br />
					</ul>
					</p>
					
					<p><br /><a href="tutorial-13.php"><< Previous: Using a Text Item</a></p>
					
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