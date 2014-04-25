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
		$metaTitle 		= "Built with BIRT";
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
					<h1 class="eclipse-title-main">Built with BIRT</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ol>
		                    <li><a href="#adopters">BIRT Adopters</a></li>
		                    <li><a href="#products">BIRT-based Products</a></li>
		                    <li><a href="#casestudies">Case Studies</a></li>
		                </ol>

			        </div>
					
					<a name="adopters"></a>
					<h2 class="topic-section-header padding-top-small">BIRT Adopters</h2>
					
					<a name="products"></a>
					<h2 class="topic-section-header padding-top-small">BIRT-based Products</h2>
					<p>There are many products that are built using BIRT. Some of those products are listed below:
					<ul class="eclipse-list">
						<li><a href="http://www.actuate.com/products/birt-designers/birt-designer-pro/" target="_blank">BIRT Designer Professional</a> (Actuate)</li>
						<li><a href="http://developer.actuate.com/deployment-center/deployment-guides/birt-viewer-toolkit/" target="_blank">BIRT Viewer Toolkit</a> (Actuate)</li>
						<li><a href="http://www.actuate.com/products/birt-ihub-visualization-platform/" target="_blank">BIRT iHub</a> (Actuate)</li>
						<li><a href="http://www.actuate.com/products/birt-ihub-ondemand/" target="_blank">BIRT onDemand</a> (Actuate)</li>
					</ul>
					</p>
					<p>If you have a BIRT-based product you'd like to include on this page, send an email to the <a href="mailto:webmaster@actuate.com?Subject=BIRT-based%20Product">BIRT webmaster</a>.</p>

					<a name="casestudies"></a>
					<h2 class="topic-section-header padding-top-small">Case Studies</h2>
					<p>If you have a BIRT-based product or are working with BIRT in your application, we want to hear from you about your products. Please visit the <a href="http://developer.actuate.com" target="_blank"BIRT Developer Center</a> for more information.</p>

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