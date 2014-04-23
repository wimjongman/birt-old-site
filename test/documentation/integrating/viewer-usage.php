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
		$metaTitle 		= "Documentation";
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
					<h1 class="eclipse-title-main">Viewer Usage</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="/birt/test/documentation/install.php">Installation Guide</a></li>
		                    <li><a href="/birt/test/documentation/tutorial/">Design Tutorial</a></li>
		                    <li><a href="index.php">Integrating BIRT</a>
		                    	<ul>
		                    		<li><a href="viewer-setup.php">Viewer Setup</a></li>
		                    		<li><a href="viewer-usage.php">Viewer Usage</a></li>
		                    		<li><a href="using-php.php">Using PHP</a></li>
		                    		<li><a href="scripting.php">Report Scripting</a></li>
		                    		<li><a href="deapi.php">Design Engine API</a></li>
		                    		<li><a href="reapi.php">Report Engine API</a></li>
		                    	</ul>
		                    </li>
		                    <li><a href="/birt/test/documentation/sample-database.php">Sample Database</a></li>
		                    <li><a href="/birt/test/documentation/reference.php">Technical Reference</a></li>
		                    <li><a href="/birt/test/documentation/building-birt.php">Building BIRT</a></li>
		           		</ul>

			        </div>

					<h2 class="topic-section-header padding-top-small">Integration Points</h2>
					<p>BIRT supplies several APIs and an Example Java EE application for generating and viewing reports. The major APIs are the Design Engine API(DE API), Report Engine API(RE API) and the Chart Engine API (CE API). These pages describe the various APIs and illustrate examples on their usage. In addition to the APIs, BIRT supports scripting using Rhino within report designs. A primer is available to get started scripting.</p>
					
					<h2 class="topic-section-header padding-top-small">Example Report Viewer (Java EE App/Plugin)</h2>
					<p>The BIRT Viewer can be used in a variety of ways:<br />
					Note that the BIRT Viewer requires that cookies be enabled.
					<ul class="eclipse-list">
						<li>As a stand-alone, pre-built web application for running and viewing reports.</li><br />
						<li>As a starter web application that you can customize to your needs.</li><br />
						<li>Called through the BIRT tag library.</li><br />
						<li>As a plugin in existing RCP applications.</li>
					</ul>
					</p>
					
					
					
					<h2 class="topic-section-header padding-top-small">Overview</h2>
					<p>This Viewer is an AJAX based Java EE application that illustrates using the BIRT engine to generate and render report content.</p>
					<p>The Web Viewer can be used to generate and render reports, and also supports more interactive features such as table of contents, exporting report content to several formats, client and server side printing, as well as report pagination. The features available will depend on what servlet mapping is used, the settings available in the web.xml file and what values are passed as parameters.</p>
					<p>The Example Viewer can also be deployed as an Eclipse plugin in an RCP application.</p>
					<p>The Example Viewer also ships with a tag library which can be used to provide report functionality within your existing web applications.</p>
					
					<h2 class="topic-section-header padding-top-small">Servlet Mappings</h2>
					<p>The BIRT Web Viewer consist of two main Servlets, the ViewerServlet and the BirtEngineServlet. These Servlets handle three mappings: ( /frameset, /run, and /preview).</p>
					<p>The <b>/frameset</b> mapping renders the report in the full AJAX viewer complete with toolbar, navigation bar and table of contents features.  This mapping also generates an intermediate report document from the report design file to support the AJAX based features.<br />
					eg http://localhost:8080/viewer/frameset?__report=myreport.rptdesign&parm1=value1</p>
					<p>The <b>/run</b> mapping runs and renders the report but does not create a report document. This mapping does not supply HTML pagination, TOC or toolbar features, but does use the AJAX framework to collect parameters, support report canceling and retrieve the report output in HTML format.<br />
					eg http://localhost:8080/viewer/run?__report=myreport.rptdesign&parm1=value1</p>
					<p>The <b>/preview</b> mapping runs and renders the report and does not generate a report document, although an existing report document can be used in which case just the render operation occurs.  The output from the run and render operation is sent directly to the browser.<br />
					eg http://localhost:8080/viewer/preview?__report=myreport.rptdesign&parm1=value1</p>
					<img src="/birt/test/img/documentation/integrating/servletmappings.PNG" />
					
					<h2 class="topic-section-header padding-top-small">Web Viewer Web.xml Settings</h2>
					<p>The web.xml file contains many settings used to configure the Viewer.  These settings are illustrated below.</p>

					<table border="1">
 						<tr><td><p><b>Attribute</b></p></td><td><p><b>Description</b></p></td></tr>
 						<tr><td><p>BIRT_VIEWER_LOCALE</p></td><td><p>This setting sets the default locale for the Web Viewer.</p></td></tr>
 						<tr><td><p>BIRT_VIEWER_WORKING_FOLDER</p></td><td><p>This is the default location for report designs. If the report design specified in a URL parameter is relative, this path is pre-pended to the report name.</p></td></tr>
 						<tr><td><p>BIRT_VIEWER_DOCUMENT_FOLDER</p></td><td><p>If a report document parameter (__document) is not used, this is the location that report documents will be generated in. If this setting is left blank, the default value "webapp/documents" will be used. If the__document URL parameter is used and the value is relative the report document will be created in the working folder.</p></td></tr>
 						<tr><td><p>WORKING_FOLDER_ACCESS_ONLY</p></td><td><p>If this value is set to true, reports will only be searched for, relative to the working folder. This prevents a user from entering a full path to a report. Relative paths below the working folder are accessible.</p></td></tr>
 						<tr><td><p>BIRT_VIEWER_IMAGE_DIR</p></td><td><p>Specifies the default location to store temporary images generated by the report engine. If this setting is left blank, the default location of webapp/report/images is used.</p></td></tr>
 						<tr><td><p>BIRT_VIEWER_LOG_DIR</p></td><td><p>Specifies the default location to store report engine log files. If this setting is left blank, the default location of webapp/logs is used.</p></td></tr>
 						<tr><td><p>BIRT_VIEWER_LOG_LEVEL</p></td><td><p>Sets the report engine log level. Valid values are:<br/>
 						OFF<br />
 						SEVERE<br />
 						WARNING<br />
 						INFO<br />
 						CONFIG<br />
 						FINE<br />
 						FINER<br />
 						FINEST</p></td></tr>
 						<tr><td><p>BIRT_VIEWER_SCRIPTLIB_DIR</p></td><td><p>Specifies the default location to place Jar files used by the script engine. These can be Jars used by script engine or jars containing event handlers written in Java. These Jars are appended to the classpath. If this setting is left blank the default value of webapp/scriptlib will be used.</p></td></tr>
 						<tr><td><p>BIRT_RESOURCE_PATH</p></td><td><p>This setting specifies the resource path used by report engine. The resource path is used to search for libraries, images, and properties files used by a report. If this setting is left blank, resources will be searched for in the same directory as the report.</p></td></tr>
 						<tr><td><p >BIRT_VIEWER_MAX_ROWS</p></td><td><p>Specifies the maximum number of rows to retrieve from a dataset.</p></td></tr>
 						<tr><td><p>BIRT_OVERWRITE_DOCUMENT</p></td><td><p>Specifies whether to overwrite the report document every time a report is executed. The default is set to true. Valid values are true and false.</p></td></tr>
 						
 <tr>
  <td
  >
  <p >BIRT_VIEWER_CONFIG_FILE</p>
  </td>
  <td
  
  >
  <p >Specifies
  the location of the viewer.properties file.  This file contains various
  settings used by the viewer.</p>
  </td>
 </tr>
 <tr>
  <td
  >
  <p >BIRT_VIEWER_PRINT_SERVERSIDE</p>
  </td>
  <td
  
  >
  <p >This
  setting specifies whether server side printing is supported.  If set to OFF
  the toolbar icon used for server side printing will be removed
  automatically.  Valid values are ON and OFF.</p>
  </td>
 </tr>
 <tr>
  <td
  >
  <p >HTML_ENABLE_AGENTSTYLE_ENGINE</p>
  </td>
  <td
  
  >
  <p >This
  setting determines how BIRT styles are handled with the HTML emitter.  If set
  to TRUE, the BIRT engine will output the styles directly to the report and
  depends on the browser to implement the style calculations.  If set to FALSE
  the emitter will use the BIRT style engine to calculate the styles and will
  output the results directly to the report.</p>
  </td>
 </tr>
