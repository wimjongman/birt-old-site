<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	 # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "How to Get Help on Using BIRT";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "birt.inc";
	
	$linkToTop				= linkToTop();


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>
		<blockquote>
			<ul>
				<li><a href="#documentation">BIRT Documentation</a></li>
				<li><a href="#newsgroup">BIRT Newsgroup</a></li>
				<li><a href="#bugzilla">Bugzilla</a></li>
				<li><a href="#wiki">BIRT FAQ/Wiki</a></li>
				<li><a href="#examples">BIRT Examples</a></li>
				<li><a href="#integration">BIRT Integration</a></li>
				<li><a href="#books">BIRT Books</a></li>			</ul>
		</blockquote>
		
		The BIRT website contains a good deal of information.  This page lists useful links to get answers to your questions.
<h2><a name="documentation">BIRT Documentation</a></h2>
BIRT documentation is available within Eclipse, by
selecting Help > Help Contents.<br><br>
BIRT supplies three sections that cover BIRT topics.<br><br>
<ul>
<li><i><b>BIRT Report Developers Guide</i></b> - This guide illustrates how to build reports and use common features within the BIRT designer.
<li><i><b>BIRT Charting Programmer Reference</i></b> - Contains Javadocs for Chart Engine and User Interface.  Also contains information on Chart Extension points.
<li><i><b>BIRT Programmer Reference</i></b> - Contains Javadocs for Report Engine, Scripting API, and Design Engine.  Also contains information on BIRT Extension points.

</ul><br>
<img src="birthelpcontents.jpg">





<h2><a name="newsgroup">Newsgroup</a></h2>
The BIRT newsgroup contains thousands of posts.  To post to the newsgroup you will need to create an account.
See the <a href="community.php">Community</a> page for help.<br>
The BIRT newsgroup archives can be searched without an account.<br>  

		<ul class="midlist">
				<li>

<a href="http://www.eclipse.org/search/search.cgi?q=&cmd=Search%21&form=extended&wf=574a74&ps=10&m=all&t=5&ul=%2Fnewslists%2Fnews.eclipse.birt&wm=wrd&t=News&t=Mail">Search the BIRT Newsgroup archives</a> 
for previously asked questions. 

				</li>
		</ul>


<h2><a name="bugzilla">Bugzilla</a></h2>
The BIRT project uses Bugzilla to track bugs and enhancement request.  See the <a href="community.php">Community</a> page to create an account.<br>
Many times a solution to your problem can be found within Bugzilla.
		<ul class="midlist">
				<li>
					<a href="https://bugs.eclipse.org/bugs/query.cgi?product=BIRT">
						Search Bugs
					</a>
					Find BIRT-related bugs using the Bugzilla search facility.					
				</li>
		</ul>


<h2><a name="wiki">BIRT FAQ/Wiki</a></h2>
The <a href="http://wiki.eclipse.org/index.php/BIRT_Project">BIRT Wiki</a> contains the FAQ, BIRT Project Specifications, and several examples using the BIRT APIs.
<br>

<h2><a name="examples">BIRT Examples</a></h2>
The <a href="examples">BIRT Examples</a> section of the website is used to store report designs and videos that showcase BIRT Designer functionality.  The major difference between
these examples and the ones in the Wiki, is that the Wiki examples can be modified and enhanced by the BIRT community.  

<h2><a name="integration">BIRT Integration</a></h2>
The <a href="deploy">BIRT Integration</a> pages are designed to explain how the different BIRT APIs work and how to deploy the BIRT engine in different environments.
<br>
<h2><a name="books">BIRT Books</a></h2>
<table>
<tr>
<td>
<img src="BIRT_Integrating_and_Extending.jpg">
</td>
<td>
BIRT: A Field Guide to Reporting presents information about how to develop and customize reports of progressive complexity using BIRT Report Designer. This tool was designed from the ground up for Web applications and uses a Web page-oriented design metaphor in contrast to older banded report writers that were developed before the advent of the Internet. This unique approach to report creation makes BIRT an approachable and effective tool for developers of all levels.
<br>
<i>ISBN: 0321442598</i>
</td>
</tr>
<tr>
<td>
<img src="BIRT_Field_Guide.jpg">
</td>
<td>
This book describes the key components of BIRT architecture, applications, and engines, including installing, deploying, and troubleshooting the Reporting and Charting engines in a J2EE application server environment.
<br>
<i>ISBN: 0321443853</i>
</td>
</tr>
</table>

</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
