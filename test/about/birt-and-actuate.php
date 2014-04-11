<?php
if ($_SERVER['REMOTE_ADDR'] != "72.209.186.124") { 
 echo "You don't have access to view this page!"; 
 exit(); 
}
session_start();

require_once( $_SERVER['DOCUMENT_ROOT'] . "birt/test/common/config.php");
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
		                    <li><a href="project-organization.php">Project Organization</a></li>
		                    <li><a href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a></li>
		                    <li><a href="birt-and-actuate.php">BIRT and Actuate</a></li>		                    
		                </ul>
			        </div>

			        <h2 class="topic-section-header padding-top-small">BIRT: The Project</h2>
					<p>BIRT is an open source software project that provides the BIRT technology platform to create data visualizations and reports that can be embedded into rich client and web applications, especially those based on Java and Java EE. BIRT is a top-level software project within the Eclipse Foundation, an independent not-for-profit consortium of software industry vendors and an open source community.</p>
					<p>Actuate founded and co-leads the BIRT project.</p>
					<p>The project is supported by an active community of users here at Eclipse.org and at the BIRT Developer Center. It is licensed under the Eclipse Public License (EPL).</p>
					<p><a href="project-organization.php">Project Organization</a> | <a href="project-plan.php">Project Development Plan</a></p>
					
					<h2 class="topic-section-header padding-top-small">BIRT: The Groundswell</h2>
					<p>Today, BIRT technology platform is one of the most widely adopted data visualization and reporting technologies with over 12 million downloads and over 2.5M developers across 157 countries. BIRT also has a large, active and growing developer community representing all types of organizations. Major technology companies such as IBM, Cisco, S1 and ABS Nautical Systems have incorporated BIRT into their product lines.</p>
					<p><a href="http://www.actuate.com/partners/birt-adopters/" target="_blank">Click here to see a list of BIRT Adopters</a></p>

					<h2 class="topic-section-header padding-top-small">BIRT: The Technology Platform</h2>
					<p>BIRT has two main components: a visual report designer for creating BIRT Designs, and a runtime component for generating those designs that can be deployed to any Java environment. The BIRT project also includes a charting engine that is both fully integrated into the BIRT designer and can be used standalone to integrate charts into an application.</p>
					<p>BIRT designs are persisted as XML and can access a number of different data sources including JDO datastores, JFire Scripting Objects, POJOs, SQL databases, Web Services and XML.</p>
					<p><a href="architecture.php" target="_blank">Click here to learn more about BIRT Architecture</a></p>

					<h2 class="topic-section-header padding-top-small">BIRT: The Actuate Product Line</h2>
					<p>Today, the complete Actuate product line draws on BIRT as a key component. Actuate’s commercial product suite, leverages BIRT as its sole design environment for building applications that deliver insights and analytics through interactive data visualizations and reports.</p>
					<p>Delivering truly personalized analytics throughout and beyond the organization stresses traditional application and business intelligence platforms beyond their limits. Actuate speeds delivery of these applications by resolving the deployment challenges that stall typical development projects. We deliver visually engaging, interactive content, from a variety of data sources, including big data, via a secure, massively scalable platform called BIRT iHub.</p>
					<p>To learn more about Actuate’s BIRT based product line, click <a href="birt-and-actuate.php" target="_blank">here</a></p>

					<h2 class="topic-section-header padding-top-small">BIRT: The Philosophy</h2>
					<p>BIRT is about open standards. It integrates with any data source in any environment. BIRT represents a commitment to the highest standards in software design and quality. Finally, BIRT is about developers. Actuate, The BIRT Company, stands behind the BIRT community to ensure all questions are answers, problems solved, and applications deployed quickly and reliably.</p>

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