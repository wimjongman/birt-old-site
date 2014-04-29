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
					<h1 class="eclipse-title-main">About</h1>
					
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

			        <h2 class="topic-section-header padding-top-small">What is BIRT?</h2>
			        
			        <h3>BIRT: The Project</h3>
					<p>BIRT is an open source software project that provides the BIRT technology platform to create data visualizations and reports that can be embedded into rich client and web applications, especially those based on Java and Java EE. BIRT is a top-level software project within the Eclipse Foundation, an independent not-for-profit consortium of software industry vendors and an open source community.</p>
					<p>The project is sponsored by Actuate along with contributions from IBM, and Innovent Solutions. BIRT is supported by an active community of users here at Eclipse.org and at the <a href="http://developer.actuate.com" target="_blank">BIRT Developer Center</a>. It is licensed under the Eclipse Public License (EPL).</p>
					<p><a href="project-organization.php">Project Organization</a> | <a target="_blank" href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a></p>
					
					<h3>BIRT: The Groundswell</h3>
					<p>Today, BIRT technology platform is one of the most widely adopted data visualization and reporting technologies with over 12 million downloads and over 2.5M developers across 157 countries. BIRT also has a large, active and growing developer community representing all types of organizations. Major technology companies such as IBM, Cisco, S1 and ABS Nautical Systems have incorporated BIRT into their product lines.<br /><br />
					<a href="http://www.actuate.com/partners/birt-adopters/" target="_blank">See a list of BIRT Adopters</a></p>
					
					<iframe width="560" height="315" src="//www.youtube.com/embed/_gvL58G41CA" frameborder="0" allowfullscreen></iframe><br />

					<h3>BIRT: The Technology Platform</h3>
					<p>BIRT has two main components: a visual report designer for creating BIRT Designs, and a runtime component for generating those designs that can be deployed to any Java environment. The BIRT project also includes a charting engine that is both fully integrated into the BIRT designer and can be used standalone to integrate charts into an application.</p>
					<p>BIRT designs are persisted as XML and can access a number of different data sources including JDO datastores, JFire Scripting Objects, POJOs, SQL databases, Web Services and XML.</p>
					<p><a href="architecture.php">Learn more about BIRT Architecture</a></p>

					<h3>BIRT: The Philosophy</h3>
					<p>BIRT is about open standards. It integrates with any data source in any environment. BIRT represents a commitment to the highest standards in software design and quality.</p>
					
					<h2 class="topic-section-header padding-top-small">BIRT Design Overview</h2>
					<p>In this section, you'll get an overview of what a BIRT design is, including:
					<ul class="eclipse-list">
						<li>Report Introduction</li><br />
						<li>The Anatomy of a Report</li>
					</ul>
					<a href="design.php">Learn More</a>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Architecture Overview</h2>
					<p>In this section, you'll get an overview of the BIRT architecure. Topics included:
					<ul class="eclipse-list">
						<li>BIRT Components</li><br />
						<li>Architecture Diagram</li>
					</ul>
					<a href="architecture.php">Learn More</a>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Designer Overview</h2>
					<p>This section will take you through a quick tour of the BIRT Designer.</p>
					<p>
					<a href="designer.php">Learn More</a>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Customization Overview</h2>
					<p>In this section, you'll get an overview of some different ways to customize your report design, including:
					<ul class="eclipse-list">
						<li>Data Customization</li><br />
						<li>Conditional Formatting</li><br />
						<li>Scripting</li><br />
						<li>Java Event Coding</li><br />
						<li>Project Management</li><br />
						<li>Styles</li><br />
						<li>Libraries</li><br />
						<li>Internationalization</li>
					</ul>
					<a href="customization.php">Learn More</a>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Extensibility Overview</h2>
					<p>Since BIRT cannot contain every feature needed for all applications, it is very extendible. This section gives an overview of what parts of BIRT can be extended. The topics included are:
					<ul class="eclipse-list">
						<li>Extensibility</li><br />
						<li>Data Access</li><br />
						<li>Report Items</li><br />
						<li>Chart Types</li><br />
						<li>Output Formats</li>
					</ul>
					<a href="extensibility.php">Learn More</a>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Project Organization</h2>
					<p>This section contains information about many different aspects of the BIRT project, like committee members, how to contribute, etc. Topics include:
					<ul class="eclipse-list">
						<li>Project Organization</li><br />
						<li>About the BIRT Project</li><br />
						<li>Getting Help Using BIRT</li><br />
						<li>Project Resources</li><br />
						<li>Project Processes</li><br />
						<li>PMC Minues</li><br />
						<li>Projects</li>
					</ul>
					<a href="project-organization/">Learn More</a>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Project Development Plan</h2>
					<p>On this page, you'll find links to Project Plans for the version(s) of BIRT currently in Development.</p>
					<p><a target="_blank" href="https://wiki.eclipse.org/BIRT_Project_Plan">Learn More</a>
					</p>

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