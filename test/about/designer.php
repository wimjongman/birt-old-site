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
					<h1 class="eclipse-title-main">Designer Overview</h1>
					
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
		                    <!--<li><a href="birt-and-actuate.php">BIRT and Actuate</a></li>-->		                    
		                </ul>

			        </div>

					<h2 class="topic-section-header padding-top-small">BIRT Report Designer</h2>
					<p>Application development with BIRT starts with the report designer. This Eclipse-based set of plug-ins offers a variety of tools to build reports quickly. Some of these are listed below.
					<ul class="eclipse-list">
						<li>Data Explorer - Organizes your data sources (connections) and data sets (queries). The data set editor allows you to test your data set to ensure the report receives the correct data. Within this view multi dimensional cubes can be created using existing data sets. Cubes are currently used when building dynamic cross tables. This view also is used to design report parameters.</li>
						<br />
						<li>Navigator - Shows the projects and files that are in your workspace. You can also create projects, designs, and other BIRT files here.</li>
						<br />
						<li>Layout View - WYSIWYG editor that provides drag & drop creation of the presentation portion of your report.</li>
						<br />
						<li>Palette - Contains the standard BIRT report elements such as labels, tables, and charts and is used in conjunction with the Layout View to design reports.</li>
						<br />
						<li>Property Editor - Presents the most commonly used properties in a convenient format that makes editing quick and easy. BIRT also integrates with the standard Eclipse property view to provide a detailed listing of all properties for an item.</li>
						<br />
						<li>Script Editor - Scripting adds business logic to reports during data access, during report generation, or during viewing. The code editor provides standard Eclipse features for editing your scripts: syntax coloring, auto-complete and more. An interesting new feature, for BIRT 2.3 is the ability to debug scripts while the report is running.</li>
						<br />
						<li>Outline - BIRT reports are organized as a tree structure with the overall report as the root, and separate categories for styles, report content, data sources, data sets, report parameters and more. The Outline view provides a compact overview of your entire report structure.</li>
						<br />
						<li>Cheat Sheets - Learning a new tool is always a challenge, but Eclipse offers an innovative solution: cheat sheets. These are short bits of documentation that walk you through new tasks.</li>
						<br />
						<li>Resource Explorer - BIRT allows the reuse of report objects, such as tables, data sources and styles. Objects created for reuse are stored in a library file. To browse the contents of report libraries BIRT supplies a Resource Explorer view. This view list all libraries within the resource folder, in addition other shared content such as images and JavaScript files.</li>
						<br />
						<li>Chart Builder - Adding Charts to BIRT designs is expedited with the Chart Builder. Chart creation is separated into three phases: Select Chart Type, Select Data, and Format Chart.</li>
						<br />
						<li>Expression Builder - BIRT expressions are really just simple scripts that return a value. Expressions are used for assigning data values to report elements, building image locations, hyperlinks, parameter default values and many other places. Expressions are constructed within BIRT using the Expression Builder.</li>
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