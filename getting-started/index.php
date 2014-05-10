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
		$metaTitle 		= "Getting Started";
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
					<h1 class="eclipse-title-main">Getting Started</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="#download">Download BIRT</a></li>
		                    <li><a href="#install">Install</a></li>
		                    <li><a href="#tutorial">Tutorial</a></li>
		                    <li><a href="#examples">Examples</a></li>
		                    <li><a href="#documentation">Documentation</a></li>
		                    <li><a href="#morehelp">More Help</a></li>
		                </ul>

			        </div>

			        <a name="download"></a>
					<h2 class="topic-section-header padding-top-small">Download</h2>
					<p>BIRT has a design and runtime component. Both can be found in several different forms and versions, on the <a href="http://download.eclipse.org/birt/downloads" target="_blank">download</a> page.</p>
										
					<a name="install"></a>
					<h2 class="topic-section-header padding-top-small">Install</h2>
					<p>Once you've downloaded your BIRT component, you need to install it. For instructions on how to install BIRT, take a look at the <a href="/birt/documentation/install.php" target="_blank">Install Guide</a> in the documentation.</p>
					
					<a name="tutorial"></a>
					<h2 class="topic-section-header padding-top-small">Tutorial</h2>
					<p>This brief tutorial walks you through building a simple report with BIRT. It introduces the major UI features, and many of the BIRT reporting elements. At the completion of this tutorial, you should be able to start building your own reports using your own database.</p>
					<p>In this tutorial, you'll create a simple customer listing report, with the customers grouped by state and city. For each customer, you'll display a name and phone number.</p>
					<p><a href="/birt/documentation/tutorial/" target="_blank">Get Started</a></p>
					
					<a name="examples"></a>
					<h2 class="topic-section-header padding-top-small">Examples</h2>
					<p>Now that you've learned the basics of creating a BIRT design, check out some examples of what you can do with BIRT.<!-- There are a couple different places you can find examples:-->
					<ul class="eclipse-list">
						<li>On the <a href="/birt/demos/" target="_blank">Demos</a> page.</li>
						<!--<li>Check out the <a href="http://developer.actuate.com/design-center/design-gallery/" target="_blank">Design Gallery</a> on the BIRT Developer Center.</li>-->
					</ul>
					</p>
					
					<a name="documentation"></a>
					<h2 class="topic-section-header padding-top-small">Documentation</h2>
					<p>Now that you know enough about BIRT to be dangerous, you'll probably want to see some documentation. A couple places you can find documentation are:
					<ul class="eclipse-list">
						<li>On the <a href="/birt/demos/" target="_blank">Documentation</a> page.</li>
						<li>In the <a href="http://download.actuate.com/design-center/" target="_blank">Design</a> and <a href="http://download.actuate.com/deployment-center/" target="_blank">Deployment</a> Centers on the BIRT Developer Center.</li>
					</ul>
					</p>
					
					<a name="morehelp"></a>
					<h2 class="topic-section-header padding-top-small">More Help</h2>
					<p>Still looking for direction? Plenty of help can be had by visiting the <a href="" target="_blank">Community</a> page or by heading over to the <a href="http://developer.actuate.com/community/" target="_blank">BIRT Developer Center Community</a>. You can also see the <a href="http://wiki.eclipse.org/index.php/BIRT_Project" target="_blank">FAQ/Wiki</a>.</p>

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