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
					<h1 class="eclipse-title-main">How to Contribute</h1>
					
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

					<p>Interested in joining the BIRT project as a contributor? Maybe you found a bug and made a patch to the source code to address this, or perhaps you would like to make significant contribution in a specific area.</p>
					<p>You can submit patches and minor enhancements via Bugzilla (see below). If you contribute a number of quality patches to the BIRT project, an existing project Committer may suggest you become a Committer yourself -- this would allow you to contribute directly to the source code for the project. In this case, the process outlined in the <a href="charter.php">BIRT Project Charter</a> would be followed to elect you to Committer status.</p>
					<p>For more significant contributions to an existing area of the project, the BIRT Project Management Committee (PMC) has outlined a process that provides for review of the proposed contribution, as well as working towards becoming a Committer for that contribution. This is also described below.</p>
					<p>In either case, the Eclipse Foundation needs to ensure that all committers to the code and/or the website and/or the bug system understand their role in safeguarding the intellectual property of Eclipse. The Foundation also needs to ensure that we have accurate records of the people who are acting as change agents on the projects. To understand this better, you should review the <a href="http://www.eclipse.org/legal/newcommitter.php" target="_blank">Eclipse New Committer guidelines</a>.</p>
					
			        <h2 class="topic-section-header padding-top-small">Process for Patch and Minor Enhancement Contributions</h2>
			        <p>For patches to specific bugs, you should make sure that there is a Bugzilla entry to track the item (with clear steps to reproduce the problem in the case of a bug) and then attach your code changes to the same <a href="https://bugs.eclipse.org/bugs/" target="_blank">Bugzilla</a> entry with any explanation required in order to apply your changes to the source code. One of the existing project Committers will then review this and contact you as needed.</p>
			        <p>For enhancements, we also request that you provide:
			        <ul class="eclipse-list">
			        	<li>A good example that illustrates the new feature in action. This will help us and the community understand how to use the new feature.</li><br />
			        	<li>Documentation on the feature. This should describe the purpose of the feature, any public APIs in detail, any User Interface options and so on. This will provide a basis for the final documentation that gets incorporated into the project.</li>
			        </ul>
			        </p>
			        
			        <h2 class="topic-section-header padding-top-small">Process for Significant Contributions</h2>
			        <p>The BIRT PMC has outlined the process under which a new contributor would get started with a significant contribution in an existing area of the project. Note that if the proposed contribution is for a new sub-project with BIRT, then the process is different and is described in the <a href="http://www.eclipse.org/projects/dev_process/proposal-phase.php" target="_blank">Proposal Phase</a> of the <a href="http://www.eclipse.org/projects/dev_process/development_process.php" target="_blank">Eclipse Development Process</a>. This process is intended to work in tandem with, and does not replace, the Eclipse Foundation <a href="http://www.eclipse.org/projects/dev_process/new-committer.php" target="_blank">New Committer guidelines</a>.
			        <ul class="eclipse-list">
			        	<li>New contributor develops a proposal a submits this to the BIRT PMC</li><br />
			        	<li>The PMC and existing BIRT contributors review the proposal</li><br />
			        	<li>New contributor provides some level of commitment to the PMC and state how many committers they ultimately see being involved.</li><br />
			        	<li>Assuming these initial steps are successful, the PMC gives initial provisional approval for the new contribution.</li><br />
			        	<li>The proposal is posted on the BIRT Wiki pages for community review, and a Bugzilla entry is created to track comments and feedback.</li><br />
			        	<li>New contributor develops a high level project plan for review</li><br />
			        	<li>In parallel and as a good faith offer, we grant the new contributor a temporary "observer" status on the BIRT PMC (assuming it makes sense for them to ultimately be part of the PMC).</li><br />
			        	<li>In parallel, and in the spirit of meritocracy that is a key element of the Eclipse Community, the new contributor makes initial contributions by fixing BIRT bugs in Bugzilla and attaching the patches to the bugzilla entries (since they will not have committer status). These will then be reviewed by a BIRT Committer and, if acceptable, checked into the code base. This allows the new contributor to gain familiarity with the code base and work towards becoming part of the BIRT community.</li><br />
			        	<li>Assuming bug fixing goes well, an existing Committer will nominate at least one individual from the new contributor to be a committer on the BIRT project after 10+ fixes have been submitted. Additional committers could be nominated once the project is underway.</li><br />
			        	<li>If the individual is accepted and they are not already an Eclipse Committer, the individual must complete the appropriate <a href="http://www.eclipse.org/legal/newcommitter.php" target="_blank">Eclipse process for New Committers</a>.</li><br />
			        	<li>Once the new contributor attains Committer status, they contribute the new code (which they will hopefully have been developing in parallel according to their high level project plan).</li><br />
			        	<li>Once the new controibutor(s) are active on the project, the PMC would nominate and vote on the "Observer" becoming a full member of the PMC.</li>
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