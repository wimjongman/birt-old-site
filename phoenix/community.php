<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	 # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Community";
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

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PW8LFV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PW8LFV');</script>
<!-- End Google Tag Manager -->

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

<h2>Newsgroup</h2>
<p>
The BIRT newsgroup is for users of the project to ask questions, discuss ideas
and so on. Join in and get involved!


		<ul class="midlist">
				<li>
					<a href="http://www.eclipse.org/newsgroups">
						Information and Signup
					</a>
					Guidelines for using the newsgroups. Instructions for signing up.					
				</li>

				<li>
					<a href="news://news.eclipse.org/eclipse.birt">
						news://news.eclipse.org/eclipse.birt
					</a>
					The easiest way to access the newsgroup is using your favorite news reader.					
				</li>
				
				<li>
					<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.birt">
						Simple Web Interface
					</a>
					If you don't have a newsreader, or can't access the NNTP server, use this
					simple web interface.					
				</li>
				<li>
					<a href="http://dev.eclipse.org/newslists/news.eclipse.birt/maillist.html">
						Archive
					</a>
					Eclipse keeps a history of past newsgroup postings for your reference.					
				</li>
				<li>
					<a href="http://www.eclipse.org/search/search.cgi?q=&cmd=Search%21&form=extended&wf=574a74&ps=10&m=all&t=5&ul=%2Fnewslists%2Fnews.eclipse.birt&wm=wrd&t=News&t=Mail">Search the BIRT Newsgroup archives</a> 
					for previously asked questions. 
				</li>
		</ul>



<h2>Bugzilla</h2>
<p>
BIRT uses Bugzilla to track bugs and enhancements.


		<ul class="midlist">
				<li>
					<a href="https://bugs.eclipse.org/bugs/">
						Sign Up
					</a>
					Create a Bugzilla account. Learn how to use Bugzilla.					
				</li>
				<li>
					<a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=BIRT">
						Report a Bug or Enhancement
					</a>
					When reporting a bug, please give the exact steps to reproduce the problem.
					Please explain what went wrong, and what you expected to happen. For an enhancement,
					please explain how you'd use the new feature.					
				</li>
		</ul>

<p>
BIRT bugs are often associated with a report design. Please attach your design to
your Bugzilla entry.
<p>
If you encounter a problem such as "An error occurred", or failure to open views or
editors, please attach your Eclipse log file. To see the exception, use
Window&rarr;Show View&rarr;Other. Open the PDE Runtime group and choose Error Log.
Within the error log window, find the BIRT exception (if any) that just occurred.
Double click on the error in question and you’ll see a stack trace. Paste that
into your bug report, preferably as a file attachment.

		<ul class="midlist">
				<li>
					<a href="https://bugs.eclipse.org/bugs/query.cgi?product=BIRT">
						Search Bugs
					</a>
					Find BIRT-related bugs using the Bugzilla search facility.					
				</li>
		</ul>

<h2>External Resources</h2>
		<ul class="midlist">
				<li>
<a href=http://developer.actuate.com>BIRT Developer Center</a> is a developer site where BIRT users can find guides and documentation, share ideas, technical tips and code snippets, as well as download software, documentation and examples.
</li><li>
<a href=http://developer.actuate.com/community/devshare>BIRT Developer Center DevShare</a> – Browse the repository of developer-contributed report designs, code samples, tutorials and articles
</li><li>
<a href=http://developer.actuate.com/design-center/creating-birt-designs/>Design Guides</a> – Access guides and documentation for creating BIRT designs.
</li><li>
<a href=http://developer.actuate.com/deployment-center/deployment-guides/>Deployment Guides</a> – Access guides and documentation for deploying BIRT applications.
</li>
				<li>
				<a href=http://birtworld.blogspot.com>BIRT World</a> is a blog covering all things related to BIRT with frequent contributions from Jason Weathersby and Scott Rosenbaum
				</li>
		</ul>


<h2>Mailing Lists</h2>

Eclipse provides <a href="http://www.eclipse.org/mail/index.html">
mailing lists</a> for each project. BIRT provides one general-purpose
list:

		<ul class="midlist">
				<li>
					<a href="http://dev.eclipse.org/mailman/listinfo/birt-news">
						birt-news
					</a>
					(<a href="http://dev.eclipse.org/mhonarc/lists/birt-news/maillist.html">archive</a>)
					Notifications to BIRT users about BIRT milestone and stable builds and 
					other noteworthy information.					
				</li>
		</ul>

BIRT also provides mailing lists for developers contributing to BIRT:

		<ul class="midlist">
				<li>
					<a href="http://dev.eclipse.org/mailman/listinfo/birt-dev">
						birt-dev
					</a>
					(<a href="http://dev.eclipse.org/mhonarc/lists/birt-dev/maillist.html">archive</a>)
					Development discussions about BIRT of interest to all BIRT 
					committers. Topics include PMC meeting minutes, source code structure, 
					CVS management, and integration among the various BIRT components.					
					contributors and committers. Topics include PMC meeting minutes, source code structure, 
					CVS management, and integration among the various BIRT components. 
					Suggestions on how to improve the website or wiki are also welcome.  
					Note: This mailing list receives numerous check-in and build notices.  If you are not 
					interested in these notifications setting up a filter in your email client will allow 
					you to delete these messages or filter to a different folder for reading at a later time.					
				
				</li>
				<li>
					<a href="http://dev.eclipse.org/mailman/listinfo/birt-charting-dev">
						birt-charting-dev
					</a>
					(<a href="http://dev.eclipse.org/mhonarc/lists/birt-charting-dev/maillist.html">archive</a>)
					Discussions about the charting subproject.				
				</li>
				<li>
					<a href="http://dev.eclipse.org/mailman/listinfo/birt-report-engine-dev">
						birt-report-engine-dev
					</a>
					(<a href="http://dev.eclipse.org/mhonarc/lists/birt-report-engine-dev/maillist.html">archive</a>)
					Discussions about the reporting engine subproject.				
				</li>
				<li>
					<a href="http://dev.eclipse.org/mailman/listinfo/birt-report-designer-dev">
						birt-report-designer-dev
					</a>
					(<a href="http://dev.eclipse.org/mhonarc/lists/birt-report-designer-dev/maillist.html">archive</a>)
					Discussions about the report designer subproject.				
				</li>
		</ul>


<h2>Contributions</h2>
<p>
Want to contribute to the BIRT project?
		<ul class="midlist">
				<li>
					<a href="build/buildInstructions.php">
						Build Instructions
					</a>
					How to download BIRT source and build it.				
				</li>
				<li>
					<a href="project">
						Project
					</a>
					How the project is structured, who's on the PMC, project roles, etc.				
				</li>
				<li>
					<a href="http://www.eclipse.org/mail">
						Mailing List
					</a>
					While the newsgroup is for people who use BIRT, the mailing list is for those
					who help develop BIRT.				
				</li>
				<li>
					<a href="http://www.eclipse.org/birt/phoenix/project/contribute.php">
						Contribute Fixes and Code
					</a>
Interested in joining the BIRT project as a contributor? Maybe you found a bug and made a patch to the source code to address this, or perhaps you would like to make significant contribution in a specific area. This page provides more information on how to contribute code to the project.
				
				</li>
		</ul>



	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
