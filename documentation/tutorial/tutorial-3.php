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
					<h1 class="eclipse-title-main">Brief UI Tour</h1>
					
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

					<p>Before we start work on the report, let's take a quick tour of the UI. We'll be looking at most of the UI in detail as we build our report.</p>
					
					<h2 class="topic-section-header padding-top-small">Cheat Sheets</h2>
					<p>Notice at the right of your Eclipse workspace (for the default configuration) is a view called "Cheat Sheets." This view walks you though the process of building a report based on the template you selected.</p>
					<p>For now, let's go ahead and close that view by clicking on the X (close) button in the upper left corner of the view, since we'll be following the steps in this tutorial.</p>
					
					<h2 class="topic-section-header padding-top-small">Layout Editor</h2>
					<p>The central area is the Layout Editor. This is the place where you create your report design. The editor has five tabs:
					<ul class="eclipse-list">
						<li>Layout - Where you edit your report design.</li><br />
						<li>Preview - Runs your report and shows the output.</li><br />
						<li>Script - Where you add JavaScript to your report to customize its behavior.</li><br />
						<li>XML Source - You can view and modify the XML source of a report from here.</li><br />
						<li>Master Page - Used to format page data such as page headers.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Views</h2>
					<p>Around the editor are a number of views: The views below can be arranged to the left, right or bottom of the Layout Editor
					<ul class="eclipse-list">
						<li>Palette - BIRT View that shows the standard report items you can add to your report using drag & drop.</li><br />
						<li>Outline - BIRT View that shows the structure of your report as a tree view.</li><br />
						<li>Navigator - Standard Eclipse view that shows your projects, and the reports within your projects.</li><br />
						<li>Data Explorer - BIRT View that shows your data sources (connections), data sets (queries) and report parameters. You also use this view to add data set columns to your report layout.</li><br />
						<li>Property Editor - BIRT View that displays properties for many report items. It has tabs and groupings that organize properties into categories.</li><br />
						<li>Properties View - Standard Eclipse view that shows all properties for a report item as a simple list. This view is optional, and we will not use it in this tutorial.</li><br />
						<li>Library Explorer View - BIRT allows the reuse of report objects, such as tables, data sources and styles. Objects created for reuse are stored in a library file. The Library Explorer will display Libraries that exist in the resource folder. Developed libraries can be added to the resource folder by selecting File->Publish Library to Resource Folder or by right clicking in Library Explorer and selecting add. The resource folder location can be configured at Window->Preferences->Report Design->Resource.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Displaying Views</h2>
					<p>You can arrange your views any way you like. You can also hide them by clicking the "X" button next to the view tab. If you accidentally hide a view, you can display it again by using the Window->Show View menu item.</p>
					<p>Many people find that a convenient layout is to have the Palette, Navigator, Outline and Data Explorer docked at the left edge of your workspace, and the Property Editor and Properties view docked at the bottom of the workspace.</p>
					
					<p><br /><a href="tutorial-2.php"><< Previous: Creating a Report</a> | <a href="tutorial-4.php">Next: Building a Data Source >></a></p>
					
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