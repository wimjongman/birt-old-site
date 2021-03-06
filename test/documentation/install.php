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
					<h1 class="eclipse-title-main">Install</h1>
					
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

					<h2 class="topic-section-header padding-top-small">Designer Install</h2>
					<p>BIRT can be downloaded and installed in different ways:
					<ul class="eclipse-list">
						<li>The complete BIRT designer or RCP Designer can be installed by downloading the required package <a href="http://download.eclipse.org/birt/downloads" target="_blank">here</a>.</li><br />
						<li>or by downloading the <a href="http://www.eclipse.org/downloads/" target="_blank">Eclipse IDE for Java and Report Developers Package</a>.</li><br />
						<li>or through the update manager as described <a href="http://download.eclipse.org/birt/downloads/updmaninst2.2.php" target="_blank">here</a>. Make sure to use the latest Update Site. <a href="http://wiki.eclipse.org/BIRT_Update_Site_URL" target="_blank">Update Manager URLs</a></li><br />
						<li>as a package that only contains the BIRT plugins (Framework) from the download page. Note additional requirements are located on the <a href="http://download.eclipse.org/birt/downloads" target="_blank">download page</a> as well. These include dependencies on other Eclipse projects. These dependencies are listed on the download page for the specific build.</li>
					</ul>
					</p>
					<p>All of the above downloads contain the BIRT designer. The BIRT project has many additional downloads, including a runtime for deploying the BIRT engine in a web application or standalone Java application. The additional downloads are available for any build of BIRT by selecting the appropriate build <a href="http://download.eclipse.org/birt/downloads/build_list.php" target="_blank">here</a>.</p>
					<p>Once you have downloaded one of the above packages, unzip the package into your chosen directory. This will create an eclipse directory that contains eclipse.exe. Run eclipse.exe to start the designer.</p>
					
					<h2 class="topic-section-header padding-top-small">Create a Windows Shortcut</h2>
					<p>
					<ul class="eclipse-list">
						<li>From the desktop, right click, choose New -> Shortcut.</li><br />
						<li>For location, enter "C:\Program Files\eclipse\eclipse.exe" (without quotes.)</li><br />
						<li>Click Next</li><br />
						<li>Enter "Eclipse" for the shortcut name.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Framework Designer Install</h2>
					<p>As stated above, the framework install only contains the required BIRT plugins. The Framework install requires that you already have the Eclipse Platform, GEF, EMF, DTP and WTP packages. The specific version of each, is listed on the specific build's download page. Unzip each package into your eclipse directory.</p>
					
					<h2 class="topic-section-header padding-top-small">Optional Eclipse Link File</h2>
					<p>If you are installing the framework, you can download the BIRT framework and unzip the contents to any directory.
					<ul class="eclipse-list">
						<li>After doing this, create a links directory in your installed Eclipse location (ie C:\eclipse\links).</li><br />
						<li>Within this directory create a file with a unique name like birt.link.</li><br />
						<li>Open the file you just created and enter path=drive:/pathtobirt (ie path=c:/birt)</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">JDBC Drivers</h2>
					<p>You will likely want to use your own JDBC driver with BIRT. Use the data source editor's JDBC driver management wizard. To start the wizard, open a BIRT report design, go to the Data Explorer view, right click on "Data Sources" and select "New Data Source". Choose "JDBC Data Source" and click "Next". In the next dialog, choose "Manage Drivers..." to bring up the "Manage JDBC Drivers" dialog.</p>
					<p>In the "JAR Files" tab, click on "Add..." to add the JAR file required by your JDBC driver. Then go to the "Driver" tab to confirm that the list of drivers includes the new drivers added. You may also want to assign a display name and URL template for the new drivers in this tab.</p>
					
					<h2 class="topic-section-header padding-top-small">Updating a BIRT Installation</h2>
					<p>If you have a version of BIRT installed, and want to install a newer version, do the following:
					<ul class="eclipse-list">
						<li>Close Eclipse.</li><br />
						<li>Locate your Eclipse plugins directory. If you installed on Windows in the default location, this is "C:\program files\eclipse\plugins".</li><br />
						<li>Delete all directories that start with "org.eclipse.birt".</li><br />
						<li>Download and install BIRT as described in the BIRT section above.</li><br />
						<li>Restart Eclipse with the -clean option: eclipse -clean</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Deploying to a Java EE Sever</h2>
					<p>Please see <a href="integrating/viewer-setup.php">Setting up the BIRT Viewer</a>.</p>
					
					<h2 class="topic-section-header padding-top-small">Installing BIRT Language Packs on Windows</h2>
					<p>BIRT can be downloaded and installed in different ways:
					<ul class="eclipse-list">
						<li><a href="http://download.eclipse.org/birt/downloads/" target="_blank">Download</a> the Language Pack for the desired product and extract into your eclipse install.</li><br />
						<li>Open the Regional and Language Options in the Control Panel and switch to the advanced tab.</li><br />
						<li>Select the group 1 language you desire from the drop-down combo box.</li><br />
						<li>Save changes and restart the system.</li><br />
						<li>Launch Eclipse and select Window->Preferences->Report Design->Preview. Select the desired language from the drop-down combo box.</li><br />
						<li>Restart Eclipse.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Common Problems</h2>
					<p>Some problems are due to cached information within Eclipse. Eclipse caches information about plugins for faster startup. Adding BIRT as we did above may result in stale cached information. Symptoms of this problem include:
					<ul class="eclipse-list">
						<li>The BIRT perspective does not appear in Eclipse.</li><br />
						<li>You receive "An error occurred" dialogs when opening reports or using the BIRT UI.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Cleaning Cached Plugin Information</h2>
					<p>The solution is to clean up the cached information. The recommended practice is to start Eclipse with the -clean option:</p>
					<p>eclipse -clean</p>
					
					<h2 class="topic-section-header padding-top-small">Cleaning the Cache on Windows</h2>
					<p>If you are on Windows, and are not familiar with how to invoke Eclipse from the command line, do the following:
					<ul class="eclipse-list">
						<li>Choose Start->All Programs->Accessories->Command Prompt</li><br />
						<li>Move to the directory where you installed eclipse. If you installed Eclipse in the standard location, enter:<br /><br />
						cd "\Program Files\eclipse"</li><br />
						<li>Run Eclipse with the -clean option:<br /><br />
						eclipse -clean</li><br />
						<li>Eclipse will restart. Again check for the BIRT perspective.</li><br />
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