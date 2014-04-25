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
		$metaTitle 		= "About";
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
					<h1 class="eclipse-title-main">Development Discussions</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="/birt/about/index.php">What is BIRT?</a></li>
		                    <li><a href="/birt/about/design.php">BIRT Design Overview</a></li>
		                    <li><a href="/birt/about/architecture.php">Architecture Overview</a></li>
		                    <li><a href="/birt/about/designer.php">Designer Overview</a></li>
		                    <li><a href="/birt/about/customization.php">Customization Overview</a></li>
		                    <li><a href="/birt/about/extensibility.php">Extensibility Overview</a></li>
		                    <li><a href="index.php">Project Organization</a>
		                    	<ul>
		                    		<li><a href="description.php">Description and Scope</a></li>
		                    		<li><a href="charter.php">Charter</a></li>
		                    		<li><a href="principles.php">Principles</a></li>
		                    		<li><a href="committee.php">Management Committee</a></li>
		                    		<li><a href="contributors.php">Contributors</a></li>
		                    	</ul>
		                    </li>
		                    <li><a target="_blank" href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a></li>
		                    <!--<li><a href="/birt/about/birt-and-actuate.php">BIRT and Actuate</a></li>-->		                    
		                </ul>

			        </div>

			        <p>Discussions around development activities in the BIRT project happen in a number of ways, depending on the item being discussed.</p>
			        
			        <h2 class="topic-section-header padding-top-small">Development Discussions</h2>
			        <p>
			        <ul class="eclipse-list">
			        	<li>New Features and Projects : BIRT projects use a BPS (BIRT Project Specification) process for project level proposals. Preliminary feature specifications are added to BIRT's <a href="http://wiki.eclipse.org/index.php/BPS" target="_blank">Wiki pages</a> and the community can then add comments regarding the specification via the associated Bugzilla entries. BIRT's Project Management Committee will decide which BPS is scheduled for a release based on the project scope and, more importantly, if a committer signs up to complete the project within the release timeframe. For scheduled projects, a Bugzilla entry is assigned to a target milestone. The majority of design discussions from that point forward are done through Bugzilla. You can always find the list of projects for each release in BIRT's <a href="https://wiki.eclipse.org/BIRT_Project_Plan" target="_blank">Project Development Plan</a> page.</li><br />
			        	<li>Non-Committer Patch Submission Reviews : Non-Committers can assist in the development of the project by submitting patches. When a patch is submitted it should be attached to that Bugzilla entry. An existing Committer will then review the patch that is attached to the Bugzilla entry and the committer will put his/her comments in Bugzilla to indicate if any changes are needed on the code and if the patch has been accepted and checked into the project code base. Others can also put in comments in the Bugzilla entry.</li><br />
			        	<li>Community Feature Requests : The user community can submit feature/enhancement requests through Bugzilla at any time. Follow-up discussions will happen in the Bugzilla entry. Small enhancements on existing features are often scheduled for a release by committers based on their interests and available time. Large enhancement or brand new functional areas will go through the planning process outlined above in New Features and Projects.</li><br />
			        	<li>Schedule, Build and Coordination : Discussions about project structure, build process, release schedule and release coordination messages that are of concern to the general BIRT Committer typically happen in the birt-dev mailing list. This can often be the starting point for other project development related discussions that are not tracked via any of the items above. However, please note that the birt-dev mailing list is only for discussions related to development of the BIRT project. It should not be used for general questions on using BIRT.</li>
			        </ul>
			        </p>
			        
			        <h2 class="topic-section-header padding-top-small">Tracking Bugzilla Discussions</h2>
			        <p>A lot of discussion in the Eclipse community leverages Bugzilla. A common question is how to keep up to speed on what is happening for a Bugzilla entry you are interested in. Bugzilla has a feature that makes it very easy to stay informed without having to check the Bugzilla entry daily -- just add your email address to the CC: field for the Bugzilla entry and you will automatically be emailed any time the entry is changed.</p>

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