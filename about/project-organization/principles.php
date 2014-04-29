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
					<h1 class="eclipse-title-main">Project Principles</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
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

			        <h2 class="topic-section-header padding-top-small">Project Principles</h2>
					<p>Among the key principles on which this project has been initiated, and will be run, are the following:
					<ul class="eclipse-list">
					<li>Extension of the Eclipse value proposition - The Eclipse Project has set a high standard for technical excellence, functional innovation and overall extensibility within the Java IDE domain. We intend to apply these same standards to the business intelligence and reporting domain.</li><br />
					<li>Leverage Eclipse ecosystem - A major goal of this project is to apply the application development strengths of the Eclipse Project to the business intelligence and reporting domain. The project will work closely with other Eclipse project areas whenever possible to leverage the capabilities being developed in those areas.</li><br />
					<li>Vertical solutions - Reporting and Business intelligence are a facet of almost all applications that are developed today. A core principle of this project is to provide a general purpose reporting capability that can easily and seamlessly be integrated as a component of vertical applications and solutions.</li><br />
					<li>Extensibility - To meet the varied requirements for reporting and Business Intelligence, provide extension points that enable developers to adapt the technology to meet application specific needs.</li><br />
					<li>Vendor neutrality - We aim to encourage Eclipse participation and drive Eclipse market acceptance by providing vendor-neutral capabilities and to encourage participation for complementary capabilities through additional projects.</li><br />
					<li>Open, standards-based development - Where market adopted standards exist that meet the design goals, our aim is to leverage and adhere to them. Where market adopted standards do not exist, we will develop and publish any new capabilities in the Eclipse open forum.</li><br />
					<li>Incremental delivery - In order to meet the pent-up demand for reporting within the Java application market, a goal is to delivery functionality to market as rapidly as possible via an incremental delivery model.</li><br />
					<li>Agile development - Our aim is to incorporate into our planning process the innovations that arise once a project is underway, and the feedback from our user community on our achievements to date. We think an agile development and planning process, in which progress is incremental, near-term deliverables are focused, and long-term planning is flexible, will be the best way to achieve this.</li><br />
					<li>Inclusiveness & diversity - We aim to assimilate the best ideas from the largest number of participants representing the needs of the widest range of end-users. So we will encourage organizations across a broad range of technical, market and geographical domains to participate in this project.</li>
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