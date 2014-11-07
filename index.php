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
							<div style="margin-left: 249px;margin-right: 20px;"><table><tbody><tr><td><a href="http://download.eclipse.org/birt/downloads" class="square-button button-color-yellow" style="padding:10 30px; margin-right:30px;">Download BIRT 4.4.1</a></td>
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
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/244-data-driven-summit-singapore/">Data Driven Summit | Singapore</a><br />Singapore<br />November 11</li>
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/226-birt-live-arlington/">BIRT Live! | Arlington</a><br />Arlington, VA<br />November 12</li>
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/227-birt-live-research-triangle-park/">BIRT Live! | Research Triangle Park</a><br />Research Triangle Park, NC<br />November 13</li>
						</ul>
					</p>
					
					<div class="clearfix"></div>
					<p><br />View Full Calendars: <a href="http://developer.actuate.com/community/forum/index.php?/calendar/" target="_blank">BIRT Developer Center Community Calendar</a> | <a href="http://events.eclipse.org/" target="_blank">Eclipse Calendar</a></p>

					<h2 class="topic-section-header padding-top-small">Recent Blogs</h2>
					<p><a target="_blank" href="http://blogs.actuate.com/employment-opportunity-project-lead-eclipse-birt/">Employment Opportunity: Project Lead - Eclipse BIRT</a><br />
					How would you like to have a leadership role in the development of an open source project that has over 3.5 million developers using it in their applications worldwide? If you would and you live in or would relocate to the Bay Area, you're in luck. Actuate, the founders of the Eclipse BIRT open source project, are looking for an architect and hands-on developer to lead the open sourc...<a href="http://blogs.actuate.com/employment-opportunity-project-lead-eclipse-birt/" target="_blank">Read More</a></p>
					
					<p><a target="_blank" href="http://blogs.actuate.com/introducing-birt-ihub-f-type-integrating-into-applications/">Introducing BIRT iHub F-Type: Integrating into Applications</a><br />
					If you're familiar with open source BIRT and what the out-of-the-box options for integration are, you know that you had the viewer that could be called by URL, the viewer tag library that allowed you to embed the viewer into a JSP page, or a custom solution you built using the BIRT APIs. With BIRT iHub F-Type, you still have the ability to call visualizations by URL, but you also add t...<a href="http://blogs.actuate.com/introducing-birt-ihub-f-type-integrating-into-applications/" target="_blank">Read More</a></p>

					<p><a target="_blank" href="http://blogs.actuate.com/extend-birt-interactive-viewer-with-a-pop-up-dialog-box-code/">Extend BIRT Interactive Viewer with a Pop-up Dialog Box</a><br />
					Second in a series. In a previous BIRT Interactive Viewer Extension (found here), a few lines of jQuery code let you add row highlighting capability to BIRT tables. In this post we extend that idea further, showing how to add a fully configurable pop-up dialog box to display details that don't need to appear in every row. Why would you want this? We've all worked with tables in...<a href="http://blogs.actuate.com/extend-birt-interactive-viewer-with-a-pop-up-dialog-box-code/" target="_blank">Read More</a></p>
					
					<p><a target="_blank" href="http://blogs.actuate.com/transport-15-million-people-fuggedaboutit-new-york-city-chooses-birt/">Transport 15 Million People? Fuggedaboutit! New York City Chooses BIRT</a><br />
					They say if you can make it there, you can make it anywhere. So when New York City Transit Authority (NYCT) officials needed a technology platform to help them visualize North America's largest transportation network, they of course selected BIRT. Challenged with moving 15 million people throughout a 5,000-square-mile area, NYCT's Operations Planning department n...<a href="http://blogs.actuate.com/transport-15-million-people-fuggedaboutit-new-york-city-chooses-birt/" target="_blank">Read More</a></p>
					
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