</table>


<h2><a name="parameters"></a>Parameters</h2>

<p >The example viewer has a distinction between report
parameters and viewer configuration parameters.  Report parameters are used by
the report designs and configuration parameters affect the appearance and
features available to the example Viewer application.  In either case these
parameters can be passed as URL parameters by entering the &amp;parmname=value
syntax, passed in a html form, or passed using the jsp:parm tag.  Configuration
parameters by default start with two underscore characters “__” prefixed to the parameter name.</p>

<p >Report parameters that are designated in the design as
required and are not entered in one of the above methods will cause the viewer
to launch a parameter entry dialog box.  Additionally the example Viewer tag
library contains tags to configure and set parameters as well.</p>

<table border="1">
 <tr>
  <td>
  <p ><b>Attribute</b></p>
  </td>
  <td>
  <p ><b>Description</b></p>
  </td>
 </tr>
 <tr>
  <td>
  <p >__id</p>
  </td>
  <td>
  <p >A
  unique identifier for the viewer.</p>
  </td>
 </tr>
 <tr>
  <td>
  <p >__title</p>
  </td>
  <td >
  <p >Sets the report title.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__showtitle</p>
  </td>
  <td 
  
>
  <p >Determines
  if the report title is shown in the frameset viewer.  Defaults to true. 
  Valid values are true and false.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__toolbar</p>
  </td>
  <td 
  
