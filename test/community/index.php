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
		$metaTitle 		= "Community";
		$metaKeywords	= "Eclipse Keywords";
		$metaAuthor		= "";
		$metaDescription = "Eclipse Super Description for SEO in da House";
		$ogTitle		= "This is the OG Super Title";
		$ogImage		= "http://www.actuate.com/images/logo.png";
		$ogDescription  = "This is the ogDescription to be displayed in share options.";
		
		//only use following if you know what you are doing - else just leave them as is.
		$robotsIndex 	= "index"; // ** *Only usable values are 'index', 'noindex'
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
					<h1 class="eclipse-title-main">Community</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ol>
		                    <li><a href="#newsgroup">Newsgroup</a></li>
		                    <li><a href="#bugzilla">Bugzilla</a></li>
		                    <li><a href="#externalresources">External Resources</a></li>
		                    <li><a href="#mailinglists">Mailing Lists</a></li>
		                    <li><a href="#contributions">Contributions</a></li>
		                </ol>

			        </div>

			        <a name="newsgroup"></a>
					<h2 class="topic-section-header padding-top-small">Newsgroup</h2>
					<p>The BIRT newsgroup is for users of the project to ask questions, discuss ideas and so on. Join in and get involved!
					<ul class="eclipse-list">
						<li><a href="http://www.eclipse.org/newsgroups" target="_blank">Information and Signup</a> - Guidelines for using the newsgroups. Instructions for signing up.</li><br />
						<li><a href="news://news.eclipse.org/eclipse.birt" target="_blank">news://news.eclipse.org/eclipse.birt</a> - The easiest way to access the newsgroup is using your favorite news reader.</li><br />
						<li><a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.birt" target="_blank">Simple Web Interface</a> - If you don't have a newsreader, or can't access the NNTP server, use this simple web interface.</li><br />
						<li><a href="http://dev.eclipse.org/newslists/news.eclipse.birt/maillist.html" target="_blank">Archive</a> - Eclipse keeps a history of past newsgroup postings for your reference.</li><br />
						<li><a href="http://www.eclipse.org/search/search.cgi?q=&cmd=Search%21&form=extended&wf=574a74&ps=10&m=all&t=5&ul=%2Fnewslists%2Fnews.eclipse.birt&wm=wrd&t=News&t=Mail" target="_blank">BIRT Newsgroup Archives</a> - Search for previously asked questions.</li>
					</ul>
					</p>
					
					<a name="bugzilla"></a>
					<h2 class="topic-section-header padding-top-small">Bugzilla</h2>
					<p>BIRT uses Bugzilla to track bugs and enhancements.
					<ul class="eclipse-list">
						<li><a href="https://bugs.eclipse.org/bugs/" target="_blank">Sign Up</a> - Create a Bugzilla account. Learn how to use Bugzilla.</li><br />
						<li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=BIRT" target="_blank">Report a Bug or Enhancement</a> - When reporting a bug, please give the exact steps to reproduce the problem. Please explain what went wrong, and what you expected to happen. For an enhancement, please explain how you'd use the new feature.</li>
					</ul>
					</p>
					<p>BIRT bugs are often associated with a report design. Please attach your design to your Bugzilla entry.</p>
					<p>If you encounter a problem such as "An error occurred", or failure to open views or editors, please attach your Eclipse log file. To see the exception, use Window -> Show View -> Other. Open the PDE Runtime group and choose Error Log. Within the error log window, find the BIRT exception (if any) that just occurred. Double click on the error in question and you'll see a stack trace. Paste that into your bug report, preferably as a file attachment.</p>
					<p><a href="https://bugs.eclipse.org/bugs/query.cgi?product=BIRT" target=_blank">Search Bugs</a> - Find BIRT-related bugs using the Bugzilla search facility.</p>
					
					<a name="externalresources"></a>
					<h2 class="topic-section-header padding-top-small">External Resources</h2>
					<p>
					<ul class="eclipse-list">
						<li><a href="http://developer.actuate.com/" target="_blank">BIRT Developer Center (BDC)</a> is a developer site where BIRT users can find guides and documentation, share ideas, technical tips and code snippets, as well as download software, documentation and examples.</li><br />
						<li><a href="http://developer.actuate.com/community/devshare" target="_blank">BDC DevShare</a> - Browse the repository of developer-contributed report designs, code samples, tutorials and articles.</li><br />
						<li><a href="http://developer.actuate.com/design-center/creating-birt-designs/" target="_blank">BDC Design Guides</a> - Access guides and documentation for creating BIRT designs.</li><br />
						<li><a href="http://developer.actuate.com/deployment-center/deployment-guides/" target="_blank">BDC Deployment Guides</a> - Access guides and documentation for deploying BIRT applications.</li><br />
						<li><a href="http://birtworld.blogspot.com/" target="_blank">BIRT World</a> is a blog covering all things related to BIRT with frequent contributions from Jason Weathersby and Scott Rosenbaum</li>
					</ul>
					</p>
					
					<a name="mailinglists"></a>
					<h2 class="topic-section-header padding-top-small">Mailing Lists</h2>
					<p>Eclipse provides <a href="http://www.eclipse.org/mail/index.html" target="_blank">mailing lists</a> for each project. BIRT provides one general-purpose list:
					<ul class="eclipse-list">
						<li><a href="http://dev.eclipse.org/mhonarc/lists/birt-news/maillist.html" target="_blank">birt-news</a> (<a href="http://dev.eclipse.org/mhonarc/lists/birt-news/maillist.html" target="_blank">archive</a>) - Notifications to BIRT users about BIRT milestone and stable builds and other noteworthy information.</li>
					</ul>
					</p>
					<p>BIRT also provides mailing lists for developers contributing to BIRT:
					
					<ul class="eclipse-list">
						<li><a href="http://dev.eclipse.org/mailman/listinfo/birt-dev" target="_blank">birt-dev</a> (<a href="http://dev.eclipse.org/mhonarc/lists/birt-dev/maillist.html" target="_blank">archive</a>) - Development discussions about BIRT of interest to all BIRT committers. Topics include PMC meeting minutes, source code structure, CVS management, and integration among the various BIRT components.	 contributors and committers. Topics include PMC meeting minutes, source code structure, CVS management, and integration among the various BIRT components. Suggestions on how to improve the website or wiki are also welcome. Note: This mailing list receives numerous check-in and build notices. If you are not interested in these notifications setting up a filter in your email client will allow you to delete these messages or filter to a different folder for reading at a later time.</li><br />
						<li><a href="http://dev.eclipse.org/mailman/listinfo/birt-charting-dev" target="_blank">birt-charting-dev</a> (<a href="http://dev.eclipse.org/mhonarc/lists/birt-charting-dev/maillist.html" target="_blank">archive</a>) - Discussions about the charting subproject.</li><br />
						<li><a href="http://dev.eclipse.org/mailman/listinfo/birt-report-engine-dev" target="_blank">birt-report-engine-dev</a> (<a href="http://dev.eclipse.org/mhonarc/lists/birt-report-engine-dev/maillist.html" target="_blank">archive</a>) - Discussions about the reporting engine subproject.</li><br />
						<li><a href="http://dev.eclipse.org/mailman/listinfo/birt-report-designer-dev" target="_blank">birt-report-designer-dev</a> (<a href="http://dev.eclipse.org/mhonarc/lists/birt-report-designer-dev/maillist.html" target="_blank">archive</a>) - Discussions about the report designer subproject.</li>
					</ul>
					</p>
					
					<a name="contributions"></a>
					<h2 class="topic-section-header padding-top-small">Contributions</h2>
					<p>
					<ul class="eclipse-list">
						<li><a href="/birt/test/documentation/building-birt/">Build Instructions</a> - How to download BIRT source and build it.</li><br />
						<li><a href="/birt/test/about/project-organization/">Project</a> - How the project is structured, who's on the PMC, project roles, etc.</li><br />
						<li><a href="http://www.eclipse.org/mail" target="_blank">Mailing List</a> - While the newsgroup is for people who use BIRT, the mailing list is for those who help develop BIRT.</li><br />
						<li><a href="/birt/test/about/project-organization/contributors.php">Contribute Fixes and Code</a> - Interested in joining the BIRT project as a contributor? Maybe you found a bug and made a patch to the source code to address this, or perhaps you would like to make significant contribution in a specific area. This page provides more information on how to contribute code to the project.</li>
					</ul>
					</p>

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