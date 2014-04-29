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
		$metaTitle 		= "About";
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
					<h1 class="eclipse-title-main">Extensibility Overview</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="design.php">BIRT Design Overview</a></li>
		                    <li><a href="architecture.php">Architecture Overview</a></li>
		                    <li><a href="designer.php">Designer Overview</a></li>
		                    <li><a href="customization.php">Customization Overview</a></li>
		                    <li><a href="extensibility.php">Extensibility Overview</a></li>
		                    <li><a href="project-organization/">Project Organization</a></li>
		                    <li><a target="_blank" href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a></li>
		                    <!--<li><a href="birt-and-actuate.php">BIRT and Actuate</a></li>-->		                    
		                </ul>

			        </div>

					<h2 class="topic-section-header padding-top-small">Extensibility</h2>
					<p>The spectrum of reporting applications is enormous, and the BIRT team can never provide every feature needed by every application. BIRT's scripting support is one way to extend BIRT. Another is to create BIRT extensions that plug into BIRT. The project provides many extension points that can be used to extend BIRT. Some of the more common ones are listed below.</p>
					
					<h2 class="topic-section-header padding-top-small">Data Access</h2>
					<p>BIRT uses the Data Tools Open Data Access (ODA) framework for adding custom data access methods. Data access extensions include a runtime component for getting the data. They can also include custom design-time UI for building a custom query. For example, a packaged application vendor can use ODA to build data access UI that works with the vendor's own data model.</p>
					
					<h2 class="topic-section-header padding-top-small">Report Items</h2>
					<p>BIRT provides a solid set of report items for presenting data. Applications that have specific needs can create additional report items that work within the designer and engine just like BIRT's own report items. For example, a performance management application might add report items that display stop lights, gauges and other visual indications of performance metrics.</p>
					
					<h2 class="topic-section-header padding-top-small">Chart Types</h2>
					<p>The BIRT chart package provides a wide variety of chart types. However, some industries have developed very specific chart formats. Developers can create chart plug-ins that add these chart types into the BIRT charting engine.</p>
					
					<h2 class="topic-section-header padding-top-small">Output Formats</h2>
					<p>BIRT provides output in HTML, Paginated HTML, PDF, XLS, DOC, PPT, ODS, ODP, ODT, and Postscript. Many other types of output are possible: ERich Text Format (RTF), Scalable Vector Graphic (SVG), images, and more. While BIRT will add some of these over time, others may have a more limited audience. Developers can use BIRT engine interfaces to add additional converters, including those specific to a given application.</p>

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