>
  <p >Determines
  if the report toolbar is shown in the frameset viewer.  Defaults to true. 
  Valid values are true and false.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__navigationbar</p>
  </td>
  <td 
  
>
  <p >Determines
  if the navigation bar is shown in the frameset viewer.  Defaults to true.  Valid
  values are true and false.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__parameterpage</p>
  </td>
  <td 
  
>
  <p >Determines
  if the parameter page is displayed.  By default the frameset, run and preview
  mappings will automatically determine if the parameter page is required. 
  This setting will override this behavior.  Valid values are true and false.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__report</p>
  </td>
  <td 
  
>
  <p >Sets
  the name of the report design to process.  This can be an absolute path or relative
  to the working folder (See web.xml settings).</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__document</p>
  </td>
  <td 
  
>
  <p >Sets
  the name for the rptdocument.  The document is created when the report engine
  separates run and render tasks, and is used to support features like table of
  contents and pagination.  This setting can be an absolute path or relative to
  the working folder (See web.xml settings).  If no document parameter is used,
  a unique document is created in the document folder (see web.xml settings).</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__format</p>
  </td>
  <td 
  
>
  <p >Specifies
  the desired output format, such as pdf, html, doc, ppt, or xls.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__locale</p>
  </td>
  <td 
  
>
  <p >Specifies
  the locale for the specific operation.  Note that this will override the
  default locale.  Order of precedence is as follows:</p>
  <p >__locale
  parameter.</p>
  <p >Locale
  from client browser.</p>
  <p >Locale
  web.xml setting.</p>
  <p >Locale
  for the application server.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__svg</p>
  </td>
  <td 
  
>
  <p >Specifies
  whether SVG is supported.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__page</p>
  </td>
  <td 
  
>
  <p >Specifies
  specific page to render.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__pagerange</p>
  </td>
  <td 
  
>
  <p >Specifies
  page range to render. Eg 1-4,7.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__isnull</p>
  </td>
  <td 
  
>
  <p >Specifies
  that a report parameter has a null value.  Eg __isnull=Myparameter.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__islocale</p>
  </td>
  <td 
  
>
  <p >Specifies
  whether the parameter is localized.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__masterpage</p>
  </td>
  <td 
  
>
  <p >Indicates
  that the report master page should be used or not.  Valid values are true and
  false.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__overwrite</p>
  </td>
  <td 
  
>
  <p >This
  setting if set to true will force an overwrite of the existing report
  document. This setting will override the</p>
  <p >initial
  setting in the web.xml.  By default the report document is overwritten
  anytime the report design is changed.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__bookmark</p>
  </td>
  <td 
  
>
  <p >Specifies
  a specific bookmark within the report to load.  The viewer will automatically
  load the appropriate page.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__rtl</p>
  </td>
  <td 
  
>
  <p >Specifies
  whether to display the report in right to left format.  This setting defaults
  to false.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__fittopage</p>
  </td>
  <td 
  
