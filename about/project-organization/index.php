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
		$metaKeywords	= "Eclipse,BIRT,Java,Java EE,Web,RCP,Data,Visualization,Reports,Reporting,Embed,Rich-Client,Dashboards";
		$metaAuthor		= "";
		$metaDescription = "BIRT is an open source technology platform used to create data visualizations and reports that can be embedded into rich client and web applications.";
		$ogTitle		= "Eclipse BIRT Project Home";
		$ogImage		= "http://www.eclipse.org/birt/img/logo/Birt-logo.png";
		$ogDescription  = "BIRT is an open source technology platform used to create data visualizations and reports that can be embedded into rich client and web applications.";
		
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
					<h1 class="eclipse-title-main">Project</h1>
					
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
		                    		<!--<li><a href="committee.php">Management Committee</a></li>-->
		                    		<li><a href="contributors.php">Contributors</a></li>
		                    	</ul>
		                    </li>
		                    <li><a target="_blank" href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a></li>
		                    <!--<li><a href="/birt/about/birt-and-actuate.php">BIRT and Actuate</a></li>-->		                    
		                </ul>

			        </div>

			        <h2 class="topic-section-header padding-top-small">Project Organization</h2>
			        <p>Welcome to the Business Intelligence and Reporting Tools (BIRT) Project pages. The Eclipse BIRT Project is an open source Top Level Project of the Eclipse Foundation. The Project Charter describes the organization of the project, roles and responsibilities of the participants, and top-level development process for the project. The Top Level Project is overseen by a Project Management Committee (PMC). The PMC organizes the Top-Level Project into Projects coordinating identified resources of the Projects against a Development Plan and working against a CVS repository.</p>
			        
			        <h2 class="topic-section-header padding-top-small">About the BIRT Project</h2>
			        <p>The BIRT project addresses a wide range of reporting needs within a typical Java application. Reporting capabilities in an application are often implemented in an ad hoc fashion by the application developer, using technology that is not ideally suited to the task, or through the development of a one-off solution for that application. This is expensive and time-consuming, and provides limited reporting capabilities for the end users of the application. BIRT addresses this problem by providing Eclipse-based open source and extensible tools and frameworks that allow developers to easily incorporate reporting functionality within their applications.</p>
			        <p>We encourage active participation in the BIRT project - read on and get involved through the <a href="https://www.eclipse.org/forums/eclipse.birt">BIRT forum</a>, and the <a href="http://www.eclipse.org/projects/dev_process/development_process.php">Eclipse Development Process</a>.</p>
			        
			        <h2 class="topic-section-header padding-top-small">Getting Help Using BIRT</h2>
			        <p>The rest of these pages provide information for people who want to know more about the BIRT project, how it runs and how to contribute. For help using BIRT, see the <a href="/birt/documentation/">Documentation</a> section or the design and deployment guides on the the <a href="http://developer.actuate.com" target="_blank">BIRT Developer Center</a>.</p>
			        
			        <h2 class="topic-section-header padding-top-small">Project Resources</h2>
			        <p>The material here is for people who want know more about the BIRT project or who wish to contribute to BIRT.
			        <ul class="eclipse-list">
			        	<li><a href="description.php">Project Description and Scope</a> - Description of the project and it's scope.</li><br />
			        	<li><a href="charter.php">Project Charter</a> - The Charter under which this project is run.</li><br />
			        	<li><a href="principles.php">Project Principles</a> - The key principles on which this project is run.</li><br />
			        	<!--<li><a href="committee.php">Project Management Committee (PMC) and Project Leads</a> - Who is running the project?</li><br />-->
			        	<li><a href="contributors.php">Project Contributors and Committers</a> - List of the project contributors and committers.</li>
			        </ul>
			        </p>
			        
			        <h2 class="topic-section-header padding-top-small">Project Processes</h2>
			        <p>The BIRT Project leverages and follows the processes used by the Eclipse Platform projects and others within the Eclipse Foundation. Below are links to help answer frequently asked questions in this area.
			        <ul class="eclipse-list">
			        	<li><a href="http://www.eclipse.org/projects/dev_process/development_process.php" target="_blank">Eclipse Development Process</a> -  Information on how projects work within the Eclipse ecosystem.</li><br />
			        	<li><a href="http://www.eclipse.org/projects/dev_process/index.php" target="_blank">Eclipse Contributions FAQ</a> - Common questions around contributing to the Eclipse community.</li><br />
			        	<li><a href="/birt/about/project-organization/contribute.php" target="_blank">How to Contribute to the BIRT Project</a> - Find out how to contribute development work to the BIRT project.</li><br />
			        	<li><a href="/birt/about/project-organization/development-discussions.php" target="_blank">Development Discussions in the BIRT Project Community</a> - Learn how development discussions happen in the BIRT community.</li>
			        </ul>
			        
			        <h2 class="topic-section-header padding-top-small">PMC Minutes</h2>
			        <p>The BIRT PMC meets weekly. All minutes are posted to the <a href="http://wiki.eclipse.org/BIRT_PMC_Minutes" target="_blank">BIRT Wiki</a>.</p>
			        
			        <h2 class="topic-section-header padding-top-small">Projects</h2>
			        <p>Projects within BIRT include the following:
					<ul class="eclipse-list">
					<li>Eclipse Report Designer (ERD) - The Eclipse Report Designer is an Eclipse-based desktop authoring environment for report development. Eclipse Report Designer enables application and report developers to create simple and complex reports for use within their organization. The tool caters to the broad range of report development skills from the non-programmer report developer focused on report layout to the application developer looking for sophisticated control over report creation.</li><br />
					<li>Eclipse Report Engine (ERE) - The Report Engine allows Java application developers to quickly integrate powerful report generation and viewing capabilities into their applications without having to build the infrastructure from lower level Java components. The Report Engine project enables reports to be generated using the XML report designs created by the Eclipse Report Designer, Web Based Report Designer or any other tool. To support this, the Report Engine provides two core services: generation and presentation. The generation service within the Report Engine is responsible for connecting to the specified data source(s), retrieving and processing the data (sorting, grouping, aggregations, etc), creating the report layout and generating the report document. The presentation service within the Report Engine provides a rich set of viewing capabilities for report content. This includes the infrastructure for viewing a document online; for printing a document; and for generating alternate output documents such as PDF.</li><br />
					<li>Eclipse Charting Engine (ECE) - The Chart Engine project provides a rich business chart generation capability that can be used as a standalone charting component, as well as providing the chart generation service within the Report Engine project. Visual presentation of business data in the form of charts is a common, and key, aspect of many reports and other forms of business intelligence. As such, a robust charting capability is essential within the overall Business Intelligence and Reporting Tools project.</li>
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