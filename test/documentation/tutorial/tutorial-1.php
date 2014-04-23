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
					<h1 class="eclipse-title-main">Introduction</h1>
					
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

					<p>This brief tutorial walks you through building a simple report with BIRT. It introduces the major UI features, and many of the BIRT reporting elements. At the completion of this tutorial, you should be able to start building your own reports using your own database.</p>
					<p>We'll create a simple customer listing report, with the customers grouped by state and city. For each customer, we'll display a name and phone number.</p>
					
					<h2 class="topic-section-header padding-top-small">Install BIRT</h2>
					<p>If you have not yet done so, install Eclipse, GEF, EMF and BIRT. You'll find complete instructions for doing so on the <a href="/birt/test/documentation/install.php" target="_blank">BIRT Install</a> page.</p>
					
					<h2 class="topic-section-header padding-top-small">Open BIRT</h2>
					<p>BIRT is a perspective within Eclipse. To open it, use the Window item on the Eclipse main menu. Choose Open Perspective, then Report Design. If report Design does not appear directly in the Open Perspective window, then choose Other... A list of perspectives will appear. Choose Report Design.</p>
					<p>Eclipse will switch to display the BIRT perspective.</p>
					
					<h2 class="topic-section-header padding-top-small">Example Report</h2>
					<p>If you get stuck as you work through the tutorial, or if you want to see the finished report right away, simply download it:
					<ul class="eclipse-list">
						<li>Use your browser to download the report: <a href="http://www.eclipse.org/birt/test/resources/documentation/tutorial/customers.rptdesign" target="_blank">customers.rptdesign</a>.</li><br />
						<li>Save the file into an Eclipse project directory. (See the next page if you don't yet have a project.)</li><br />
						<li>Your browser may store this as an XML file. If so, rename it back the the name above.</li><br />
						<li>Within Eclipse, select your project in the Navigator view and choose Refresh from the right-click context menu.</li><br />
						<li>Double-click the report to open it in the BIRT report designer.</li>
					</ul>
					</p>
					<p><br /><a href="tutorial-2.php">Next: Creating a Report >></a></p>
					
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