>
  <p >Specifies
  whether PDF generation should fit content to a page.  Valid values are true
  and false.</p>
  </td>
 </tr>
 <tr>
  <td 
  >
  <p >__resourceFolder</p>
  </td>
  <td 
  
>
  <p >Specifies
  the resource folder to use.  This setting will override the default setting
  in the web.xml.  The resource folder is used to locate libraries, images, and
  resource files.</p>
  </td>
 </tr>
</table>
</p>

<h2><a name="directory"></a>Viewer Directory Structure</h2>
<p>
The Example Web Viewer has the following directory structure.

<img src="viewerarch.PNG" /><br/><br/></p>
<p>
<div class="homeitem3col">
<h3>BIRT POJO Viewer: </h3>
<ul>
  If you are installing BIRT 3.7 or higher, The platform, configuration, and plugin directories has been removed from the Viewer.
  See the <a href="http://wiki.eclipse.org/Birt_3.7_Migration_Guide">BIRT 3.7 Migration Guide</a> for more details.
 </ul>
</div>
Most of the directories are configurable using variables set within web.xml.  The WEB-INF/platform, webcontent, and WEB-INF/lib directories are exceptions.
</p>
<p>
The BIRT plugins and associated OSGi configuration files are located in the WEB-INF/platform directory.  This directory is hard coded in the Viewer, but allows the application to be deployed in WAR format.  When deployed in this manner the Viewer source will create a copy of the platform directory in a directory that is set with the system variable <b>javax.servlet.context.tempdir</b>.  Once the platform directory is created the BIRT plugins will be copied to the tempdir and the Platform is then started.
</p>
<p>
The webcontent directory contains the JavaScript files used for AJAX communications, the JSP fragments used to construct the Viewer instance, image files used by the Viewer, and the cascading style sheets used within the Viewer.
</p>
<p>
The WEBINF/lib directory contains the required Jars for the Viewer to operate.  
</p>
<p>
Additional Jar files that are used by deployed reports can be placed in the WEB-INF/lib or the scriptlib directories.  See the web.xml settings section for additional details.
</p>
<h2><a name="tags"></a>Viewer Tag Library</h2>
<p>
The Web Viewer now contains a tag library that can be used to customize the behavior of the Viewer.  This tag library can be deployed by either deploying the viewer as normal or by using the BIRT Web Deployment project wizard.  In addition, if you desire to have BIRT deployed in one context and include the tag library in a separate context this can be done by copying the birt.tld file to your WEB-INF/tlds directory and copying coreapi.jar, modelapi,jar, viewerservlets.jar, engineapi.jar,  and com.ibm.icu_version.jar from the Viewer libs directory to the new context/web-inf/lib directory.  Add the following reference to your web.xml
<br>
<pre>
	&lt;jsp-config>
		&lt;taglib>
			&lt;taglib-uri>/birt.tld&lt;/taglib-uri>
			&lt;taglib-location>/WEB-INF/tlds/birt.tld&lt;/taglib-location>
		&lt;/taglib>
	&lt;/jsp-config>
</pre>
</p>
<p>
 Using this approach reports are referenced in relation to the BIRT Viewer not the new context.
</p>
<p>
The Viewer tag library contains five tags param, paramDef, parameterPage, report and viewer.  Each tag has multiple attributes that control the behavior of the Viewer.
<img src="birttags.PNG" />
<br>Example JSP
<pre>
&lt;%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
&lt;%@ taglib uri="/birt.tld" prefix="birt" %>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
&lt;html>
&lt;head>
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
&lt;title>Insert title here&lt;/title>
&lt;/head>
&lt;body>
&lt;birt:viewer id="birtViewer" reportDesign="TopNPercent.rptdesign"
pattern="frameset"
height="450"
width="700"
format="html"
 >&lt;/birt:viewer>
&lt;/body>
&lt;/html>
</pre>
</p>

