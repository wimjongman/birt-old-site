<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

 # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "What's New";
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

		<div class="homeitem">
		<h3>What's New</h3>
		
			<ul>
                                <li>
                                        <a href="http://download.eclipse.org/birt/downloads/">
                                                BIRT 2.6
                                        </a>
                                         has been officially released.  To discover what is available, see the
                                         <a href="project/notable2.6.php">Notable Features - BIRT 2.6</a>.
                                        <span class="dates">
                                                06/23/10
                                        </span>
                                </li> 			
								<li>
									<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.6RC3-201006011048">
										BIRT 2.6 RC3. 
									</a>
									is now available for download.
									<span class="dates">
										06/01/10
									</span>
								</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.6RC2-201005251749">
						BIRT 2.6 RC2. 
					</a>
					is now available for download.
					<span class="dates">
						05/25/10
					</span>
				</li>				
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.6RC1-201005181142">
						BIRT 2.6 RC1. 
					</a>
					is now available for download.
					<span class="dates">
						05/18/10
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.6M7-201005041328">
						BIRT 2.6 M7. 
					</a>
					is now available for download.
					<span class="dates">
						05/04/10
					</span>
				</li>			
				<li>				
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.5.2
					</a>
					 has been officially released.  
					<span class="dates">
						02/28/10
					</span>
				</li>			
				<li>				
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.5.1
					</a>
					 has been officially released.  
					<span class="dates">
						09/26/09
					</span>
				</li>			
				<li>				
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.5
					</a>
					 has been officially released.  To discover what is available, see the 
					 <a href="project/notable2.5.php">Notable Features - BIRT 2.5</a>.
					<span class="dates">
						06/24/09
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.5RC4-200906100630">
						BIRT 2.5 RC4 is avaialble for download. 
					</a>
					is now available for download.
					<span class="dates">
						06/10/09
					</span>
				</li>				
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=R-R1-2_3_2_2-200906011507">
						BIRT 2.3.2.2 is avaialble for download.  If you need the all in one build, please use this link. 
					</a>
					is now available for download.
					<span class="dates">
						06/10/09
					</span>
				</li>				
				<li>
	 				<a href="project/notable2.5M7.php">Notable Features - BIRT 2.5 Milestone 7</a>
					<span class="dates">
						05/18/09
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.5M7-200905061338	">
						BIRT 2.5 M7 
					</a>
					is now available for download.
					<span class="dates">
						05/07/09
					</span>
				</li>			
				<li>
	 				<a href="project/notable2.5M6.php">Notable Features - BIRT 2.5 Milestone 6</a>
					<span class="dates">
						04/01/09
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.5M6-200903181537">
						BIRT 2.5 M6 
					</a>
					is now available for download.
					<span class="dates">
						03/18/09
					</span>
				</li>				
				<li>
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.3.2 
					</a>
					is now available for download.
					<span class="dates">
						02/25/09
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.3.1 
					</a>
					is now available for download.
					<span class="dates">
						09/24/08
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.3
					</a>
					 has been officially released.  To discover what is available, see the 
					 <a href="project/notable2.3.php">Notable Features - BIRT 2.3</a>.   To view a webinar demonstrating the 2.3 features see the
					 <a href="http://live.eclipse.org/node/484">BIRT 2.3 Overview and New Features</a> webinar.  Examples demonstrated in the webinar are located 
					 <a href="http://www.birt-exchange.com/modules/wfdownloads/singlefile.php?cid=2&lid=425"> here.</a>
					<span class="dates">
						06/25/08
					</span>
				</li>		
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3RC4-200806121055">
						BIRT 2.3 RC4 
					</a>
					is now available for download.
					<span class="dates">
						06/12/08
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3RC3-200806041709">
						BIRT 2.3 RC3 
					</a>
					is now available for download.
					<span class="dates">
						06/04/08
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3RC2-200805281334">
						BIRT 2.3 RC2 
					</a>
					is now available for download.
					<span class="dates">
						05/28/08
					</span>
				</li>				
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3RC1-200805221340">
						BIRT 2.3 RC1 
					</a>
					is now available for download.
					<span class="dates">
						05/22/08
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3RC0-200805071619">
						BIRT 2.3 RC0 
					</a>
					is now available for download.
					<span class="dates">
						05/12/08
					</span>
				</li>			
				<li>
	 				<a href="project/notable2.3M6.php">Notable Features - BIRT 2.3 Milestone 6</a>
					<span class="dates">
						04/14/08
					</span>
				</li>					
			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3M6-200804080800">
						BIRT 2.3 M6 
					</a>
					is now available for download.
					<span class="dates">
						04/08/08
					</span>
				</li>			
				<li>
	 				<a href="project/notable2.3M5.php">Notable Features - BIRT 2.3 Milestone 5</a>
					<span class="dates">
						03/05/08
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.2.2
					</a>
					is now available for download.
					<span class="dates">
						03/03/08
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.3M5-200802191157">
						BIRT 2.3M5
					</a>
					is now available for download.  
					<span class="dates">
						02/19/08
					</span>
				</li>			

				<li>
					Want to help improve BIRT usability?  Take the 
					<a href="http://www.surveymonkey.com/s.aspx?sm=lyIMZ7S5OXtuS_2fW8y1f9aQ_3d_3d">
						BIRT Survey
					</a>
					<span class="dates">
						12/18/07
					</span>
				</li>			
			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.2.1
					</a>
					is now available for download.
					<span class="dates">
						10/03/07
					</span>
				</li>			
				<li>
					<a href="project/project_plan_R2_3_0.php">
						BIRT 2.3
					</a>
					Draft Project Plan is now available.
					<span class="dates">
						09/24/07
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/index2.1.3.php">
						BIRT 2.1.3
					</a>
					is now available for download.
					<span class="dates">
						06/23/07
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/">
						BIRT 2.2
					</a>
					 has been officially released.  To discover what is available, see the 
					 <a href="project/notable2.2.php">Notable Features - BIRT 2.2</a> 
					<span class="dates">
						06/29/07
					</span>
				</li>		
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.2RC4-200706211707">
						BIRT 2.2RC4
					</a>
					is now available for download.  
					<span class="dates">
						06/26/07
					</span>
				</li>				
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.2RC3-200706141812">
						BIRT 2.2RC3
					</a>
					is now available for download.  
					<span class="dates">
						06/15/07
					</span>
				</li>				
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.2RC2-200706011658">
						BIRT 2.2RC2
					</a>
					is now available for download.  
					<span class="dates">
						06/06/07
					</span>
				</li>				
				<li>
	 				<a href="project/notable2.2RC0.php">Notable Features - BIRT 2.2 Release Candidate 0</a>
					<span class="dates">
						06/04/07
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.2RC0-200705210630">
						BIRT 2.2RC0
					</a>
					is now available for download.  
					<span class="dates">
						05/23/07
					</span>
				</li>			
			
			
				<li>
	 				<a href="http://reporting.eu-survey.com/webprod/cgi-bin/askiaext.dll?Action=StartSurvey&T1=ActuateOSw2&lin=10">2nd Annual Open Source BI Survey</a>
					 Click here to participate and add your opinions. 
					<span class="dates">
						05/03/07
					</span>
				</li>				
				<li>
	 				<a href="presos">Eclipse Forum Europe 2007 Presentation</a>
					<span class="dates">
						04/30/07
					</span>
				</li>				
				<li>
	 				<a href="project/notable2.2M6.php">Notable Features - BIRT 2.2 Milestone 6</a>
					<span class="dates">
						04/17/07
					</span>
				</li>					
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.2M6-200704101624">
						BIRT 2.2M6
					</a>
					is now available for download.  
					<span class="dates">
						04/11/07
					</span>
				</li>			
				<li>
	 				<a href="presos">EclipseCon 2007 Presentations</a>
					<span class="dates">
						03/14/07
					</span>
				</li>			
				<li>
	 				<a href="project/notable2.2M5.php">Notable Features - BIRT 2.2 Milestone 5</a>
					<span class="dates">
						03/11/07
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.2M5-200702281100">
						BIRT 2.2M5
					</a>
					is now available for download.  
					<span class="dates">
						03/06/07
					</span>
				</li>
			
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1.2
					</a>
					is now available for download.
					<span class="dates">
						02/12/07
					</span>
				</li>
				<li>
	 				<a href="http://www.eclipse.org/community/webinars2006.php">BIRT Webinar</a> - The BIRT PMC will be presenting a Webinar
	 				next week.  BIRT report development will be discussed with an emphasis on 2.2 Features.
					<span class="dates">
						02/01/07
					</span>
				</li>				
				<li>
	 				<a href="project/notable2.2M4.php">Notable Features - BIRT 2.2 Milestone 4</a>
					<span class="dates">
						01/19/07
					</span>
				</li>					
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=N-R1-2.2M4-200701100630">
						BIRT 2.2M4
					</a>
					is now available for download.  
					<span class="dates">
						01/16/07
					</span>
				</li>
				<li>
	 				<a href="project/notable2.2M2.php">Notable Features - BIRT 2.2 Milestone 2</a>
					<span class="dates">
						12/21/06
					</span>
				</li>			
		
				<li>
					<a href="http://www.awprofessional.com/bookstore/product.asp?isbn=0321442598&rl=1">
						<i>BIRT: A Field Guide to Reporting</i>
					</a>
					and 
					<a href="http://www.awprofessional.com/bookstore/product.asp?isbn=0321443853&rl=1">
						<i>Integrating and Extending BIRT</i> 
					</a>
					- Two books covering many aspects of BIRT are now available from Addison-Wesley. 
					<span class="dates">
						12/08/06
					</span>
				</li>			
			
				<li>
					<a href="http://www.surveymonkey.com/s.asp?u=597922894309">
						Eclipse BIRT Awareness Survey.
					</a>
					The BIRT team is interested in your feedback. 
					<span class="dates">
						11/22/06
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads/build.php?build=M-R1-2.2M2-200611171020">
						BIRT 2.2M2
					</a>
					is now available for download.  
					<span class="dates">
						11/20/06
					</span>
				</li>				
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.2M1
					</a>
					is now available for download.  Read about the feature set at <a href="project/notable2.2M1.php">Notable Features - BIRT 2.2 Milestone 1</a>
					<span class="dates">
						10/19/06
					</span>
				</li>			
				<li>
					<a href="project/plan.php">
						BIRT 2.2 Project Plan is available
					</a>
					This page contains information on the project plan and the milestone dates for BIRT 2.2.
					<span class="dates">
						10/03/06
					</span>
				</li>					
			
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1.1
					</a>
					is now available for download.
					<span class="dates">
						09/29/06
					</span>
				</li>			
				<li>
					<a href="project/plan.php">
						BIRT 2.1.1 Project Plan is available
					</a>
					This page contains information on the project plan and the milestone dates for BIRT 2.1.1.
					<span class="dates">
						09/01/06
					</span>
				</li>					
				<li>
					<a href="http://www.eclipse.org/birt/phoenix/project/pmc.php">
						New addition to PMC
					</a>
					Larry Liang has joined the BIRT PMC.  Larry currently serves as chief architect at Inetsoft Technology.
					<span class="dates">
						07/27/06
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1
					</a>
					is now available for download.  Read about the feature set at <a href="project/notable2.1.php">Notable Features - BIRT 2.1</a>
					<span class="dates">
						07/01/06
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1 RC5
					</a>
					is available for download.
					<span class="dates">
						06/21/06
					</span>
				</li>						
				<li>
					<a href="http://www.eclipse.org/downloads/download.php?file=/datatools/downloads/callisto/webinar_060506/webinar_demo.zip">
						Source code 
					</a>
					 for the Callisto webinar covering DTP/BIRT/RCP integration has been uploaded.
					 The Webinar recording is available 
					 <a href="http://adobedev.breezecentral.com/p89156273"/>here</a>
					<span class="dates">
						06/16/06
					</span>
				</li>
				<li>
					<a href="project/releasereview/Eclipse BIRT Project 2_1 Release Review 2006-05-30.pdf">
						BIRT 2.1 Release Review Presentation
					</a>
					 has been uploaded.
					<span class="dates">
						06/02/06
					</span>
				</li>											
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1 RC4
					</a>
					is available for download.
					<span class="dates">
						06/02/06
					</span>
				</li>				
				<li>
					<a href="http://www.eclipse.org/callisto/webinars.php">
						Callisto Webinar on June 5 showcasing BIRT/DTP RCP Integration.
					</a>
					<span class="dates">
						05/30/06
					</span>
				</li>					
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1 RC3
					</a>
					is available for download.
					<span class="dates">
						05/22/06
					</span>
				</li>					
				<li>
					<a href="presos/index.php">
						Eclipse Forum Europe Presentation 
					</a>
					is available for download.
					<span class="dates">
						05/19/06
					</span>
				</li>					
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1 RC2
					</a>
					is now available for download.</a>
					<span class="dates">
						05/02/06
					</span>
				</li>					
				<li>
					<a href="http://www.eclipse.org/birt/phoenix/contest">
						The BIRT Contest 
					</a>
					deadline has been extended due to technical problems with the submission process.  The deadline for entries is Friday, May 26, 2006. 
					<span class="dates">
						05/01/06
					</span>
				</li>							
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1 RC0
					</a>
					is now available for download.  BIRT SDK can now be downloaded as well.</a>
					<span class="dates">
						04/17/06
					</span>
				</li>						
				<li>
					<a href="presos/index.php">
						BIRT EclipseCon 2006 Presentations 
					</a>
					are now available for download.
					<span class="dates">
						04/12/06
					</span>
				</li>					
				<li>
					<a href="project/Project_plan_R2_1.php">
						BIRT 2.1 Project Plan has been revised
					</a>
					This page contains information on the project plan and the milestone dates for BIRT 2.1.
					<span class="dates">
						03/31/06
					</span>
				</li>						
				<li>
					<a href="http://www.eclipse.org/birt/phoenix/contest">
						The BIRT Contest 
					</a>
					is now open for submissions.  The deadline for entries is Friday, April 28, 2006. 
					<span class="dates">
						03/14/06
					</span>
				</li>					
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.1 Milestone 5
					</a>
					is now available for download. 
					<span class="dates">
						03/07/06
					</span>
				</li>		
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.0.1
					</a>
					is now available for download. 
					<span class="dates">
						02/27/06
					</span>
				</li>			
				<li>
					<a href="project/plan.php">
						BIRT 2.0.1 Project Plan is available
					</a>
					This page contains information on the project plan and the milestone dates for BIRT 2.0.1.
					<span class="dates">
						02/22/06
					</span>
				</li>			

				<li>
					<a href="project/plan.php">
						BIRT 2.1 Project Plan is available
					</a>
					This page contains information on the project plan and the milestone dates for BIRT 2.1.
					<span class="dates">
						02/06/06
					</span>
				</li>						
				<li>
					<a href="http://www.eclipse.org/tptp/groups/Marketing/pressroom/pressreleases/BIRT%20and%20WTP.htm">
					TPTP Strengthens Integration with BIRT and WTP</a>
						
					<span class="dates">
						02/03/06
					</span>
				</li>			
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.0
					</a>
					is now available for download.  Read about the feature set at <a href="project/notable2.0.php">Notable Features - BIRT 2.0</a>
					<span class="dates">
						01/22/06
					</span>
				</li>
				
				<li>
					<a href="project/pmc.php">
						The BIRT PMC
					</a>
					is pleased to announce that Mike Fox, from IBM / Rational, has joined the Committee.
					<span class="dates">
						01/16/06
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.0 Release Candidate
					</a>
					is available for download.
					<span class="dates">
						01/04/06
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.0 Milestone 3
					</a>
					can now be downloaded.
					Read about the feature set at <a href="project/notable2.0M3.php">Notable Features - BIRT 2.0 M3</a>
					<span class="dates">
						12/07/05
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads/examples/misc/BIRT/BIRT_demo_Camv3.html">
						A new BIRT Demo
					</a>
					is available for viewing.
					<span class="dates">
						11/03/05
					</span>
				</li>
				<li>
					<a href="http://download.eclipse.org/birt/downloads">
						BIRT 2.0 Milestone 2
					</a>
					is available for download.
					Read about the feature set at <a href="project/notable2.0M2.php">Notable Features - BIRT 2.0 M2</a>
					<span class="dates">
						10/31/05
					</span>
				</li>
				<li>
					<a href="examples">
						New Examples
					</a>
					The examples have been restructured and many new examples are available.
					<span class="dates">
						10/21/05
					</span>
				</li>
				<li>
					<a href="project/plan.php">
						New Project Plan Page
					</a>
					This page contains information on the project plan and the milestone dates for BIRT 2.0.
					In addition the page contains bugzilla queries for feature and bug fixes for each milestone.Test
					<span class="dates">
						10/21/05
					</span>
				</li>
			</ul>
		</div>
	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
