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
					<h1 class="eclipse-title-main">What is BIRT?</h1>
					
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
		                    <li><a target="_blank" href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a></li>
		                    <!--<li><a href="birt-and-actuate.php">BIRT and Actuate</a></li>-->		                    
		                </ul>

			        </div>

			        <h2 class="topic-section-header padding-top-small">BIRT: The Project</h2>
					<p>BIRT is an open source software project that provides the BIRT technology platform to create data visualizations and reports that can be embedded into rich client and web applications, especially those based on Java and Java EE. BIRT is a top-level software project within the Eclipse Foundation, an independent not-for-profit consortium of software industry vendors and an open source community.</p>
					<p>The project is sponsored by Actuate along with contributions from IBM, and Innovent Solutions. BIRT is supported by an active community of users here at Eclipse.org and at the <a href="http://developer.actuate.com" target="_blank">BIRT Developer Center</a>. It is licensed under the Eclipse Public License (EPL).</p>
					<a href="project-organization.php">Project Organization</a> | <a target="_blank" href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a>
					
					<h2 class="topic-section-header padding-top-small">BIRT: The Groundswell</h2>
					<p>Today, BIRT technology platform is one of the most widely adopted data visualization and reporting technologies with over 12 million downloads and over 2.5M developers across 157 countries. BIRT also has a large, active and growing developer community representing all types of organizations. Major technology companies such as IBM, Cisco, S1 and ABS Nautical Systems have incorporated BIRT into their product lines.<br /><br />
					<a href="http://www.actuate.com/partners/birt-adopters/" target="_blank">See a list of BIRT Adopters</a></p>
					
					<iframe width="560" height="315" src="//www.youtube.com/embed/_gvL58G41CA" frameborder="0" allowfullscreen></iframe>

					<h2 class="topic-section-header padding-top-small">BIRT: The Technology Platform</h2>
					<p>BIRT has two main components: a visual report designer for creating BIRT Designs, and a runtime component for generating those designs that can be deployed to any Java environment. The BIRT project also includes a charting engine that is both fully integrated into the BIRT designer and can be used standalone to integrate charts into an application.</p>
					<p>BIRT designs are persisted as XML and can access a number of different data sources including JDO datastores, JFire Scripting Objects, POJOs, SQL databases, Web Services and XML.</p>
					<a href="architecture.php">Learn more about BIRT Architecture</a>

					<h2 class="topic-section-header padding-top-small">BIRT: The Philosophy</h2>
					<p>BIRT is about open standards. It integrates with any data source in any environment. BIRT represents a commitment to the highest standards in software design and quality.</p>


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