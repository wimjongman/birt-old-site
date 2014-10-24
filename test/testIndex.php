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

<body class="" id="body_solstice">
<?php echo $PagePart->getHeader(); ?>
<section id="breadcrumb" class="defaut-breadcrumbs hidden-print">
			  <div class="container">
			    <div class="col-xs-24">
						<ol class="breadcrumb"><li><a href="https://www.eclipse.org/">Home</a></li><li><a href="https://www.eclipse.org/projects/">Projects</a></li><li><a href="https://www.eclipse.org/eclipse">eclipse</a></li></ol>					</div>
			    			    </div>
		    </section>
<?php echo $PagePart->getAfterBody(); ?>

<main role="main" class=" no-promo">
		  <div class="container background-image-none" id="novaContent">
				
				<?php echo $PagePart->getSideMenu(); ?>


			<div class="dev-main eclipse-main">
				<div class="eclipse-main-container">	
					<div class="eclipse-home-banner">
						<img src = "<?php $basePath ?>img/logo/birt-purple-logo.png" style="margin-left: 45px;margin-top: 50px;margin-right:50px;float:left;" />
						<div class="eclipse-home-banner-inner" style="padding-top:110px;">
							<div style="font-size:60px;font-weight:100;color:#42187e;margin-bottom:30px;">BIRT</div>
							<div style="font-size: 18px;font-weight: 600;color: #777777;margin-bottom:30px;margin-right:20px;">An <span class="eclipse-txt-purple">open source</span> technology platform used to create <span class="eclipse-txt-bloodorange">data visualizations</span> and reports that can be embedded into rich client and <span class="eclipse-txt-lightgreen">web applications</span>.</div>
							<div style="margin-left: 249px;margin-right: 20px;"><table><tbody><tr><td><a href="http://download.eclipse.org/birt/downloads" class="square-button button-color-yellow" style="padding:10 30px; margin-right:30px;">Download BIRT 4.3.2</a></td>
							<td><a href="/birt/about/" class="square-button button-color-yellow" style="padding:10 30px;">Learn More</a></td></tr></tbody></table></div>
						</div>
					</div>
				</div>
			</div>

			<div class="dev-main eclipse-main bord-yellow">
				<div class="eclipse-main-container">	
					<h1 class="eclipse-title-main">BIRT Buzz</h1>
					<p>(Items in the BIRT Buzz section link to the BIRT Developer Center.)</p>
					
					<h2 class="topic-section-header padding-top-small">Upcoming Events</h2>
					<p>
						<ul class="eclispe-list-default">
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/183-using-birt-to-empower-government-clients-with-secu/">Using BIRT to Empower<br />Government Clients with<br />Secure and Enhanced<br />Reporting Functionality</a><br />Webinar<br />April 29<br />11:00 AM PT</li>
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/182-birt-live-new-york/">BIRT Live! | New York</a><br />New York, NY<br />April 30<br />8:30 AM - 4:30 PM ET</li>
							<li><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/185-birt-live-boston/">BIRT Live! | Boston</a><br />Boston, MA<br />May 1<br />8:30 AM - 4:30 PM ET</li>
						</ul>
					</p>
					
					<div class="clearfix"></div>
					<p><br /><a href="http://developer.actuate.com/community/forum/index.php?/calendar/" target="_blank">View Full Calendar</a></p>

					<h2 class="topic-section-header padding-top-small">Recent Blogs</h2>
					<p><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/blog/14/entry-532-birt-and-cloudera-give-your-hadoop-data-meaning/">BIRT and Cloudera: Give Your Hadoop Data Meaning</a><br />
					BIRT and BIRT iHub are now certified with Cloudera 5!...<a href="http://developer.actuate.com/community/forum/index.php?/blog/14/entry-532-birt-and-cloudera-give-your-hadoop-data-meaning/" target="_blank">Read More</a></p>
					
					<p><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/blog/45/entry-531-creating-a-custom-oda-part-1/">Creating a Custom ODA (Part 1)</a><br />
					In BIRT there are several ways we can connect to data. Some of these methods are out of the box such as MySQL while others require a little more work. This blog series aims to teach you how to bring in the power of scripted data sources and POJO's while adding an easy to use interface for the report designer. By the end of this series you should know how to...<a href="" target="_blank">Read More</a>
					</p>

					<p><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/blog/14/entry-530-creating-data-driven-web-apps-using-birt-eclipsecon2014/">Creating Data Driven Web Apps Using BIRT - EclipseCon 2014</a><br />
					This past week at EclipseCon 2014, I had a session about creating data driven web applications with BIRT. This session was meant to walk you through the entire process of design and deployment of a BIRT web application. I started with...<a href="http://developer.actuate.com/community/forum/index.php?/blog/14/entry-530-creating-data-driven-web-apps-using-birt-eclipsecon2014/" target="_blank">Read More</a></p>
					
					<p><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/blog/45/entry-529-creating-an-iot-dashboard-with-birt/">Creating an IoT Dashboard with BIRT</a><br />
					This month marked the 10th annual EclipseCon and I was able to attend and talk about BIRT with the community and show off some of the cool things we've been working on at Actuate. One of the main themes that I was able to contribute to was the Internet of Things. If you're not familiar with...<a href="http://developer.actuate.com/community/forum/index.php?/blog/45/entry-529-creating-an-iot-dashboard-with-birt/" target="_blank">Read More</a></p>
					

					<p><a href="http://developer.actuate.com/community/forum/index.php?/blogs/">See More Blogs</a></p>

				</div>
			</div>


		
	</div>
</main>
	
	
		<?php echo $PagePart->getFooter(); ?>
	

</body>
</html>
