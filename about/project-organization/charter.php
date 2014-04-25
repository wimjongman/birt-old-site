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
					<h1 class="eclipse-title-main">Project Charter</h1>
					
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

			        <h2 class="topic-section-header padding-top-small">Overview</h2>
			        <p>The Eclipse Business Intelligence & Reporting Tools Top-Level Project is an open source collaborative software development project dedicated to providing an extensible, standards-based platform to address a broad range of needs in the business intelligence and reporting space using the Eclipse platform.</p>
			        <p>This document describes the composition and organization of the project, roles and responsibilities of the participants, and development process for the project.</p>
										
					<h2 class="topic-section-header padding-top-small">Mission</h2>
					<p>The mission of The Business Intelligence and Reporting Tools Project is to create a wide variety of capabilities that allow developers to easily extract data from data sources, process that data using flexible and powerful data manipulation, sorting and aggregation, and present the processed information in a formatted layout to the end users.</p>
					<p>The capabilities can range from application- and production-level reporting, through ad hoc user-driven query tools, to highly interactive multi-dimensional online analytical processing (OLAP) and data mining tools.</p>
					<p>Some level of reporting is a common requirement in the majority of applications developed today - this project provides a focal point for the creation of best-of-breed business intelligence and reporting capabilities for integration into these applications, or as dedicated applications in their own right.</p>
					
					<h2 class="topic-section-header padding-top-small">Scope</h2>
					<p>The Business Intelligence and Reporting Tools Project encompasses capabilities for designing and deploying business intelligence and reporting solutions that will be used within an application. The can broadly be divided into two categories: design tools for authoring, for example, reports; and deployment capabilities for utilizing these designs within an application.</p>
					<p>Initially, the Project will focus on leveraging the Eclipse platform to provide infrastructure and tools for the designing, deploying, generating and viewing of reports in an organization, including ad hoc query and reporting tools. While not an initial focus, the BIRT project scope includes complementing these reporting capabilities with Online Analytical Processing (OLAP) and Business Intelligence dashboard functionality. Over time, but not in the initial scope, the creation of additional projects is anticipated and encouraged to address additional aspects of business intelligence, such as Executive Information Systems (EIS), statistical analysis, modeling capabilities (what-if analysis), Data Mining Tools, Data Warehouse Modeling Tools, Extract Transform and Load (ETL) tools and Data Quality Tools.</p>
					<p>It is recognized that BIRT cannot meet all the requirements of all applications and tools that use BIRT. It is therefore a core design principle for all projects within BIRT to support a broad range of extension points within the tools and frameworks that allow developers to address additional needs, and to provide exemplary implementations for these extension points.</p>
					<p>The list of the Projects under the Business Intelligence and Tools PMC will be maintained as part of <a href="/birt/project-organization/">Business Intelligence and Reporting Tools Project</a>.</p>
					
					<h2 class="topic-section-header padding-top-small">Project Management Committee</h2>
					<p>The Projects under this Charter are managed by a group known as the Project Management Committee (the "PMC").</p>
					<p>PMCs are expected to ensure that:
					<ul class="eclipse-list">
					<li>All Projects operate effectively by providing leadership to guide the Project's overall direction and by removing obstacles, solving problems, and resolving conflicts.</li><br />
					<li>All Project plans, technical documents and reports are publicly available.</li><br />
					<li>All Projects operate using open source rules of engagement: meritocracy, transparency, and open participation. These principles work together. Anyone can participate in a Project. This open interaction, from answering questions to reporting bugs to making code contributions to creating designs, enables everyone to recognize and utilize the contributions.</li>
					</ul>
					</p>
					<p>The PMC has the following responsibilities:
					<ul class="eclipse-list">
					<li>Providing the leadership and vision to guide the Project's overall direction in a manner consistent with the Eclipse Foundation Architectural Roadmap.</li><br />
					<li>Providing assistance and support to the developers and researchers working on the Project by removing obstacles, solving problems, and resolving conflicts.</li><br />
					<li>Ensuring that Project plans are produced.</li><br />
					<li>Working with the Eclipse Management Organization (the "EMO") to establish the development processes and infrastructure needed for the development team to be effective.</li><br />
					<li>Recommending new Projects to the EMO.</li><br />
					<li>Recommending the initial set of Project committers for each new Project overseen by the PMC, and establishing the procedures consistent with this Charter for voting in new committers.</li><br />
					<li>Helping to ensure that the Projects overseen by the PMC have enough contributors, and working to fill vacancies in roles.</li><br />
					<li>Producing "how to get involved" guidelines to help new potential contributors get started.</li><br />
					<li>Coordinating relationships with other Eclipse Foundation Projects.</li><br />
					<li>Facilitating code or other donations by individuals or companies.</li><br />
					<li>Making recommendations to the Eclipse Foundation Board regarding contributions proposed under licenses other than the EPL.</li><br />
					<li>Working with the EMO and Committers to ensure in-bound contributions are made in accordance with the Eclipse Foundation IP Policy.</li><br />
					<li>Acting as a focal point for the community in representing the Projects it oversees.</li>
					</ul>
					</p>
					<p>The PMC Lead is appointed by the Board. The initial PMC is selected by the PMC Lead. Thereafter, to become a member of the PMC, an individual must be nominated by another member of the PMC, and unanimously approved by all PMC members.</p>
					<p>In the unlikely event that a member of the PMC becomes disruptive to the process or ceases to contribute for an extended period, the member may be removed by unanimous vote of remaining PMC members. PMC members may resign at any time by delivering notice of their resignation to the PMC Lead.</p>
					<p>The PMC is responsible for producing and maintaining the Project Charter. Development must conform to any rules or processes outlined in the Charter, so a change to the development process may necessitate a change to the Charter. Changes to the Charter are approved by the Board.</p>
					<p>The work of the PMC is shared by the PMC members. All PMC members are expected to contribute actively. In particular, PMC members are expected to take responsibility for overseeing certain areas of work in the Project, and reporting to the PMC on these areas.</p>
					<p>Active participation in the user newsgroups and the appropriate developer mailing lists is a responsibility of all PMC members, and is critical to the success of the Project. PMC members are required to monitor the main Project mailing list, and the developer mailing lists for all Projects and components they are overseeing.</p>
					
					<h2 class="topic-section-header padding-top-small">Project Requirements Group</h2>
					<p>The Requirements Group is formed at the discretion of the PMC. The Requirements Group gathers requirements for the project and communicates them to all members of the Project, including the PMC. The Requirements Group will accomplish its objectives by working closely with the development teams and the PMC.</p>
					
					<h2 class="topic-section-header padding-top-small">Project Architecture Group</h2>
					<p>The Architecture Group is formed at the discretion of the PMC. The Architecture Group is responsible for development, articulation and maintenance of the Project Architecture, as well as for providing an explicit description of the architecture and communicating this description to all members of the Project, and for releasing it as part of the project deliverables. The Architecture Group will accomplish its objectives by working closely with the development teams and the PMC.</p>
					
					<h2 class="topic-section-header padding-top-small">Project Planning Group</h2>
					<p>The Planning Group is formed at the discretion of the PMC. The Planning Group assists the PMC in establishing the Project plan in conjunction with available Project resources, coordinating relationships between Project participants and with other Eclipse projects. The Planning Group helps to ensure that projects have enough contributors, filling vacancies in roles and facilitating code or other donations by individuals or companies. The Planning Group will accomplish its objectives by working closely with the development teams and the PMC.</p>
					
					<h2 class="topic-section-header padding-top-small">Roles</h2>
					<p>The Projects under this Charter are operated as meritocracies -- the more you contribute, and the higher the quality of your contribution, the more you are allowed to do. However with this comes increased responsibility.
					<ul class="eclipse-list">
					<li>Users - Users are the people who use the products that the Project produces. People in this role aren't contributing code, but they are using the products, reporting bugs, and making feature requests and suggestions. Users are encouraged to participate through the user newsgroup(s), asking questions, providing suggestions, and helping other users. Users are also encouraged to report problem reports using the bug tracking system.</li><br />
					<li>Developers - Users who contribute code or documentation become developers. Developers are the people who contribute code, fixes, documentation, or other work that goes into the product. Developers are also encouraged to participate in the user newsgroup(s), and should monitor the developer mailing list associated with their area of contribution. When appropriate, developers may also contribute to development design discussions related to their area of contribution. Developers are expected to be proactive in reporting problems in the bug tracking system.</li><br />
					<li>Committers - Developers who give frequent and valuable contributions to a Project, or component of a Project (in the case of large Projects), can have their status promoted to that of a "Committer" for that Project or component respectively. A Committer has write access to the source code repository for the associated Project (or component), and gains voting rights allowing them to affect the future of the Project (or component).</li>
					</ul>
					</p>
					<p>In order for a Developer to become a Committer on a particular Project overseen by the PMC, another Committer for the same Project (or component as appropriate) can nominate that Developer or the Developer can ask to be nominated. Once a Developer is nominated, the Committers for the Project (or component) will vote. If there are at least 3 positive votes and no negative votes, the Developer is recommended to the PMC for commit privileges. If the PMC also approves and the Developer signs the Committer Agreement established by the EMO (wherein, at the very least, the Developer agrees to abide by the Eclipse Intellectual Property Policy), the Developer is converted into a Committer and given write access to the source code repository for that Project (or component). Becoming a Committer is a privilege that is earned by contributing and showing discipline and good judgment. It is a responsibility that should be neither given nor taken lightly.</p>
					<p>At times, Committers may go inactive for a variety of reasons. The decision making process of the Project relies on active committers who respond to discussions and votes in a constructive and timely manner. The PMC is responsible for ensuring the smooth operation of the Project. A Committer that is disruptive, does not participate actively, or has been inactive for an extended period may have his or her commit status removed by the PMC.</p>
					<p>Active participation in the user newsgroup and the appropriate developer mailing lists is a responsibility of all Committers, and is critical to the success of the Project. Committers are required to monitor and contribute to the user newsgroup.</p>
					<p>Committers are required to monitor the developer mailing list associated with all Projects and components for which they have commit privileges. This is a condition of being granted commit rights to the Project or component. It is mandatory because committers must participate in votes (which in some cases require a certain minimum number of votes) and must respond to the mailing list in a timely fashion in order to facilitate the smooth operation of the Project. When a Committer is granted commit rights they will be added to the appropriate mailing lists. A Committer must not be unsubscribed from a developer mailing list unless their associated commit privileges are also removed.</p>
					<p>Committers are required to track, participate in, and vote on, relevant discussions in their associated Projects and components. There are three voting responses: +1 (yes), -1 (no, or veto), and 0 (abstain).</p>
					<p>Committers are responsible for proactively reporting problems in the bug tracking system, and annotating problem reports with status information, explanations, clarifications, or requests for more information from the submitter. Committers are responsible for updating problem reports when they have done work related to the problem.</p>
					
					<h2 class="topic-section-header padding-top-small">Projects</h2>
					<p>The work under this Top Level Project is further organized into Projects. New Projects must be significant works consistent with the mission of the Top Level Project, be recommended by the PMC, and confirmed by the EMO. Projects can be discontinued by decision of the Board.</p>
					<p>When a new Project is created, the PMC nominates a Project lead to act as the technical leader and nominates the initial set of Committers for the Project, and these nominations are approved by the EMO. Project leads are accountable to the PMC for the success of their Project.</p>
					
					<h2 class="topic-section-header padding-top-small">Project Components</h2>
					<p>The PMC may decide to divide a Project further into components. If a Project is divided into components, commit privileges are normally granted at the component level, and the committers for a given component vote on issues specific to that component. Components are established and discontinued by the PMC. When the PMC creates a component it appoints a component lead to act as the technical leader and names the initial set of Committers for the component. The component lead is designated as a committer for the Project and represents the component in discussions and votes pertaining to the Project as a whole. Component Committers do not participate in votes at the level of the Project as a whole, unless they are also the component lead.</p>
					
					<h2 class="topic-section-header padding-top-small">Ports</h2>
					<p>For components that contain platform-specific code, it may be advantageous to allow developers to work on a port of the component to a new platform without requiring that they already be committers for the component. In this case the main code base is known as the component "core", and the port code base is known as a component "port". The decision to set up a port is made by the PMC. When a new port of a component is created, the PMC appoints a Port Lead, and an initial set of committers who will have commit and voting privileges specifically for the port. The port is done under the auspices of the core component, and all committers for the core component automatically also have commit and voting privileges on the port. Normally the Component Lead will also be the Port Lead.</p>
					
					<h2 class="topic-section-header padding-top-small">Coordinated Release Cycles</h2>
					<p>All projects and components under this Project will have coordinated release plans, milestone dates, freeze cycles, builds, and ship dates. These projects will be coordinated by a group consisting of the project leads, the component leads from these projects, and the members of the PMC assisted by the members of the Planning Committee.</p>
					
					<h2 class="topic-section-header padding-top-small">Infrastructure</h2>
					<p>The PMC works with the EMO to ensure the required infrastructure for the Project. The Project infrastructure will include, at minimum:
					<ul class="eclipse-list">
					<li>Bug Database - Bugzilla-like database for tracking bugs and feature requests.</li><br />
					<li>Source Repository - One or more CVS repositories containing both the master source code and documentation for the projects.</li><br />
					<li>Website - A Web site will contain information about the project, including documentation, downloads of releases, and this charter.</li><br />
					<li>General Mailing List - Mailing list for development discussions pertaining to the project as a whole or that cross projects. This mailing list is open to the public.</li><br />
					<li>Project Mailing Lists - Development mailing list for technical discussions and committer voting related to the project. These mailing lists are open to the public.</li><br />
					<li>Component Mailing Lists - Development mailing list for technical discussions and committer voting related to the component. This mailing list is open to the public.</li><br />
					<li>Newsgroup - A newsgroup where users, developers, and committers can interact regarding general questions and issues about the project.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">The Development Process</h2>
					<p>Each Project lead must produce a development plan for the release cycle, and the development plan must be approved by the PMC and by a majority of Committers of the Project.</p>
					<p>Each Project must identify, and make available on its web site, the requirements and prioritizations it is working against in the current release cycle. In addition, each Project must post a release plan showing the date and content of the next major release, including any major milestones, and must keep this plan up to date.</p>
					<p>The Committers of a Project or component decide which changes may be committed to the master code base of a Project or component respectively. Three +1 ('yes' votes) with no -1 ('no' votes or vetoes) are needed to approve a code change. Vetoes must be followed by an explanation for the veto within 24 hours or the veto becomes invalid. All votes are conducted via the developer mailing list associated with the Project or component.</p>
					<p>Special rules may be established by the PMC for Projects or components with fewer than three Committers. For efficiency, some code changes from some contributors (e.g. feature additions, bug fixes) may be approved in advance, or approved in principle based on an outline of the work, in which case they may be committed first and changed as needed, with conflicts resolved by majority vote of the Committers of the Project or component, as applicable. More restrictive rules for releasing changes may be established by the PMC near the end of release cycles or for maintenance streams.</p>
					<p>The master copy of the code base must reside on the Project web site where it is accessible to all users, developers and committers. Committers must check their changes and new work into the master code base as promptly as possible (subject to any check-in voting rules that may be in effect) in order to foster collaboration among widely distributed groups and so that the latest work is always available to everyone. The PMC is responsible for working with the Eclipse Foundation to establish a release engineering and build process to ensure that builds can be reliably produced on a regular and frequent basis from the master code base and made available for download from the Project web site.</p>
					<p>The PMC is responsible for establishing the level of testing appropriate for each Project, and approving the test plans.</p>
					<p>All development technical discussions are conducted using the development mailing lists. If discussions are held offline, then a summary must be posted to the mailing list to keep the other committers informed.</p>
					
					<h2 class="topic-section-header padding-top-small">Licensing</h2>
					<p>All contributions to Projects under this Charter must adhere to the Eclipse Foundation Intellectual Property Policy.</p>
					

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