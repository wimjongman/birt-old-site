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
					<h1 class="eclipse-title-main">Cascading Styles</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="/birt/documentation/install.php">Installation Guide</a></li>
		                    <li><a href="index.php">Design Tutorial</a>
		                    	<ul>
		                    		<li><a href="tutorial-1.php">Introduction</a></li>
		                    		<li><a href="tutorial-2.php">Creating a Report</a></li>
		                    		<li><a href="tutorial-3.php">Brief UI Tour</a></li>
		                    		<li><a href="tutorial-4.php">Building a Data Source</a></li>
		                    		<li><a href="tutorial-5.php">Building a Data Set</a></li>
		                    		<li><a href="tutorial-6.php">Building a Table</a></li>
		                    		<li><a href="tutorial-7.php">Testing Your Report</a></li>
		                    		<li><a href="tutorial-8.php">Setting Visual Properties</a></li>
		                    		<li><a href="tutorial-9.php">Setting Data Properties</a></li>
		                    		<li><a href="tutorial-10.php">Using Styles</a></li>
		                    		<li><a href="tutorial-11.php">Cascading Styles</a></li>
		                    		<li><a href="tutorial-12.php">Using a Grid</a></li>
		                    		<li><a href="tutorial-13.php">Using a Text Item</a></li>
		                    		<li><a href="tutorial-14.php">Next Steps</a></li>
		                    	</ul>
		                    </li>
		                    <li><a href="/birt/documentation/integrating/">Integrating BIRT</a></li>
		                    <li><a href="/birt/documentation/sample-database.php">Sample Database</a></li>
		                    <li><a href="/birt/documentation/reference.php">Technical Reference</a></li>
		                    <li><a href="/birt/documentation/building-birt.php">Building BIRT</a></li>
		           		</ul>

			        </div>

					<h2 class="topic-section-header padding-top-small">About Style Cascade</h2>
					<p>We've mentioned that BIRT uses CSS to define the styles for report items, and we saw how to define and apply our own style. BIRT also follows the "cascade" part of Cascading Style Sheets: you can set a property once for the report, or a container, and have that value cascade down through the contents of the container.</p>
					<p>In BIRT, Grid, List and Table items are containers: they can hold other report items. The report itself is the ultimate container for all report items.</p>
					
					<h2 class="topic-section-header padding-top-small">Setting Report-Wide Properties</h2>
					<p>Our report currently uses the default font: a serif style. (Actually, by default BIRT uses the font set in your browser. Many browsers use a serif style by default, but if you've changed your default browser font, that is how the report will appear.)</p>
					<p>Let's use a sans-serif style instead. We do this by using a pre-defined BIRT style called report, which specifies the default style for report items. If you are familiar with CSS, this is like defining a style that selects the HTML body tag.
					<ul class="eclipse-list">
						<li>Open or locate the Outline view.</li><br />
						<li>Scroll down to the bottom to find the Styles node.</li><br />
						<li>Open the Styles node.</li><br />
						<li>Right-click and select New Style.</li><br />
						<li>From the General page, check the Predefined Style radio button and select "report" from the associated drop down list.</li><br />
						<li>Click OK</li><br />
						<li>Go to the Styles node in the Outline view and find the style named "report". Double-click it to open the Style editor.</li><br />
						<li>In the Font page, choose "sans serif" as the font type.</li><br />
						<li>Click OK.</li>
					</ul>
					</p>
					<p>All items in your report will change to sans-serif font.</p>
					<p>The names "serif" and "sans-serif" are defined by CSS: they are generic font styles that don't depend on the specific fonts installed on a machine. CSS generic font names avoid dependencies on specific fonts installed on the browser machine; something that is important if your reports will be appear as part of a public web site. You can also use font lists as in CSS. For example: "Helvetica, Arial, sans-serif".</p>
					
					<h2 class="topic-section-header padding-top-small">Other Default Styles</h2>
					<p>BIRT defines default styles for most report items and for list and table bands. See the <a href="/birt/resources/documentation/ROM_Styles_SPEC.pdf" target="_blank">ROM Styles Specification</a> for the complete list.</p>
					<p>The Styles node displays the styles that apply to each of the report items. However, there are additional styles that apply to grouping levels and other contexts. If you wish to use one of these, simply create a style with the required name.</p>
					
					<h2 class="topic-section-header padding-top-small">Check the Reporte</h2>
					<p>Let's click the preview tab to see how our report looks after the formatting. Not bad, but we still need a better report heading.</p>
					
					<p><br /><a href="tutorial-10.php"><< Previous: Using Styles</a> | <a href="tutorial-12.php">Next: Using a Grid >></a></p>
					
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