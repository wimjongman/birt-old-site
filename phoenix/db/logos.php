<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "BIRT Sample Database";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../birt.inc";
	$linkToTop				= linkToTop();


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#overview">Overview</a></li>
				<li><a href="#full_logos">Full Logos</a></li>
				<li><a href="#minimal_logos">Minimal Logos</a></li>
			</ul>
		</blockquote>

		<h2><a name="overview"></a>Overview</h2>
		<p>
			Use the logos on this page add interest to sample reports created using the Classic Models database.
		</p>


		<h2><a name="full_logos"></a>Full Logos</h2>
		<p>
			<table border="0" cellpadding="3" cellspacing="3" style="border-collapse: collapse">
			  <tr>
				<td>
				<img border="0" src="logos/Classic-Models-Full-L.jpg" width="353" height="239"></td>
				<td align="center">
				<img border="0" src="logos/Classic-Models-Full-M.jpg" width="235" height="159"></td>
			  </tr>
			  <tr>
				<td align="center"><font SIZE="2"><a href="logos/Classic-Models-Full-L.jpg">
				Classic-Models-Full-L.jpg</a><br>
				Car &amp; sunset logo with text. White background<br>
				Large (150%) Size:&nbsp; 353 x 239 </font></td>
				<td align="center"><font SIZE="2"><a href="logos/Classic-Models-Full-M.jpg">
				Classic-Models-Full-M.jpg</a><br>
				Car &amp; sunset logo with text. White background.<br>
				Medium Size: 235 x 159</font></td>
			  </tr>
			  <tr>
				<td>
				<p align="center">
				<img border="0" src="logos/Classic-Models-Full-M-Trans.png" width="235" height="159"></td>
				<td align="center">
				<img border="0" src="logos/Classic-Models-Full-S.jpg" width="141" height="95"></td>
			  </tr>
			  <tr>
				<td align="center"><font SIZE="2">
				<a href="logos/Classic-Models-Full-M-Trans.png">
				Classic-Models-Full-M-Trans.png</a><br>
				Car &amp; sunset logo with text. Transparent background<br>
				Medium Size: 235 x 159 </font></td>
				<td align="center"><font SIZE="2"><a href="logos/Classic-Models-Full-S.jpg">
				Classic-Models-Full-S.jpg</a><br>
				Car &amp; sunset logo with text. White background<br>
				Small (60%) Size:&nbsp; 141x 95</font></td>
			  </tr>
			</table>
		</p>


		<h2><a name="minimal_logos"></a>Minimal Logos</h2>
		<p>
			<table border="0" cellpadding="3" cellspacing="3" style="border-collapse: collapse">
			  <tr>
				<td align="center">
				<img border="0" src="logos/Classic-Models-Minimal-L.jpg" width="355" height="206"></td>
				<td align="center">
				<img border="0" src="logos/Classic-Models-Minimal-M.jpg" width="235" height="137"></td>
			  </tr>
			  <tr>
				<td align="center"><font SIZE="2">
				<a href="logos/Classic-Models-Minimal-L.jpg">Classic-Models-Minimal-L.jpg</a>
				<br>
				Simple car &amp; text only. White background<br>
				Large (150%) Size: 355 x 206 </font></td>
				<td align="center"><font SIZE="2">
				<a href="logos/Classic-Models-Minimal-M.jpg">Classic-Models-Minimal-M.jpg</a><br>
				Simple car &amp; text only. White background<br>
				Medium Size: 235 x 137</font></td>
			  </tr>
			  <tr>
				<td align="center">
				<img border="0" src="logos/Classic-Models-Minimal-M-Trans.png" width="235" height="137"></td>
				<td align="center">
				<img border="0" src="logos/Classic-Models-Minimal-S.jpg" width="141" height="82"></td>
			  </tr>
			  <tr>
				<td align="center"><font SIZE="2">
				<a href="logos/Classic-Models-Minimal-M-Trans.png">
				Classic-Models-Minimal-M-Trans.png</a><br>
				Simple car &amp; text only. Transparent background<br>
				Medium Size: 235 x 137 </font></td>
				<td align="center"><font SIZE="2">
				<a href="logos/Classic-Models-Minimal-S.jpg">Classic-Models-Minimal-S.jpg</a><br>
				Simple car &amp; text only. White background<br>
				Small (60%) Size: 141 x 82</font></td>
			  </tr>
			</table>
		</p>

	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
