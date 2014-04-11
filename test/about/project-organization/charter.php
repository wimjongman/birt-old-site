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
					<h1 class="eclipse-title-main">Project Charter</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="/birt/test/about/index.php">What is BIRT?</a></li>
		                    <li><a href="/birt/test/about/design.php">BIRT Design Overview</a></li>
		                    <li><a href="/birt/test/about/architecture.php">Architecture Overview</a></li>
		                    <li><a href="/birt/test/about/designer.php">Designer Overview</a></li>
		                    <li><a href="/birt/test/about/customization.php">Customization Overview</a></li>
		                    <li><a href="/birt/test/about/extensibility.php">Extensibility Overview</a></li>
		                    <li><a href="index.php">Project Organization</a>
		                    	<ul>
		                    		<li><a href="description.php">Description and Scope</a></li>
		                    		<li><a href="charter.php">Charter</a></li>
		                    		<li><a href="principles.php">Principles</a></li>
		                    		<li><a href="committee.php">Management Committee</a></li>
		                    		<li><a href="contributors.php">Contributors</a></li>
		                    	</ul>
		                    </li>
		                    <li><a href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a></li>
		                    <li><a href="/birt/test/about/birt-and-actuate.php">BIRT and Actuate</a></li>		                    
		                </ul>

			        </div>

			        <h2 class="topic-section-header padding-top-small">Overview</h2>
			        <p>The Eclipse Business Intelligence & Reporting Tools Top-Level Project is an open source collaborative software development project dedicated to providing an extensible, standards-based platform to address a broad range of needs in the business intelligence and reporting space using the Eclipse platform.</p>
			        <p>This document describes the composition and organization of the project, roles and responsibilities of the participants, and development process for the project.</p>
										
					<h2 class="topic-section-header padding-top-small">Mission</h2>
					<p>The mission of The Business Intelligence and Reporting Tools Project is to create a wide variety of capabilities that allow developers to easily extract data from data sources, process that data using flexible and powerful data manipulation, sorting and aggregation, and present the processed information in a formatted layout to the end users.</p>
					<p>The capabilities can range from application- and production-level reporting, through ad hoc user-driven query tools, to highly interactive multi-dimensional online analytical processing (OLAP) and data mining tools.</p>
					<p>Some level of reporting is a common requirement in the majority of applications developed today - this project provides a focal point for the creation of best-of-breed business intelligence and reporting capabilities for integration into these applications, or as dedicated applications in their own right.</p>
					
					<h2 class="topic-section-header padding-top-small">Scope</h2>
					<p>The Business Intelligence and Reporting Tools Project encompasses capabilities for designing and deploying business intelligence and reporting solutions that will be used within an application. The can broadly be divided into two categories: design tools for authoring, for example, reports; and deployment capabilities for utilizing these designs within an application.</p>
					<p>Initially, the Project will focus on leveraging the Eclipse platform to provide infrastructure and tools for the designing, deploying, generating and viewing of reports in an organization, including ad hoc query and reporting tools. While not an initial focus, the BIRT project scope includes complementing these reporting capabilities with Online Analytical Processing (OLAP) and Business Intelligence dashboard functionality. Over time, but not in the initial scope, the creation of additional projects is anticipated and encouraged to address additional aspects of business intelligence, such as Executive Information Systems (EIS), statistical analysis, modeling capabilities (what-if analysis), Data Mining Tools, Data Warehouse Modeling Tools, Extract Transform and Load (ETL) tools and Data Quality Tools.</p>
					<p>It is recognized that BIRT cannot meet all the requirements of all applications and tools that use BIRT. It is therefore a core design principle for all projects within BIRT to support a broad range of extension points within the tools and frameworks that allow developers to address additional needs, and to provide exemplary implementations for these extension points.</p>
					<p>The list of the Projects under the Business Intelligence and Tools PMC will be maintained as part of <a href="/birt/test/project-organization/">Business Intelligence and Reporting Tools Project</a>.</p>
					
					<h2 class="topic-section-header padding-top-small">Project Management Committee</h2>
					
					<h2 class="topic-section-header padding-top-small">Project Requirements Group</h2>
					
					<h2 class="topic-section-header padding-top-small">Project Architecture Group</h2>
					
					<h2 class="topic-section-header padding-top-small">Project Planning Group</h2>
					
					<h2 class="topic-section-header padding-top-small">Roles</h2>
					
					<h2 class="topic-section-header padding-top-small">Projects</h2>
					
					<h2 class="topic-section-header padding-top-small">Project Components</h2>
					
					<h2 class="topic-section-header padding-top-small">Ports</h2>
					
					<h2 class="topic-section-header padding-top-small">Coordinated Release Cycles</h2>
					
					<h2 class="topic-section-header padding-top-small">Infrastructure</h2>
					<p>
					<ul class="eclipse-list">
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">The Development Process</h2>
					
					<h2 class="topic-section-header padding-top-small">Licensing</h2>
					

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