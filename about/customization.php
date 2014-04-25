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
					<h1 class="eclipse-title-main">Customization Overview</h1>
					
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

					<h2 class="topic-section-header padding-top-small">Data Customization</h2>
					<p>Reports often require additional business logic to prepare data for presentation. BIRT provides a number of tools to help:
					<ul class="eclipse-list">
						<li>Computed Columns - Databases organize data for storage, but often data must be combined to prepare it for presentation. Computed columns let you define additional data set columns based on business logic. The logic can be a simple expression, a script, or a call to existing Java logic.</li>
						<br />
						<li>Input and Output Parameters - Many data sources support parameters: the ability to pass data into or out of a query. For example, SQL Select statements can include input parameters. Stored procedures can have both input and output parameters.</li>
						<br />
						<li>Column Meta-data - You can provide column aliases when the names provided by the data source are unintuitive.</li>
						<br />
						<li>Filtering - Some data sources, especially SQL, provide excellent built-in filtering features. However, some data sources (flat files, application objects) may not provide filtering. In other cases, the filter conditions are defined in scripts or Java code. You can define such filters as part of the report, and the BIRT engine will apply them automatically.</li>
						<br />
						<li>Scripted Data Sets - Some reports require access to specialized or unusual data. You can create such access in Java or scripts and use the scripted data set to integrate that logic into your report.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Conditional Formatting</h2>
					<p>While some reports have a fixed format, others require conditional formatting. For example, a report that lists transactions may want to present a sale differently than a return. Or, a customer service report may want to show colors that indicate which metrics are above, at or below plan. BIRT provides several conditional formatting features:
					<ul class="eclipse-list">
						<li>Conditional Visibility - You can hide report elements based on data. In the transaction report above, you can create sections for both sales and return transactions, then hide the one that is not required for a given record.</li>
						<br />
						<li>Value Mapping - Database data often uses code values: M/F for male or female, 1/2 for sales and returns, etc. Value mapping lets you define a mapping from database value to display value. For example, we can map the value "1" to "Sale" and the value "2" to "Return."</li>
						<br />
						<li>Highlighting - Simple expressions let you select the style to apply to a given report item. For example, in the customer service report, we can use green to show metrics above plan, and red to show those below plan.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Scripting</h2>
					<p>BIRT provides scripting based on JavaScript (formally known as ECMAScript). JavaScript is often thought of as a client-side scripting language, but it works just as well on a server for expressing report logic. In particular, JavaScript provides excellent integration with your existing Java logic, making it very simple to call your logic from BIRT reports.</p>
					<p>BIRT provides a complete set of JavaScript objects to access the Report Object Model: a representation of both the design and runtime aspects of your report, allowing complete control of the report to handle even the most complex report formatting tasks.</p>
					
					<h2 class="topic-section-header padding-top-small">Java Event Coding</h2>
					<p>In addition to JavaScript, event handlers can be coded in Java. BIRT supplies a set of interfaces for report item creation and data collection. Once the event handler is written in Java and associated with a report element, the report can be debugged through the Eclipse Java Development Tools.</p>
					
					<h2 class="topic-section-header padding-top-small">Project Management</h2>
					<p>BIRT integrates with the Eclipse project management features to organize related reports. BIRT also works with Eclipse CVS support for source management. BIRT's XML report design format makes it easy to compare two reports, or two versions of the same report, to track changes.</p>
					
					<h2 class="topic-section-header padding-top-small">Styles</h2>
					<p>Anyone who has designed a web page knows that the same visual styles get used over and over. Cascading Style Sheets (CSS) allow web designers to extract style information from content, and to reuse style over and over.</p>
					<p>BIRT provides a similar style feature. Indeed, BIRT styles are based on CSS styles, making BIRT's visual properties familiar to web application developers. BIRT styles cascade, allowing you to set a style in one place and have it affect the entire report, a section of the report, or a single report item. BIRT also allows importing or referencing of existing Cascading Style Sheets.</p>
					
					<h2 class="topic-section-header padding-top-small">Libraries</h2>
					<p>Typical applications include many related reports. A simple customer application may include an alphabetical customer listing, customers sorted by geography, customers assigned to specific sales reps, customers filtered by status and more. In general, users frequently want another variation to solve specific business needs.</p>
					<p>The result is that reporting applications consist of suites of closely related reports. The same data sources, styles, business logic, report items and more are used across many reports.</p>
					<p>BIRT supports libraries that organize these shared resources. Libraries can contain any report element including styles, data sources, report items, scripts and so on.</p>
					
					<h2 class="topic-section-header padding-top-small">Internationalization</h2>
					<p>The web allows worldwide access to your application. BIRT provides excellent support for internationalization and localization.</p>				
					<ul class="eclipse-list">
						<li>Text Localization - You can create a single report that automatically displays strings in the user's language. All labels and report text can be externalized and translated using the standard Java localization rules. At runtime, BIRT uses resource keys to locate the correct translations of your text.</li>
						<br />
						<li>Language Packs - Language Packs are available to translate the BIRT offerings into many different languages.</li>
						<br />
						<li>Localization - BIRT provides locale-aware data formatting, meaning that a date can appear in mm/dd/yy format for US users, and dd-mm-yy format for Europeans.</li>
						<br />
						<li>Dynamic Formatting - Chinese text is very compact, German is often quite lengthy, and English of medium size. BIRT automatically adjusts the size of report items to fit their content to avoid the need to test the report with every possible translation. BIRT works like HTML in this regard: the size of content expands as needed to hold its data.</li>
						<br />
						<li>Bidirectional Support - BIRT supports bidirectional(BIDI) formatting for report content. No only can content be formatted RTL or LTR, this feature supports combining both within a single report.</li>

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