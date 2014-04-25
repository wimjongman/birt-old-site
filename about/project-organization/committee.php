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
					<h1 class="eclipse-title-main">Project Management Committee</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="/birt/about/index.php">What is BIRT?</a></li>
		                    <li><a href="/birt/about/design.php">BIRT Design Overview</a></li>
		                    <li><a href="/birt/about/architecture.php">Architecture Overview</a></li>
		                    <li><a href="/birt/about/designer.php">Designer Overview</a></li>
		                    <li><a href="/birt/about/customization.php">Customization Overview</a></li>
		                    <li><a href="/birt/about/extensibility.php">Extensibility Overview</a></li>
		                    <li><a href="index.php">Project Organization</a>
		                    	<ul>
		                    		<li><a href="description.php">Description and Scope</a></li>
		                    		<li><a href="charter.php">Charter</a></li>
		                    		<li><a href="principles.php">Principles</a></li>
		                    		<li><a href="committee.php">Management Committee</a></li>
		                    		<li><a href="contributors.php">Contributors</a></li>
		                    	</ul>
		                    </li>
		                    <li><a target="_blank" href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a></li>
		                    <!--<li><a href="/birt/about/birt-and-actuate.php">BIRT and Actuate</a></li>-->		                    
		                </ul>

			        </div>

			        <h2 class="topic-section-header padding-top-small">PMC Membership</h2>
					<p>
					<ul class="eclipse-list">
					<li>Wenfeng Li, Actuate - Wenfeng led development of versions 6-8 of Actuate's enterprise reporting product suite, and prior to that, led the development of MicroStrategy's version 7 OLAP server. He is a co-inventor of three patents in business intelligence technology and is currently serving as the PMC Lead for the Eclipse BIRT Project. He is a member of the Eclipse Architecture Council.</li><br />
					<li>Paul Clenahan, Actuate - Paul has over 15 years experience in the enterprise business intelligence industry working in a variety of Product Management roles with diverse customer applications. Paul is currently responsible for coordinating overall product direction and vision for Actuate. He is also a member of the Eclipse Planning and Requirements Councils.</li><br />
					<li>Michael Fox, IBM / Rational - Mike has over 20 years experience with software product development and software project management. Mike has been responsible for developing reporting solutions for several companies. He is now the Technical Lead and Architect for the reporting components of IBM/Rational's Team Products, and involved with reporting work in other parts of IBM Software Group.</li><br />
					<li>Scott Rosenbaum, Innovent Solutions - Scott has been providing professional services consulting in the business intelligence space for more than seven years and has been involved in software development for more than 15.</li><br />
					<li>Jason Weathersby - Jason has 15 years experience in the software development and consulting fields, with in-depth experience in identifying and addressing customer's business intelligence needs. As part of the BIRT PMC, Jason is responsible for supporting and encouraging adoption of BIRT in the Open Source community.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Project Leaders</h2>
					<p>
					<ul class="eclipse-list">
					<li>Wenbin He, Actuate - Wenbin is the project lead for the BIRT Report Designer. Prior to working on BIRT, he led the development of Actuate's iStudio product, which is an Eclipse-based integration platform for Actuate's client products. His interests are in the areas of UI design, XML, web services and Java technology.<br /><br />
					Wenbin is also the project lead for the BIRT Web-based Report Designer.</li><br />
					<li>Hank Christensen, Actuate - Hank is the project lead for the BIRT Charting Engine. He also manages the development of Actuate's Information Object Designer, an Eclipse-based IDE for Enterprise Information Integration (EII), as well as components of Actuate's BIRT Report Designer. Prior to working with BIRT, he led the development of Actuate's e.Report Designer Professional, and has developed enterprise reporting technologies for the last 10 years.</li><br />
					<li>Gary Xue, Actuate - Gary leads the BIRT Report Engine and Data Engine projects. Gary has 11 years of experience in developing Business Intelligence software, 7 of which are with Actuate working on the iServer reporting platform. His interest and expertise are in areas of databases, data access technologies, distributed and high performance system design and Web technologies.</li>
					</ul>
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