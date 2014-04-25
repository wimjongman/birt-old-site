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
		$metaTitle 		= "BIRT and Actuate";
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
					<h1 class="eclipse-title-main">BIRT and Actuate</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="index.php">What is BIRT?</a></li>
		                    <li><a href="design.php">BIRT Design Overview</a></li>
		                    <li><a href="architecture.php">Architecture Overview</a></li>
		                    <li><a href="designer.php">Designer Overview</a></li>
		                    <li><a href="customization.php">Customization Overview</a></li>
		                    <li><a href="extensibility.php">Extensibility Overview</a></li>
		                    <li><a href="project-organization/">Project Organization</a></li>
		                    <li><a href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a></li>
		                    <li><a href="birt-and-actuate.php">BIRT and Actuate</a></li>		                    
		                </ul>
			        </div>

			        <p>Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company Actuate: The BIRT Company </p>
			        
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