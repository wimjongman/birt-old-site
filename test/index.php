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
		$metaTitle 		= "BIRT Home";
		$metaKeywords	= "Eclipse Keywords";
		$metaAuthor		= "";
		$metaDescription = "Eclipse Super Description for SEO in da House";
		$ogTitle		= "This is the OG Super Title";
		$ogImage		= "http://www.actuate.com/images/logo.png";
		$ogDescription  = "This is the ogDescription to be displayed in share options.";
		
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
							<div style="font-size: 18px;font-weight: 600;color: #777777;margin-bottom:30px;margin-right:20px;">An <span class="eclipse-txt-purple">open source</span> reporting system that integrates with your <span class="eclipse-txt-bloodorange">Java/Java EE</span> application to produce <span class="eclipse-txt-lightgreen">compelling reports.</span></div>
							<div style="margin-left: 249px;margin-right: 20px;"><table><tbody><tr><td><a href="http://download.eclipse.org/birt/downloads" class="square-button button-color-yellow" style="padding:10 30px;">Download BIRT 4.3.2</a></td></tr></tbody></table></div>
						</div>
					</div>
				</div>
			</div>

			<div class="dev-main eclipse-main bord-yellow">
				<div class="eclipse-main-container">	
					<h1 class="eclipse-title-main">BIRT Buzz</h1>
					
					<h2 class="topic-section-header padding-top-small">Upcoming Events</h2>
					<p>(Items inthe Events list are hosted in the BIRT Developer Center Calendar)
						<ul class="eclispe-list-default">
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/183-using-birt-to-empower-government-clients-with-secu/">Using BIRT to Empower Government Clients with Secure and Enhanced Reporting Functionality</a><br />Webinar<br />April 29<br />11:00 AM PT</li>
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/182-birt-live-new-york/">BIRT Live! | New York</a><br />New York, NY<br />April 30<br />8:30 AM - 4:30 PM ET</li>
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/185-birt-live-boston/">BIRT Live! | Boston</a><br />Boston, MA<br />May 1<br />8:30 AM - 4:30 PM ET</li>
						</ul>
					</p>
					
					<div class="clearfix"></div>

					<h2 class="topic-section-header padding-top-small">Recent Blogs</h2>
					<p><a href="http://developer.actuate.com/community/forum/index.php?/blog/61/entry-524-birt-to-make-a-big-showing-at-eclipsecon/">BIRT to Make a Big Showing at EclipseCon</a><br />
					An original contributor to the Eclipse Foundation, Actuate is gearing up to demonstrate how BIRT can visualize and embed even your most complex data sets including the so-called Internet of things.</p>
					
					<p><a href="http://developer.actuate.com/community/forum/index.php?/blog/61/entry-523-3-ways-birt-adds-value-to-embedded-systems/">3 Ways BIRT Adds Value to Embedded Systems</a><br />
					If scale and functionality are what your reporting needs, BIRT is the most embeddable tool around.
					</p>

					<p><a href="http://developer.actuate.com/community/forum/index.php?/blog/14/entry-522-the-new-birt-developer-center/">The New BIRT Developer Center</a><br />
					If you've logged into BIRT Exchange during the past few months, you've surely noticed some changes! There has been a complete structure and domain change.</p>
					
					<p><a href="http://developer.actuate.com/community/forum/index.php?/blog/61/entry-521-implementing-ihub-3-what-you-need-to-know-now/">Implementing iHub 3, What You Need to Know Now</a><br />
					The latest version brings a host of improvements to big data and mobile apps including animated HTML5 visualizations.</p>
					

					<p><a href="http://developer.actuate.com/community/forum/index.php?/blogs/">Go to Actuate Blog ></a></p>

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