<h3>The viewer Tag Attributes</h3>
<table border="1">
 <tr>
  <td
  >
  <p>Attribute</p>
  </td>
  <td
  
  >
  <p>Description</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>id</p>
  </td>
  <td
  
  
  >
  <p>A
  unique identifier for the viewer.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>pattern</p>
  </td>
  <td
  
  
  >
  <p>The
  Viewer tag supports either run or frameset, which matches the standard viewer
  servlet mappings.
  Frameset is used by default.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  baseURL
  </p>
  </td>
  <td
  
  
  >
  <p>The
  baseURL is used to determine the location of the
  Viewer application. If the tags are
  used in the same context as the BIRT viewer this attribute is not
  required. If the tag library is used
  in a separate context but in the same application server, this setting may
  contain a value such as baseURL=”/
  WebViewerExample”.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>title</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the title for the report container page.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  isHostPage
  </p>
  </td>
  <td
  
  
  >
  <p>If
  this value is set to true the viewer tag will occupy the entire page.
    The default value is false, which allows
  multiple reports to be contained in one JSP Page.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>scrolling</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the IFRAME scrolling style attribute.
  Valid values are auto, yes, and no.
  If isHostPage is true these values are
  ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>position</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the IFRAME position style attribute.
  Valid values are static, absolute, relative and fixed.
    If isHostPage is
  true these values are ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>style</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the style for the report container. If isHostPage
  is true this value is ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>height</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the Height of the IFRAME in pixels. If isHostPage
  is true this value is ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>width</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the Width of the IFRAME in pixels. If isHostPage is
  true this value is ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>top</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the top of the IFRAME in pixels. If isHostPage is
  true this value is ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>left</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the left of the IFRAME in pixels. If isHostPage is
  true this value is ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  frameborder
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  whether or not to display a border around the IFRAME.
    Valid values are yes or
  no. If isHostPage
  is true this value is ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  reportDesign
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the name of the report design file.
  This setting can be relative or set to a full path, or a URL.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  reportDocument
  </p>
  </td>
  <td
  
  
  >
  <p>Sets
  the name of the report document file.
  This setting can be relative or set to a full path, or a URL.
    If using a URL it must be a file URL.
    File://. </p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  reportletId
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the instance id of the portion of the report to be displayed.
    Note this only works with the run pattern
  and a reportDocument setting.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>bookmark</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  which bookmark to load within the report.
  For example, adding a table of contents and specifying the TOC
  entry
   will load the page containing that
  entry.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>locale</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the locale for the report.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  svg
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  where SVG for charts is supported.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>format</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the output format, such as pdf, html, or 
  xls.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  rtl
  </p>
  </td>
  <td
  
  
  >
  <p>Sets
  the right to left flag. By default
  this is false.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  pageNum
  </p>
  </td>
  <td
  
  
  >
  <p>Displays
  a specific page within the report.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  pageRange
  </p>
  </td>
  <td
  
  
  >
  <p>Displays
  a specific page range within the report.
  For example 2-5, 12.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  resourceFolder
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the resource folder, which contains libraries and images.
    This is usually specified in the 
  Web.xml, but this parameter will override that value.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  forceOverwriteDocument
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  whether the report document that is created is overwritten.
    Only valid with the frameset mapping.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  showToolBar
  </p>
  </td>
  <td
  
  
  >
  <p>When
  using the Viewer tag with the frameset pattern, this setting determines if
  the toolbar is displayed.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  showNavigationBar
  </p>
  </td>
  <td
  
  
  >
  <p>When
  using the Viewer tag with the frameset pattern, this setting determines if
  the navigation bar is displayed.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  showTitle
  </p>
  </td>
  <td
  
  
  >
  <p>When
  using the Viewer tag with the frameset pattern, this setting determines if
  the report title is displayed.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  showParameterPage
  </p>
  </td>
  <td
  
  
  >
  <p>When
  using the Viewer tag, this setting determines if the parameter page is
  displayed.</p>
  </td>
 </tr>
</table>


