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
					<h1 class="eclipse-title-main">BIRT Design Overview</h1>
					
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

			        <h2 class="topic-section-header padding-top-small">Report Introduction</h2>
					<p>BIRT is an Eclipse-based open source reporting system for web applications, especially those based on Java and Java EE. BIRT has two main components: a report designer based on Eclipse, and a runtime component that you can add to your app server. BIRT also offers a charting engine that lets you add charts to your own application.</p>
					<p>We encourage you to download BIRT, try it, and give us your feedback though the <a href="/birt/community/">forums, newsgroup and Bugzilla</a>.</p>
					<p>With BIRT, you can add a rich variety of reports to your application.
					<ul class="eclipse-list">
						<li>Lists - The simplest reports are lists of data. As the lists get longer, you can add grouping to organize related data together (orders grouped by customer, products grouped by supplier). If your data is numeric, you can easily add totals, averages and other summaries.</li>
						<br />
						<li>Charts - Numeric data is much easier to understand when presented as a chart. BIRT provides pie charts, line & bar charts and many more. BIRT charts can be rendered in SVG and support events to allow user interaction.</li>
						<br />
						<li>Crosstabs - Crosstabs (also called a cross-tabulation or matrix) shows data in two dimensions: sales per quarter or hits per web page.</li>
						<br />
						<li>Letters & Documents - Notices, form letters, and other textual documents are easy to create with BIRT. Documents can include text, formatting, lists, charts and more.</li>
						<br />
						<li>Compound Reports - Many reports need to combine the above into a single document. For example, a customer statement may list the information for the customer, provide text about current promotions, and provide side-by-side lists of payments and charges. A financial report may include disclaimers, charts, tables all with extensive formatting that matches corporate color schemes.</li>
					</ul>
					</p>

					<h2 class="topic-section-header padding-top-small">The Anatomy of a Report</h2>
					<p>BIRT reports consist of four main parts: data, data transforms, business logic and presentation.
					<ul class="eclipse-list">
						<li>Data - Databases, web services, Java objects all can supply data to your BIRT report. BIRT provides JDBC, XML, Web Services, and Flat File support, as well as support for using code to get at other sources of data. BIRT's use of the Open Data Access (ODA) framework allows anyone to build new UI and runtime support for any kind of tabular data. Further, a single report can include data from any number of data sources. BIRT also supplies a feature that allows disparate data sources to be combined using inner and outer joins.</li>
						<br />
						<li>Data Transforms - Reports present data sorted, summarized, filtered and grouped to fit the user's needs. While databases can do some of this work, BIRT must do it for "simple" data sources such as flat files or Java objects. BIRT allows sophisticated operations such as grouping on sums, percentages of overall totals and more.</li>
						<br />
						<li>Business Logic - Real-world data is seldom structured exactly as you'd like for a report. Many reports require business-specific logic to convert raw data into information useful for the user. If the logic is just for the report, you can script it using BIRT's JavaScript support. If your application already contains the logic, you can call into your existing Java code.</li>
						<br />
						<li>Presentation - Once the data is ready, you have a wide range of options for presenting it to the user. Tables, charts, text and more. A single data set can appear in multiple ways, and a single report can present data from multiple data sets.</li>
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