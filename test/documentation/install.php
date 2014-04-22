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
						<li>as a package that only contains the BIRT plugins (Framework) from the download page. Note additional requirements are located on the <a href="http://download.eclipse.org/birt/downloads" target="_blank">download page</a> as well. These include dependencies on other Eclipse projects. These dependencies are listed on the download page for the specific build.</li><br />
					</ul>
					</p>
					<p>All of the above downloads contain the BIRT designer. The BIRT project has many additional downloads, including a runtime for deploying the BIRT engine in a web application or standalone Java application. The additional downloads are available for any build of BIRT by selecting the appropriate build <a href="http://download.eclipse.org/birt/downloads/build_list.php" target="_blank">here</a>.</p>
					<p>Once you have downloaded one of the above packages, unzip the package into your chosen directory. This will create an eclipse directory that contains eclipse.exe. Run eclipse.exe to start the designer.</p>
					
					<h2 class="topic-section-header padding-top-small">Create a Windows Shortcut</h2>
					<p>BIRT can be downloaded and installed in different ways:
					<ul class="eclipse-list">
						<li>Designer Install</li><br />
						<li>Framework Designer Install</li><br />
						<li>JDBC Drivers</li><br />
						<li>Updating a BIRT Installation</li><br />
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Framework Designer Install</h2>
					<p>BIRT can be downloaded and installed in different ways:
					<ul class="eclipse-list">
						<li>Designer Install</li><br />
						<li>Framework Designer Install</li><br />
						<li>JDBC Drivers</li><br />
						<li>Updating a BIRT Installation</li><br />
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Optional Eclipse Link File</h2>
					<p>BIRT can be downloaded and installed in different ways:
					<ul class="eclipse-list">
						<li>Designer Install</li><br />
						<li>Framework Designer Install</li><br />
						<li>JDBC Drivers</li><br />
						<li>Updating a BIRT Installation</li><br />
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">JDBC Drivers</h2>
					<p>BIRT can be downloaded and installed in different ways:
					<ul class="eclipse-list">
						<li>Designer Install</li><br />
						<li>Framework Designer Install</li><br />
						<li>JDBC Drivers</li><br />
						<li>Updating a BIRT Installation</li><br />
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Updating a BIRT Installation</h2>
					<p>BIRT can be downloaded and installed in different ways:
					<ul class="eclipse-list">
						<li>Designer Install</li><br />
						<li>Framework Designer Install</li><br />
						<li>JDBC Drivers</li><br />
						<li>Updating a BIRT Installation</li><br />
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Deploying to a Java EE Sever</h2>
					<p>BIRT can be downloaded and installed in different ways:
					<ul class="eclipse-list">
						<li>Designer Install</li><br />
						<li>Framework Designer Install</li><br />
						<li>JDBC Drivers</li><br />
						<li>Updating a BIRT Installation</li><br />
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Installing BIRT Language Packs on Windows</h2>
					<p>BIRT can be downloaded and installed in different ways:
					<ul class="eclipse-list">
						<li>Designer Install</li><br />
						<li>Framework Designer Install</li><br />
						<li>JDBC Drivers</li><br />
						<li>Updating a BIRT Installation</li><br />
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Common Problems</h2>
					<p>BIRT can be downloaded and installed in different ways:
					<ul class="eclipse-list">
						<li>Designer Install</li><br />
						<li>Framework Designer Install</li><br />
						<li>JDBC Drivers</li><br />
						<li>Updating a BIRT Installation</li><br />
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Cleaning Cached Plugin Information</h2>
					<p>BIRT can be downloaded and installed in different ways:
					<ul class="eclipse-list">
						<li>Designer Install</li><br />
						<li>Framework Designer Install</li><br />
						<li>JDBC Drivers</li><br />
						<li>Updating a BIRT Installation</li><br />
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