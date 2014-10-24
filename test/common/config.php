<?php 

if ($_SERVER['REMOTE_ADDR'] != "72.209.186.124") { 
 echo "You don't have access to view this page!"; 
 exit(); 
}

require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");

/******************************************* 
	Things that you will need to configure before pushing environment. 
	-Set basePath
		-Set the base folder strucutre - This is different then document root 
			For example on MAMP Local you would set 
			$basePath = "/_sites/eclipse/birt/"
	-
********************************************/
			
	$basePath = '/birt/test';

	/* Use URL that you are currently on */ 
	$currentUrl = "";
	$currentUrl = ($_SERVER['REQUEST_URI']);

class PagePart {



	function getMetaInfo($metaTitle, $metaKeywords, $metaAuthor,$metaDescription, $ogTitle, $ogImage, $ogDescription, $robotsIndex, $robotsFollow, $canonicalTag) {
		
		global $basePath;
		global $currentUrl;

		$metaInfo = '';
		
		$metaInfo = '
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="text/html; charset=utf-8" http-equiv="content-type" />
	<title>'.$metaTitle.'</title>
	<meta name="keywords" content="'.$metaKeywords.'" />';
	if ($metaAuthor)
	$metaInfo .= '<meta name="author" content="'.$metaAuthor.'">';

	$metaInfo .='
	<meta name="description" content="'.$metaDescription.'" />
	<meta property="og:title" content="'.$ogTitle.'"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://eclipse.org'.$currentUrl.'"/>
	<meta property="og:image" content="'.$ogImage.'"/>
	<meta property="og:site_name" content="eclipse.org/birt/"/>
	<meta property="og:description" content="'.$ogDescription.'"/>

	<!-- search engine Items -->
	<meta name="robots" content="'.$robotsIndex.','.$robotsFollow.'" />';
	if ($canonicalTag)
	$metaInfo .='<link rel="canonical" href="'.$canonicalTag.'"/>';


	$metaInfo .= '<meta id="metaViewport" name="viewport" content="width=1124, user-scalable=no" />
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic" rel="stylesheet" type="text/css">

	<script src="'.$basePath.'/js/jquery.js"></script>
	<script src="'.$basePath.'/js/actuate.js"></script>
	<script src="'.$basePath.'/js/bootstrap.min.js"></script>
	<script src="'.$basePath.'/js/modernizr.js"></script>
	<script src="'.$basePath.'/js/twitter-bootstrap-hover-dropdown.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

	<link href="'.$basePath.'/css/actuate.css" rel="stylesheet" />
	<link href="'.$basePath.'/css/eclipse.css" rel="stylesheet" />
	<link rel="stylesheet" href="/eclipse.org-common/themes/solstice/public/stylesheets/styles.min.css">

	<!--[if lt IE 8]><link href="'.$basePath.'/css/yggdrasil-icon-font-ie7.css" rel="stylesheet" /><![endif]-->

		';
		return $metaInfo;
	}

	function getSideMenu() {

		global $currentUrl;
		global $basePath;

		$sideMenu = '';
		$sideMenu = '
			<a href="/birt/"><img src="'.$basePath.'/img/logo/Birt-logo.png" class="actu-birt-logo"/></a>
			<aside id="leftcol" class="col-md-4">
    <ul id="leftnav" class="ul-left-nav fa-ul hidden-print">
	  
			
			  				  <li class="separator">
				    <a class="separator" href="http://www.eclipse.org/birt/">
					    BIRT Home						</a>
					</li>
			  
					
			
			  				  <li>
				    <i class="fa fa-angle-double-right orange fa-fw"></i>
				    <a href="http://www.eclipse.org/birt/about/" target="_self">
					    About					  </a>
			    </li>
				
					
			
			  				  <li>
				    <i class="fa fa-angle-double-right orange fa-fw"></i>
				    <a href="http://www.eclipse.org/birt/getting-started/" target="_self">
					    Getting Started					  </a>
			    </li>
				
					
			
			  				  <li>
				    <i class="fa fa-angle-double-right orange fa-fw"></i>
				    <a href="http://download.eclipse.org/birt/downloads/" target="_self">
					    Download					  </a>
			    </li>
				
					
			
			  				  <li>
				    <i class="fa fa-angle-double-right orange fa-fw"></i>
				    <a href="http://www.eclipse.org/birt/demos/" target="_self">
					    Demos					  </a>
			    </li>
				
					
			
			  				  <li>
				    <i class="fa fa-angle-double-right orange fa-fw"></i>
				    <a href="http://www.eclipse.org/birt/documentation/" target="_self">
					    Documentation					  </a>
			    </li>
				
					
			
			  				  <li>
				    <i class="fa fa-angle-double-right orange fa-fw"></i>
				    <a href="http://www.eclipse.org/birt/community/" target="_self">
					    Community					  </a>
			    </li>
				
					
			
			  				  <li>
				    <i class="fa fa-angle-double-right orange fa-fw"></i>
				    <a href="http://www.eclipse.org/birt/built-with-birt" target="_self">
					    Built with BIRT					  </a>
			    </li>
				
						</ul>
  </aside>
		';
		return $sideMenu;
		
	}

