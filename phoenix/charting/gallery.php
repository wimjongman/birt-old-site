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
	$pageTitle 		= "Chart Gallery";
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
	
		<table>
			<COLGROUP>
				<COL width="2%">
				<COL width="98%">
		<tr>
			<td></td>
			<td>
	
	<h1>Chart Gallery</h1>
	<h2><a name="bar">BAR Charts</a></h2>
<img src="images/bar1.png">
<img src="images/bar2.png">
<img src="images/bar3.png">
<img src="images/cone1.png">
<img src="images/cone2.png">
<img src="images/cone3.png">
<br><br>
	<h2><a name="line">Line Charts</a></h2>
<img src="images/line1.png">
<img src="images/line2.png">
<br><br>
	<h2><a name="area">Area Charts</a></h2>
<img src="images/area1.png">
<img src="images/area2.png">
<br><br>
	<h2><a name="pie">Pie Charts</a></h2>
<img src="images/pie1.png">
<img src="images/pie2.png">
<br><br>
	<h2><a name="meter">Meter Charts</a></h2>
<img src="images/meter1.png">
<img src="images/meter2.png">
<br><br>
	<h2><a name="scatter">Scatter Charts</a></h2>
<img src="images/scatter1.png">
<img src="images/scatter2.png">
<br><br>

	<h2><a name="stock">Stock Charts</a></h2>
<img src="images/stock1.png">
<img src="images/stock2.png">
<br><br>

	<h2><a name="bubble">Bubble Charts</a></h2>
<img src="images/bubble1.png">
<br><br>

<h2><a name="difference">Difference Charts</a></h2>
<img src="images/difference1.png">
<br><br>

<h2><a name="gantt">Gantt Charts</a></h2>
<img src="images/gantt1.png">
<img src="images/gantt2.png">
<br><br>



<h2><a name="combination">Combination Charts</a></h2>
<img src="images/combo1.png">
<img src="images/combo2.png">
<br><br>



EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
