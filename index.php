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
							<div style="margin-left: 249px;margin-right: 20px;"><table><tbody><tr><td><a href="http://download.eclipse.org/birt/downloads" class="square-button button-color-yellow" style="padding:10 30px; margin-right:30px;">Download BIRT 4.4.0</a></td>
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
						<ul class="eclispe-list-default">
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/207-new-free-birt-deployment-option-release-event/">New, Free BIRT Deployment Option Release Event</a><br />San Jose, CA<br />July 10<br />5:30 PM - 8:30 PM PT</li>
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/201-birt-live-philadelphia/">BIRT Live! | Philadelphia</a><br />Philadelphia, PA<br />July 16<br /> 8:30 AM - 4:30 PM ET</li>
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/202-birt-live-princeton/">BIRT Live! | Princeton</a><br /Plainsboro, NJ<br />July 17<br />8:30 AM - 4:30 PM ET</li>
						</ul>
					</p>
					
					<div class="clearfix"></div>
					<p><br />View Full Calendars: <a href="http://developer.actuate.com/community/forum/index.php?/calendar/" target="_blank">BIRT Developer Center Community Calendar</a> | <a href="http://events.eclipse.org/" target="_blank">Eclipse Calendar</a></p>

					<h2 class="topic-section-header padding-top-small">Recent Blogs</h2>
					<p><a target="_blank" href="http://blogs.actuate.com/ids-streamlines-and-secures-dod-reporting-with-birt/">IDS Streamlines and Secures DoD Reporting with BIRT</a><br />
					Imagine a web-based reporting application that manages financial and project data for some of the biggest projects in the largest department of the United States government. An application accessing multiple data sources, used by thousands of people, and creating thousands of reports. That describes the Comprehensive Cost and Requirement System (CCaR) by Integrated Data Services...<a href="http://blogs.actuate.com/ids-streamlines-and-secures-dod-reporting-with-birt/" target="_blank">Read More</a>
					</p>

					<p><a target="_blank" href="http://blogs.actuate.com/become-a-birt-expert-with-the-birt-developer-video-series/">Become a BIRT Expert with the BIRT Developer Video Series</a><br />
					Want to learn more about BIRT but feel like you don't have the time? Then you'll want to check out our series of YouTube videos that teach you more about Design, Deploying and Extending the functionality of your BIRT content. Actuate has a fantastic series of short videos that you can watch in between meetings or while you are at lunch. You'll be greeted by one of our BIRT Ex...<a href="http://blogs.actuate.com/become-a-birt-expert-with-the-birt-developer-video-series/" target="_blank">Read More</a></p>
					
					<p><a target="_blank" href="http://blogs.actuate.com/whats-new-in-ihub-3/">What's New in BIRT iHub 3?</a><br />
					In December, Actuate released the latest generation of the BIRT iHub (iHub3) for distribution. The completely updated iHub 3 simplifies the design and deployment of personalized analytics and insights via a single platform that integrates BIRT based, visually appealing, interactive application services, predictive analytics services, and customer content services. This release pr...<a href="http://blogs.actuate.com/whats-new-in-ihub-3/" target="_blank">Read More</a></p>
					
					<p><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/blog/14/entry-532-birt-and-cloudera-give-your-hadoop-data-meaning/">BIRT and Cloudera: Give Your Hadoop Data Meaning</a><br />
					BIRT and BIRT iHub are now certified with Cloudera 5!...<a href="http://developer.actuate.com/community/forum/index.php?/blog/14/entry-532-birt-and-cloudera-give-your-hadoop-data-meaning/" target="_blank">Read More</a></p>
					
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