	function getAfterBody() {
		//google tag manager code will go here
		$afterBody = '';
		$afterBody = '	<!-- After body Start-->

	<!--After Body End -->';
		
		return $afterBody;
	}

	function getFooter() {
		$footer = '';
		$footer = '<!-- Footer Begin -->
			<footer role="contentinfo" id="solstice-footer">

      <div class="container">

        <div class="row">
          <section id="footer-eclipse-foundation" class="col-xs-offset-1 col-xs-11 col-sm-7 col-md-6 col-md-offset-0 hidden-print">
            <h2 class="section-title">Eclipse Foundation</h2>
            <ul class="nav">
              <li><a href="https://www.eclipse.org/org/">About us</a></li>
              <li><a href="https://www.eclipse.org/org/foundation/contact.php">Contact Us</a></li>
              <li><a href="https://www.eclipse.org/donate">Donate</a></li>
              <li><a href="https://www.eclipse.org/org/documents/">Governance</a></li>
              <li><a href="https://www.eclipse.org/artwork/">Logo and Artwork</a></li>
              <li><a href="https://www.eclipse.org/org/foundation/directors.php">Board of Directors</a></li>
            </ul>
          </section>
          <section id="footer-legal" class="col-xs-offset-1 col-xs-11 col-sm-7 col-md-6 col-md-offset-0 hidden-print ">
            <h2 class="section-title">Legal</h2>
            <ul class="nav">
              <li><a href="https://www.eclipse.org/legal/privacy.php">Privacy Policy</a></li>
              <li><a href="https://www.eclipse.org/legal/termsofuse.php">Terms of Use</a></li>
              <li><a href="https://www.eclipse.org/legal/copyright.php">Copyright Agent</a></li>
              <li><a href="https://www.eclipse.org/org/documents/epl-v10.php">Eclipse Public License </a></li>
              <li><a href="https://www.eclipse.org/legal/">Legal Resources </a></li>

            </ul>
          </section>

          <section id="footer-useful-links" class="col-xs-offset-1 col-xs-11 col-sm-7 col-md-6 col-md-offset-0 hidden-print">
            <h2 class="section-title">Useful Links</h2>
            <ul class="nav">
              <li><a href="https://bugs.eclipse.org/bugs/">Report a Bug</a></li>
              <li><a href="//help.eclipse.org/">Documentation</a></li>
              <li><a href="https://www.eclipse.org/contribute/">How to Contribute</a></li>
              <li><a href="https://www.eclipse.org/mail/">Mailing Lists</a></li>
              <li><a href="https://www.eclipse.org/forums/">Forums</a></li>
              <li><a href="//marketplace.eclipse.org">Marketplace</a></li>
            </ul>
          </section>

          <section id="footer-other" class="col-xs-offset-1 col-xs-11 col-sm-7 col-md-6 col-md-offset-0 hidden-print">

            <h2 class="section-title">Other</h2>
            <ul class="nav">
               <li><a href="https://www.eclipse.org/ide/">IDE and Tools</a></li>
              <li><a href="https://www.eclipse.org/projects">Community of Projects</a></li>
              <li><a href="https://www.eclipse.org/org/workinggroups/">Working Groups</a></li>
            </ul>

            <ul class="list-inline social-media">
              <li><a href="https://twitter.com/EclipseFdn"><i class="fa fa-twitter-square"></i></a></li>
              <li><a href="https://plus.google.com/+Eclipse"><i class="fa fa-google-plus-square"></i></a></li>
              <li><a href="https://www.facebook.com/eclipse.org"><i class="fa fa-facebook-square"></i> </a></li>
              <li><a href="https://www.youtube.com/user/EclipseFdn"><i class="fa fa-youtube-square"></i></a></li>
            </ul>

          </section>
          <div id="copyright"  class="col-xs-offset-1 col-sm-14 col-md-24 col-md-offset-0">
            <div>
              <span class="hidden-print"><img src="/eclipse.org-common/themes/solstice/public/images/logo/eclipse-logo-bw-800x188.png" alt="Eclipse.org black and white logo" width="166" height="39" id="logo-eclipse-white"/></span>
              <p id="copyright-text">Copyright &copy; 2014 The Eclipse Foundation. All Rights Reserved.</p>
            </div>
          </div>
        <a href="#" class="scrollup">Back to the top</a>
        </div>
      </div>
      </footer>
		<!-- Footer End -->';
		return $footer;
	}
	
	
	function getHeader() {
		$header = '';
		$header = '<!-- Header Begin -->
			<header role="banner">
		  <div class="container">
		    <div id="row-toolbar" class="text-right hidden-print">
		      <div id="row-toolbar-col" class="col-md-24">
		        <ul class="list-inline">
		          <li><a href="https://dev.eclipse.org/site_login/createaccount.php"><i class="fa fa-user fa-fw"></i> Create account</a></li>
		          <li><a href="https://dev.eclipse.org/site_login/?takemeback=https://www.eclipse.org/birt/test/testIndex.php"><i class="fa fa-sign-in fa-fw"></i> Log in</a></li>
		          		        </ul>
		      </div>
		    </div>
			  <div id="row-logo-search">
				  <div id="header-left" class="col-sm-14 col-md-16 col-lg-19">
				    <div class="row">
		          <div class="hidden-xs">
		            <a href="https://www.eclipse.org/"><img src="/eclipse.org-common/themes/solstice/public/images/logo/eclipse-800x188.png" alt="Eclipse.org logo" class="logo-eclipse-default"/></a>		          </div>
						   <div id="main-menu" class="navbar row yamm">
				        <div id="navbar-collapse-1" class="navbar-collapse collapse">
				          <ul class="nav navbar-nav">
				            <li class="visible-thin"><a href="https://www.eclipse.org/downloads/" target="_self">Download</a></li><li><a href="https://www.eclipse.org/users/" target="_self">Getting Started </a></li><li><a href="https://www.eclipse.org/membership/" target="_self">Members</a></li><li><a href="https://www.eclipse.org/projects/" target="_self">Projects</a></li>				            <li class="dropdown visible-xs"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Community <b class="caret"></b></a><ul class="dropdown-menu"><li><a href="http://marketplace.eclipse.org">Marketplace</a></li><li><a href="http://events.eclipse.org">Events</a></li><li><a href="http://www.planeteclipse.org/">Planet Eclipse</a></li><li><a href="https://www.eclipse.org/community/eclipse_newsletter/">Newsletter</a></li><li><a href="https://www.youtube.com/user/EclipseFdn">Videos</a></li></ul></li><li class="dropdown visible-xs"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Participate <b class="caret"></b></a><ul class="dropdown-menu"><li><a href="https://bugs.eclipse.org/bugs/">Report a Bug</a></li><li><a href="https://www.eclipse.org/forums/">Forums</a></li><li><a href="https://www.eclipse.org/mail/">Mailing Lists</a></li><li><a href="https://wiki.eclipse.org/">Wiki</a></li><li><a href="https://wiki.eclipse.org/IRC">IRC</a></li><li><a href="https://www.eclipse.org/contribute/">How to Contribute</a></li></ul></li><li class="dropdown visible-xs"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Working Groups <b class="caret"></b></a><ul class="dropdown-menu"><li><a href="http://wiki.eclipse.org/Auto_IWG">Automotive</a></li><li><a href="http://iot.eclipse.org">Internet of Things</a></li><li><a href="http://locationtech.org">LocationTech</a></li><li><a href="http://lts.eclipse.org">Long-Term Support</a></li><li><a href="http://polarsys.org">PolarSys</a></li><li><a href="http://science.eclipse.org">Science</a></li></ul></li>				            <!-- More -->
				            <li class="dropdown hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle">More<b class="caret"></b></a>
				              <ul class="dropdown-menu">
				                <li>
				                  <!-- Content container to add padding -->
				                  <div class="yamm-content">
				                    <div class="row">
				                      <ul class="col-sm-8 list-unstyled"><li><p><strong>Community</strong></p></li><li><a href="http://marketplace.eclipse.org">Marketplace</a></li><li><a href="http://events.eclipse.org">Events</a></li><li><a href="http://www.planeteclipse.org/">Planet Eclipse</a></li><li><a href="https://www.eclipse.org/community/eclipse_newsletter/">Newsletter</a></li><li><a href="https://www.youtube.com/user/EclipseFdn">Videos</a></li></ul><ul class="col-sm-8 list-unstyled"><li><p><strong>Participate</strong></p></li><li><a href="https://bugs.eclipse.org/bugs/">Report a Bug</a></li><li><a href="https://www.eclipse.org/forums/">Forums</a></li><li><a href="https://www.eclipse.org/mail/">Mailing Lists</a></li><li><a href="https://wiki.eclipse.org/">Wiki</a></li><li><a href="https://wiki.eclipse.org/IRC">IRC</a></li><li><a href="https://www.eclipse.org/contribute/">How to Contribute</a></li></ul><ul class="col-sm-8 list-unstyled"><li><p><strong>Working Groups</strong></p></li><li><a href="http://wiki.eclipse.org/Auto_IWG">Automotive</a></li><li><a href="http://iot.eclipse.org">Internet of Things</a></li><li><a href="http://locationtech.org">LocationTech</a></li><li><a href="http://lts.eclipse.org">Long-Term Support</a></li><li><a href="http://polarsys.org">PolarSys</a></li><li><a href="http://science.eclipse.org">Science</a></li></ul>					                  </div>
				                  </div>
				                </li>
				              </ul>
				            </li>
				          </ul>
				        </div>
				        <div class="navbar-header">
						      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						      </button>
						      <a href="https://www.eclipse.org/" class="navbar-brand visible-xs"><img src="/eclipse.org-common/themes/solstice/public/images/logo/eclipse-800x188.png" alt="Eclipse.org logo" width="174" class="logo-eclipse-default"/></a>		    				</div>
					    </div>
				    </div>
				  </div>
				  <div id="header-right" class="form-inline col-sm-10 col-md-8 col-lg-5 hidden-print hidden-xs">
					  <div id="header-right-container">
						  <div id="custom-search-form">
						    <form action="//www.google.com/cse" id="form-eclipse-search" role="form" class="input-group">
								  <input type="hidden" name="cx" value="017941334893793413703:sqfrdtd112s" />
								  <input id="search-box" placeholder="Search eclipse.org" type="text" name="q" size="25" class="form-control"/>
		              <span class="input-group-btn">
			              <button class="btn btn-default" type="submit">
			                <i class="fa fa-search"></i>
			              </button>
	                </span>
	              </form>
	            </div><!-- /input-group -->
	            <a id="btn-call-for-action" href="https://www.eclipse.org/downloads/" class="btn btn-huge btn-warning"><i class="fa fa-download"></i> Download</a>
				    </div>
				  </div>

	      </div>

		  </div>
		</header>
					<section id="breadcrumb" class="defaut-breadcrumbs hidden-print">
			  <div class="container">
			    <div class="col-xs-24">
						<ol class="breadcrumb"><li><a href="https://www.eclipse.org/">Home</a></li><li><a href="https://www.eclipse.org/projects/">Projects</a></li><li><a href="https://www.eclipse.org/birt">birt</a></li><li class="active">Eclipse BIRT Home</li></ol>					</div>
			    			    </div>
		    </section>
		<!-- Header End -->';
		return $header;
	}

}
