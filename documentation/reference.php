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
		$metaTitle 		= "Documentation";
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
					<h1 class="eclipse-title-main">Technical Reference</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="install.php">Installation Guide</a></li>
		                    <li><a href="tutorial/">Design Tutorial</a></li>
		                    <li><a href="integrating/">Integrating BIRT</a></li>
		                    <li><a href="sample-database.php">Sample Database</a></li>
		                    <li><a href="reference.php">Technical Reference</a></li>
		                    <li><a href="building-birt.php">Building BIRT</a></li>
		                </ul>

			        </div>

					<h2 class="topic-section-header padding-top-small">Concepts</h2>
					<p>The <a href="/birt/phoenix/ref/rom/index.html" target="_blank">ROM documentation</a> is available in new "RomDoc" format complete with indexes, cross references, information taken directly from implementation, and so on. This version is an early draft. Note the following caveats:
					<ul class="eclipse-list">
						<li>Documentation is not yet done for the Style element and its properites.</li><br />
						<li>Some elements have no documenation at all.</li><br />
						<li>Some elements are not in Release 1. These show up in the index, but are not yet flagged as "reserved."</li><br />
						<li>Some of the wording needs correction and improvement.</li><br />
						<li>Overview text from the ROM specs are not yet incorporated. Refer to the ROM Specs below for this overview material.</li>
					</ul>
					</p>
					<p>Key features include:
					<ul class="eclipse-list">
						<li>A "Since" field indicates if the element or property is in Release 1.0, or is "reserved" for a future release.</li><br />
						<li>Alphabetical index of structures and elements.</li><br />
						<li>Lots of details such as data types, XML names, choice details, JavaScript types, etc.</li><br />
						<li>Auto-generated from the implementation: prevents the specs from being out of sync with respect to the code.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Report Object Model Specification Suite</h2>
					<p>The Report Object Model (ROM) is the report design format that the ERD creates and the ERE executes. The following suite of documents provides a full description of the model. Note: these are the original design specs, and are now somewhat out of date with respect to the implementation. See the above "RomDocs" for the most recent details.
					<ul class="eclipse-list">
						<li><a href="/birt/phoenix/resources/documentation/ROM_Overview_SPEC.pdf" target="_blank">Overview</a> - Overall introduction to the ROM (read this first.)</li><br />
						<li><a href="/birt/phoenix/resources/documentation/ROM_Base_Elements_SPEC.pdf" target="_blank">Base Elements</a> - Properties common to all ROM elements</li><br />
						<li><a href="/birt/phoenix/resources/documentation/ROM_Design_SPEC.pdf" target="_blank">Report Design</a> - Report design, report libraries and report parameters</li><br />
						<li><a href="/birt/phoenix/resources/documentation/ROM_Layout_SPEC.pdf" target="_blank">Layout Model</a> - Layout rules and elements: grids and free-form</li><br />
						<li><a href="/birt/phoenix/resources/documentation/ROM_List_and_Table_SPEC.pdf" target="_blank">Lists & Tables</a> - The two elements for displaying data from a data set</li><br />
						<li><a href="/birt/phoenix/resources/documentation/ROM_Text_SPEC.pdf" target="_blank">Textual Elements</a> - Including Data, Label, Text and Multi-Line Data</li><br />
						<li><a href="/birt/phoenix/resources/documentation/ROM_Page_Setup_SPEC.pdf" target="_blank">Page Setup</a> - Master pages and page sequences</li><br />
						<li><a href="/birt/phoenix/resources/documentation/ROM_Styles_SPEC.pdf" target="_blank">Styles</a> - Defines BIRT-defined and user-defined styles.</li><br />
						<li><a href="/birt/phoenix/resources/documentation/ROM_Scripting_SPEC.pdf" target="_blank">Expressions & Scripting</a> - The programming model and objects</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">BPS Specifications</h2>
					<p>BIRT Project Specification documents.
					<ul class="eclipse-list">
						<li><a href="http://www.eclipse.org/birt/release20specs/listspecs.php" target="_blank">BPS Specs</a></li><br />
						<li><a href="http://wiki.eclipse.org/BPS" target="_blank">BPS Wiki Pages</a></li>
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