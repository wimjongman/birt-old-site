<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();
	$Nav	= new Nav();
	$Menu 	= new Menu();
	include($App->getProjectCommon());

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Eclipse Chart Engine";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">	

	
	<h1>Eclipse Chart Engine</h1>
	
		<blockquote>
			<ul>
				<li><a href="#overview">Overview</a></li>
				<li><a href="#gallery">Chart Gallery</a></li>
				<li><a href="#reports">Report Developers</a></li>
				<li><a href="#standalone">Standalone Chart Users</a></li>
				<li><a href="#developers">Developers/Contributors</a></li>
<li><a href="http://wiki.eclipse.org/index.php/BIRT/FAQ/Charts2.1">Charting FAQ</a></li>				
			</ul>
		</blockquote>	
	
	<h2><a name="overview">Overview</a></h2>
	<p>
The Eclipse Chart Engine is a complete open-source charting library that can be used either standalone or embedded within BIRT Reports. It includes the following components:
</p>
<ul class="midlist">
	<li>A chart builder user interface, featuring live preview</li> <br><a href="images/chartbuildermid.PNG" target="_blank"><img src="images/chartbuilderthumnail.PNG"></a>
    <li>A rich model API based on the Eclipse Modeling Framework (EMF)</li>
	<li>An engine API to load/save the model to XML, bind data, and render charts</li>
</ul>
<br>
<p>
 This charting library is entirely built  on the Eclipse plugin framework and is fully extensible. So it is possible to add new types and new output formats by implementing extension points. 
<br>


	</p>
	<h2><a name="gallery">Charting Gallery</a></h2>
	<p>

The Charting engine supports many types of charts including Bar, 
Line, Area, Pie, Meter, Scatter, Stock, Bubble, Difference, and Gantt types. 
In addition each chart type has one or more subtypes such as stacked and percent stacked and one or more dimension possibilites 2D, 2D with depth and 3D.
<br>
<img src="images/types.PNG">
<br>
It is also possible to build combinational charts that include different series types in combination. As an example you can display a bar chart with a superimposed line chart.	
This can be achieved by adding a secondary axis or additional series.

The Chart engine also supports flipping the orienation of charts that contain axes.
<br>
<table>
	<tr>
		<td>
		<a href="gallery.php#bar">Bar Chart</a><br>
		<ul>
		<li>Bar, Tube, Cone, Pyramid</li>
		<li>2D, 2D with depth, 3D</li>
		<li>Side by side, Stacked, 100% Stacked</li>
		<li>Horizontal/Vertical</li>
		</ul>
		</td>
		<td><center>
			<a href="gallery.php#bar"><img src="images/barthumb.PNG"></a>
		</center></td>

		<td>
		<a href="gallery.php#line">Line Chart</a>
		<ul>
		<li>2D, 2D with depth, 3D</li>
		<li>Overlay, Stacked, 100% Stacked</li>
		<li>Horizontal/Vertical</li>
		<li>Various Markers</li>
		<li>Curved or Straight Lines</li>
		</ul>			
		</td>
		<td><center>
			<a href="gallery.php#line"><img src="images/linethumb.PNG"></a>
		</center></td>
	</tr>
	<tr>
		<td>
		<a href="gallery.php#area">Area Chart</a>
		<ul>
		<li>2D, 2D with depth, 3D</li>
		<li>Overlay, Stacked, 100% Stacked</li>
		<li>Horizontal/Vertical</li>
		<li>Straight or Curved Area</li>
		</ul>		
		</td>
		<td><center>
			<a href="gallery.php#area"><img src="images/areathumb.PNG"></a>
		</center></td>

		<td>
		<a href="gallery.php#pie">Pie Chart</a>
		<ul>
		<li>2D, 2D with depth</li>
		<li>Minimum slice</li>
		<li>Slice explosion</li>		
		</ul>		
		</td>
		<td><center>
			<a href="gallery.php#pie"><img src="images/piethumb.PNG"></a>
		</center></td>
	</tr>
	<tr>
		<td>
		<a href="gallery.php#meter">Meter Chart</a>
		<ul>
		<li>Region coloring</li>
		<li>Custom angles</li>
		<li>Custom needles</li>	
		</ul>		
		</td>
		<td><center>
			<a href="gallery.php#meter"><img src="images/meterthumb.PNG"></a>
		</center></td>

		<td>
		<a href="gallery.php#scatter">Scatter Chart</a>
		<ul>
		<li>Markers palette</li>
		<li>Linear Scales</li>	
		</ul>		
		</td>
		<td><center>
			<a href="gallery.php#scatter"><img src="images/scatterthumb.PNG"></a>
		</center></td>
	</tr>
	<tr>
		<td>
		<a href="gallery.php#stock">Stock Chart</a>
		<ul>
		<li>CandleStick, Bar Stick</li>
		</ul>		
		</td>
		<td><center>
			<a href="gallery.php#stock"><img src="images/stockthumb.PNG"></a>
		</center></td>

		<td>
		<a href="gallery.php#bubble">Bubble Chart</a>
		<ul>
		<li>Various Bubble Shapes</li>
		</ul>		
		</td>
		<td><center>
			<a href="gallery.php#bubble"><img src="images/bubblethumb.PNG"></a>
		</center></td>
	</tr>	
	<tr>
		<td>
		<a href="gallery.php#difference">Difference Chart</a>
		<ul>
		<li>Curved or Straight Lines</li>
		<li>Two color areas</li>	
		</ul>		
		</td>
		<td><center>
			<a href="gallery.php#difference"><img src="images/differencethumb.PNG"></a>
		</center></td>

		<td>
		<a href="gallery.php#gantt">Gantt Chart</a>
		<ul>
		<li>Task progress</li>
		<li>Projects timeline</li>	
		</ul>		
		</td>
		<td><center>
			<a href="gallery.php#gantt"><img src="images/ganttthumb.PNG"></a>
		</center></td>
	</tr>	
	<tr>
		<td>
		<a href="gallery.php#combination">Combination Chart</a>
		<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		</ul>		
		</td>
		<td><center>
			<a href="gallery.php#combination"><img src="images/combothumb.PNG"></a>
		</center></td>
	</tr>								
</table>

	<h2><a name="reports">Report Developers</a></h2>
<p>	
	<ul>
		<li>Chart tutorial in a report</li>
		<li>Chart Scripting</li>
		<li>Chart Interactivity</li>
	</ul>
</p>	
	<h2><a name="standalone">Standalone Chart Users</a></h2>
<p>		
	<ul>
		<li>Examples View</li>
		<li>Model API</li>
		<li>Engine API</li>
		<li>Web/SWT/Swing sample applications</li>
		<li>JSP Tags</li>		
	</ul>
</p>	
	<h2><a name="developers">Developers/Contributors</a></h2>
<p>	
	<ul>
		<li>Extension Points</li>
		<li>Links to BPS on wiki</li>
	</ul>
</p>
</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
