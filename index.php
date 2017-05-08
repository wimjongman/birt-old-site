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
		$metaTitle 		= "BIRT Home";
		$metaKeywords	= "Eclipse,BIRT,Java,Java EE,Web,RCP,Data,Visualization,Reports,Reporting,Embed,Rich-Client,Dashboards";
		$metaAuthor		= "";
		$metaDescription = "BIRT is an open source technology platform used to create data visualizations and reports that can be embedded into rich client and web applications.";
		$ogTitle		= "Eclipse BIRT Project Home";
		$ogImage		= "http://www.eclipse.org/birt/img/logo/Birt-logo.png";
		$ogDescription  = "BIRT is an open source technology platform used to create data visualizations and reports that can be embedded into rich client and web applications.";
		
		//only use following if you know what you are doing - else just leave them as is.
		$robotsIndex 	= "index"; // ***Only usable values are 'index', 'noindex'
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
					<div class="eclipse-home-banner">
						<img src = "<?php $basePath ?>img/logo/birt-purple-logo.png" style="margin-left: 45px;margin-top: 50px;margin-right:50px;float:left;" />
						<div class="eclipse-home-banner-inner" style="padding-top:110px;">
							<div style="font-size:60px;font-weight:100;color:#42187e;margin-bottom:30px;">BIRT</div>
							<div style="font-size: 18px;font-weight: 600;color: #777777;margin-bottom:30px;margin-right:20px;">An <span class="eclipse-txt-purple">open source</span> technology platform used to create <span class="eclipse-txt-bloodorange">data visualizations</span> and reports that can be embedded into rich client and <span class="eclipse-txt-lightgreen">web applications</span>.</div>
							<div style="margin-left: 249px;margin-right: 20px;"><table><tbody><tr><td><a href="http://download.eclipse.org/birt/downloads" class="square-button button-color-yellow" style="padding:10 30px; margin-right:30px;">Download BIRT</a></td>
							<td><a href="/birt/about/" class="square-button button-color-yellow" style="padding:10 30px;">Learn More</a></td></tr></tbody></table></div>
						</div>
					</div>
				</div>
			</div>

			<div class="dev-main eclipse-main bord-yellow">
				<div class="eclipse-main-container">	
					<h1 class="eclipse-title-main">BIRT Buzz</h1>
					
					<h2 class="topic-section-header padding-top-small">Upcoming Events</h2>
					<p>
						<!--<ul class="eclispe-list-default">
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/255-oscon-2015/">OSCON</a><br />Portland, OR<br />July 20-24</li></ul>-->
					</p>
					
					<div class="clearfix"></div>
					<p><br />View Full Calendars: <a href="http://developer.actuate.com/community/forum/index.php?/calendar/" target="_blank">BIRT Developer Center Community Calendar</a> | <a href="http://events.eclipse.org/" target="_blank">Eclipse Calendar</a></p>

					<h2 class="topic-section-header padding-top-small">Recent Blogs</h2>
					<p><a target="_blank" href="http://blogs.actuate.com/how-to-add-custom-visualizations-in-birt-ihub-3-1/">How to Add Custom Visualizations in BIRT iHub 3.1</a><br />
					OpenText recently released BIRT iHub 3.1, the latest version of iHub. The release adds several features, including a REST API and support for Custom Visualizations. In this post, I will explain what custom visualizations are and show you how you can include third-party visualizations in BIRT content with essentially no coding. Custom Visualization Basics Data visualization...<a href="http://blogs.actuate.com/how-to-add-custom-visualizations-in-birt-ihub-3-1/" target="_blank">Read More</a></p>
					
					<p><a target="_blank" href="http://blogs.actuate.com/step-aside-cloud-mobile-and-big-data-iot-has-just-entered-the-room/">Step Aside Cloud, Mobile and Big Data, IoT has just Entered the Room</a><br />
					This article provides a review of the ARC Advisory Group Forum in Orlando and expands on the ever increasing importance of analytics in relation to the Internet of Things The room I am referring to here is the office of the CIO, or should that be CTO or CDO (Chief Digital Officer), you see even as technology is evolving, the corporate role to manage digital transformation is evolving ...<a href="http://blogs.actuate.com/step-aside-cloud-mobile-and-big-data-iot-has-just-entered-the-room/" target="_blank">Read More</a></p>
					
									<p>See More Blogs: <a target="_blank" href="http://blogs.actuate.com/">BIRT Developer Center Community Blogs</a> | <a href="http://birtworld.blogspot.com/" target="_blank">BIRT World</a> | <a href="http://www.planeteclipse.org/planet/" target="_blank">Planet Eclipse Blog</a></p>

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