<h3>The report Tag Attributes</h3>
<table border="1">

 <tr>
  <td
  >
  <p>Attribute</p>
  </td>
  <td
  
  >
  <p>Description</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>id</p>
  </td>
  <td
  
  
  >
  <p>A
  unique identifier for the viewer.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  baseURL
  </p>
  </td>
  <td
  
  
  >
  <p>The
  baseURL is used to determine the location of the
  Viewer application. If the tags are
  used in the same context as the BIRT viewer this attribute is not
  required. If the tag library is used
  in a separate context but in the same application server, this setting may
  contain a value such as baseURL=”/
  WebViewerExample”.
  The reportContainer attribute must be set to
  iframe if this attribute is used.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  isHostPage
  </p>
  </td>
  <td
  
  
  >
  <p>If
  this value is set to true the viewer tag will occupy the entire page.
    The default value is false, which allows
  multiple reports to be contained in one JSP Page.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>scrolling</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the DIV/IFRAME scrolling style attribute.
  Valid values are auto, yes, and no.
  If isHostPage is true these values are
  ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>position</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the DIV/IFRAME position style attribute.
  Valid values are static, absolute, relative and fixed.
    If isHostPage is
  true these values are ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>style</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the style for the report container. If isHostPage
  is true this value is ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>height</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the Height of the IFRAME in pixels. If isHostPage
  is true this value is ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>width</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the Width of the IFRAME in pixels. If isHostPage is
  true this value is ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>top</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the top of the IFRAME in pixels. If isHostPage is
  true this value is ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>left</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the left of the IFRAME in pixels. If isHostPage is
  true this value is ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  frameborder
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  whether or not to display a border around the IFRAME.
    Valid values are yes or
  no. If isHostPage
  is true this value is ignored. 
  reportContainer must be set to 
  iframe.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  reportDesign
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the name of the report design file.
  This setting can be relative or set to a full path, or a URL.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  reportDocument
  </p>
  </td>
  <td
  
  
  >
  <p>Sets
  the name of the report document file.
  This setting can be relative or set to a full path, or a URL.
    If using a URL it must be a file URL.
    File://. 
  Note that a report document will not be created, but if the 
  reportDocument exist it will be rendered.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  reportletId
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the instance id of the portion of the report to be displayed.
    Note this only works with the run pattern
  and a reportDocument setting.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>bookmark</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  which bookmark to load within the report.
  For example, adding a table of contents and specifying the TOC </p>
  <p>
  entry
   will load the page containing that
  entry.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>locale</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the locale for the report.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  svg
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  where SVG for charts is supported.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>format</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the output format, such as pdf, html, or 
  xls.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  rtl
  </p>
  </td>
  <td
  
  
  >
  <p>Sets
  the right to left flag. By default
  this is false.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  pageNum
  </p>
  </td>
  <td
  
  
  >
  <p>Displays
  a specific page within the report.
  Report document must already exist.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  pageRange
  </p>
  </td>
  <td
  
  
  >
  <p>Displays
  a specific page range within the report.
  For example 2-5, 12. Report
  Document must already exist.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  resourceFolder
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the resource folder, which contains libraries and images.
    This is usually specified in the 
  Web.xml, but this parameter will override that value.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  showParameterPage
  </p>
  </td>
  <td
  
  
  >
  <p>When
  using the report tag, this setting determines if the parameter page is
  displayed. If reportContainer
  is set to div, this setting is ignored and the parameter page is not displayed.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  reportContainer
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  if the report is rendered in an IFRAME or a DIV element.
    This attribute affects other attributes.</p>
  </td>
 </tr>
</table>

<h3>The param Tag Attributes</h3>
<table border="1">
<tr>
  <td
  >
  <p>Attribute</p>
  </td>
  <td
  
  >
  <p>Description</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>id</p>
  </td>
  <td
  
  
  >
  <p>A
  unique identifier for the viewer.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>name</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the report parameter name. This must
  match the design file.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>pattern</p>
  </td>
  <td
  
  
  >
  <p>Specifies the report parameter pattern format. If
  isLocale is false, this value is ignored.
  </p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  isLocale
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  whether the report parameter value is a locale/format related string.
    Valid values are true or false.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>value</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the value for the report parameter. If
  this is left blank the default value for the parameter is used.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  displaytext
  </p>
  </td>
  <td
  
  
  >
  <p>Set
  the display text for the parameter.</p>
  </td>
 </tr>
