<?php

session_start();

require_once( $_SERVER['DOCUMENT_ROOT'] . "birt/test/common/config.php");
$PagePart 	= new PagePart();

$pageTitle 		= "Eclipse BIRT Test Home";
	$pageKeywords	= "";
	$pageAuthor		= "";

$html = <<<EOHTML
<!-- Google Tag Manager -->
<noscript><iframe src=\"//www.googletagmanager.com/ns.html?id=GTM-PW8LFV\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PW8LFV');</script>
<!-- End Google Tag Manager -->

<div id="maincontent">
        <div id="midcolumn">


			<div style="background-color:#fafafa; border-top:5px solid #42187e; padding-bottom:20px; margin-bottom:30px;">
				<div style="margin: 0 20px;">	
					<div style="background-image:url('http://www.eclipse.org/birt/test/img/small-grid.png'); min-height:355px; background-repeat:no-repeat; margin-top:20px;">
						<img src = "http://www.eclipse.org/birt/test/img/reporting.png" style="margin-left: 45px;margin-top: 50px;margin-right:50px;float:left;" />
						<div style="padding-top:70px;">
							<div style="font-size:60px;font-weight:100;color:#42187e;margin-bottom:10px;">BIRT</div>
							<div style="font-size: 18px;font-weight: 600;color: #777777;margin-bottom:30px;margin-right:20px;">An <span style="color:purple;">open source</span> technology platform used to create <span style="color:orange">data visualizations</span> and reports that can be embedded into rich client and <span style="color:green">web applications</span>.</div>
							<div style="margin-left: 249px;margin-right: 20px;"><table><tbody><tr><td><a href="http://download.eclipse.org/birt/downloads" class="square-button button-color-yellow" style="padding:10 30px; margin-right:30px;">Download BIRT 4.3.2</a></td>
							<td><a href="/birt/about/" class="square-button button-color-yellow" style="padding:10 30px;">Learn More</a></td></tr></tbody></table></div>
						</div>
					</div>
				</div>
			</div>

			<div style="background-color:#fafafa; border-top:5px solid #42187e; padding-bottom:20px; margin-bottom:30px;">
				<div style="margin: 0 20px;">	
					<h1 style="color: #333; font-size: 36px; line-height: 40px; margin: 20px 0 12px 0; font-weight: 100;">BIRT Buzz</h1>
					<p>(Items in the BIRT Buzz section link to the BIRT Developer Center.)</p>
					
					<h2 style="color: #464646; margin: 10px 0px; font-size: 18px; font-weight: 600; border-bottom: 2px solid #464646; padding-top:16px;">Upcoming Events</h2>
					<p>
						<ul style="list-style:none;">
							<li style="display:inline; width:33%; float:left;"><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/183-using-birt-to-empower-government-clients-with-secu/">Using BIRT to Empower<br />Government Clients with<br />Secure and Enhanced<br />Reporting Functionality</a><br />Webinar<br />April 29<br />11:00 AM PT</li>
							<li style="display:inline; width:33%; float:left;"><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/182-birt-live-new-york/">BIRT Live! | New York</a><br />New York, NY<br />April 30<br />8:30 AM - 4:30 PM ET</li>
							<li style="display:inline; width:33%; float:left;"><a target="_blank" href="http://developer.actuate.com/community/forum/index.php?/calendar/event/185-birt-live-boston/">BIRT Live! | Boston</a><br />Boston, MA<br />May 1<br />8:30 AM - 4:30 PM ET</li>
						</ul>
					</p>
					
					<div class="clearfix"></div>
					<p><br /><a href="http://developer.actuate.com/community/forum/index.php?/calendar/" target="_blank">View Full Calendar</a></p>

					<h2 style="color: #464646; margin: 10px 0px; font-size: 18px; font-weight: 600; border-bottom: 2px solid #464646; padding-top:16px;">Recent Blogs</h2>
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

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);


?>
