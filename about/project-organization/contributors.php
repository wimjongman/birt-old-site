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
					<h1 class="eclipse-title-main">Project Contributors</h1>
					
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
		                    <li><a href="https://wiki.eclipse.org/BIRT_Project_Plan">Project Development Plan</a></li>
		                    <!--<li><a href="/birt/about/birt-and-actuate.php">BIRT and Actuate</a></li>-->		                    
		                </ul>

			        </div>

			        <h2 class="topic-section-header padding-top-small">Project Committers</h2>
					<p>Companies that are contributing committer's time to the project are:
					<ul class="eclipse-list">
					<li>Actuate - <a href="http://developer.actuate.com">http://developer.actuate.com</a> and <a href="http://www.actuate.com">http://www.actuate.com</a></li><br />
					<li>Innovent Solutions - <a href="http://www.innoventsolutions.com/">http://www.innoventsolutions.com/</a></li><br />
					<li>IBM - <a href="http://www.ibm.com/">http://www.ibm.com/</a></li><br />
					<li>InetSoft - <a href="http://www.inetsoft.com/">http://www.inetsoft.com/</a></li><br />
					<li>Tsinghua University (Beijing, China) - <a href="http://www.sist.tsinghua.edu.cn/docinfo/index.jsp">http://www.sist.tsinghua.edu.cn/docinfo/index.jsp</a></li>
					</ul>
					</p>
					<p>BIRT uses the standard <a href="http://www.eclipse.org/projects/dev_process/new-committer.php">Eclipse process</a> to elect new committers.</p>
					
					<h2 class="topic-section-header padding-top-small">Initial Code Contribution</h2>
					<p>During the six months prior to the creation of the Eclipse BIRT project, Actuate was actively researching and developing capabilities that correspond to the initial BIRT projects. This involved researching the requirements, developing design for the BIRT XML Report Design, and development of initial code. Actuate seeded the BIRT project by donating the work from this research and development. Specifically:
					<ul class="eclipse-list">
					<li>XML Report Design Schema - A schema for representing the data access and layout aspects of reports ranging from simple listing style reports through complex, highly formatted reports.</li><br />
					<li>Report Design Object Model Component - A component that encapsulates the logic of resolving report element properties based on report object hierarchy, style sheets and report scripting, as well as providing report design read/write and persistency. Initial design work, implementation, and unit tests were contributed.</li><br />
					<li>Report Execution and Rending Engine Component - A component that takes a report design file as input and generates various report output format such as HTML, PDF, and PostScript for printing. Initial design work, implementation, and unit tests were contributed.</li><br />
					<li>Report Designer - An Eclipse plug-in that helps users design report layout through a user friendly GUI. Initial design work, implementation, and unit tests were contributed.</li>
					</ul>
					</p>
					<p>Innovent and Actuate have over 10 years of experience each in the business intelligence market. The initial contribution for the BIRT project involved a significant number of experienced developers in this field and, going forward, the project is working with the Eclipse community to build on this initial code to deliver market leading reporting functionality to the open source Eclipse ecosystem.</p>
					<p>In addition to the Actuate research and development work, Actuate is working with other Eclipse members to leverage existing code in other areas.</p>


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