</table>
<h3>The parameterPage Tag Attributes</h3>
<table border="1">
<tr>
  <td
  >
  <p>Attribute</p>
  </td>
  <td
  
  >
  <p>Description</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>id</p>
  </td>
  <td
  
  
  >
  <p>A
  unique identifier for the viewer.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>name</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the report parameter page name. This
  attribute is used to create a form and is required if using the 
  isCustom attribute. This attribute must be unique.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  isCustom
  </p>
  </td>
  <td
  
  
  >
  <p>Indicates
  whether the default BIRT parameter page is used or a custom page.
    Valid values are true and false.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>pattern</p>
  </td>
  <td
  
  
  >
  <p>The
  parameterPage tag supports run, frameset, and
  preview mappings. Frameset is used by
  default.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  baseURL
  </p>
  </td>
  <td
  
  
  >
  <p>The
  baseURL is used to determine the location of the
  Viewer application. If the tags are
  used in the same context as the BIRT viewer this attribute is not
  required. If the tag library is used
  in a separate context but in the same application server, this setting may
  contain a value such as baseURL=”/
  WebViewerExample”.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>target</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the target window for the form submit.
  For example: _blank or parent</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>title</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the title for the report container page.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>scrolling</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the IFRAME scrolling style attribute.
  Valid values are auto, yes, and no</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>position</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the IFRAME position style attribute.
  Valid values are static, absolute, relative and fixed.
    </p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>style</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the style for the report container</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>height</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the Height of the IFRAME in pixels. </p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>width</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the Width of the IFRAME in pixels. </p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>top</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the top of the IFRAME in pixels. </p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>left</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the left of the IFRAME in pixels. </p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  frameborder
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  whether or not to display a border around the IFRAME.
    Valid values are yes or
  no. If isCustom
  is true this value is ignored.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  reportDesign
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the name of the report design file.
  This setting can be relative or set to a full path, or a URL.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  reportDocument
  </p>
  </td>
  <td
  
  
  >
  <p>Sets
  the name of the report document file.
  This setting can be relative or set to a full path, or a URL.
    If using a URL it must be a file URL.
    File://. </p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  reportletId
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the instance id of the portion of the report to be displayed.
    Note this only works with the run pattern
  and a reportDocument setting.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>bookmark</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  which bookmark to load within the report.
  For example, adding a table of contents and specifying the TOC </p>
  <p>
  entry
   will load the page containing that
  entry.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>locale</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the locale for the report.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  svg
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  where SVG for charts is supported.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>format</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the output format, such as pdf, html, or 
  xls.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  rtl
  </p>
  </td>
  <td
  
  
  >
  <p>Sets
  the right to left flag. By default
  this is false.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  resourceFolder
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the resource folder, which contains libraries and images.
    This is usually specified in the 
  Web.xml, but this parameter will override that value.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  forceOverwriteDocument
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  whether the report document that is created is overwritten.
    Only valid with the frameset mapping.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  showToolBar
  </p>
  </td>
  <td
  
  
  >
  <p>When
  using the Viewer tag with the frameset pattern, this setting determines if
  the toolbar is displayed.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  showNavigationBar
  </p>
  </td>
  <td
  
  
  >
  <p>When
  using the Viewer tag with the frameset pattern, this setting determines if
  the navigation bar is displayed.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  showTitle
  </p>
  </td>
  <td
  
  
  >
  <p>When
  using the Viewer tag with the frameset pattern, this setting determines if
  the report title is displayed.</p>
  </td>
 </tr>
</table>

<h3>The paramDef Tag Attributes</h3>

<table border="1">
 <tr>
  <td
  
  >
  <p>id</p>
  </td>
  <td
  
  
  >
  <p>A
  unique identifier for the parameter control.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>name</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the report parameter name. This must
  match the parameter name in the report.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  isCustom
  </p>
  </td>
  <td
  
  
  >
  <p>Indicates
  whether the default BIRT parameter page is used or a custom page.
    Valid values are true and false.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>pattern</p>
  </td>
  <td
  
  
  >
  <p>Specifies the report parameter pattern format. If
  isLocale is false, this value is ignored.
  </p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>value</p>
  </td>
  <td
  
  
  >
  <p>Sets
  the value for the report parameter. If
  this is left blank the default value for the parameter is used.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  displaytext
  </p>
  </td>
  <td
  
  
  >
  <p>Set
  the display text for the parameter.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  isLocale
  </p>
  </td>
  <td
  
  
  >
  <p>Specifies
  whether the report parameter value is a locale/format related string.
    Valid values are true or false.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>title</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the title attribute of the parameter control.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>
  cssClass
  </p>
  </td>
  <td
  
  
  >
  <p>Sets
  the CSS class attribute of the parameter control.</p>
  </td>
 </tr>
 <tr>
  <td
  
  >
  <p>style</p>
  </td>
  <td
  
  
  >
  <p>Specifies
  the style for the parameter control.</p>
  </td>
 </tr>
</table>
					
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