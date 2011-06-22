<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 3.7";
	$pageKeywords	= "";
	$pageAuthor		= "";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#

	require "../birt.inc";
	$linkToTop				= linkToTop();


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
<div id="maincontent">
        <div id="midcolumn">	


		<h1><a name="top"></a>$pageTitle</h1>
		<blockquote>
			<ul>
				<li><a href="#intro">Introduction</a></li>
				<li><a href="#jump_2">New BIRT POJO Runtime</a></li>
				<li><a href="#jump_3">Open Office Emitters</a></li>
				<li><a href="#jump_4">Hive/Hadoop Driver</a></li>				
				<li><a href="#jump_5">Extensible JDBC Driver</a></li>
				<li><a href="#jump_6">Outline View Improvements</a></li>
				<li><a href="#jump_7">SVG to PDF Improvements in WebViewer</a></li>
				<li><a href="#jump_8">New Emitter Options</a></li>
				<li><a href="#jump_9">Alias and Synonym Table Access</a></li>
				<li><a href="#jump_10">Viewtime-Value-Of with Page Variables</a></li>
				<li><a href="#jump_11">Miscellaneous</a></li>	
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
In conjunction with the Indigo release, the BIRT team is pleased to announce the availability of BIRT 3.7.  This release encompasses over three hundred bugzilla entries and includes many optimizations and improvements of existing BIRT features. This document describes some of the new features that are available within the 3.7 release.
</p>
<p>
To review the projects included in the 3.7 release, see <a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/birt/project/plan/birt_project_plan_3_7.xml">the BIRT 3.7 Project Plan</a>.
</p>
<p>
To help us identify the BIRT enhancements important to you, we encourage you to use the Bugzilla vote feature. It allows you to vote for up to ten enhancements. To cast your vote, locate or create the corresponding BIRT bugzilla entry and then click on the "(vote)" link that appears on the right of the "Importance" field.
<br>
<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;votes=1;bug_severity=enhancement;target_milestone=Future;product=BIRT;classification=BIRT">Here are the current BIRT enhancements requests with at least 1 vote.</a> 


</p>
<h1><a name="jump_2">New BIRT POJO Runtime</a></h1>
<p>
BIRT is an Eclipse based project and as such has always relied on OSGi as the mechanism used to deploy not only the designer but also the BIRT runtime.  While this works well for modularizing functionality within individual bundles and providing a convenient method to deploy new features within a running environment, it does present challenges when deploying the runtime.  Two concerns we have seen in the community concern class loading and deployment complexity.  Because OSGi creates an individual classpath for each bundle, when deploying the BIRT runtime within a Java EE based application, configuring the BIRT engine to locate a particular class can be difficult.  To deploy the BIRT engine currently requires users to set a hard location which points to the BIRT plugins, in addition to adding a set of jars to the classpath.  With BIRT 3.7 these concerns have been addressed with a new POJO based runtime.  
</p>
<p>
The new BIRT Runtime consists of a set of jars that can simply be added to the classpath of your application.  While this affects the Runtime of BIRT the designer will continue to use the same approach as previous versions of BIRT.  The new Runtime is available for download on the BIRT web site and is structured as illustrated in the following diagram.
</p>
<img src="images/3.7/newruntime.png"><br>
<i>New BIRT POJO Runtime</i>
<p>
The Runtime contains the ReportEngine which can be used to run and render reports using the Report Engine API (RE API), and the DesignEngine which can be used to create report, library and template designs using the Design Engine API (DE API).  The Runtime also contains the Chart Engine which can be used to build and display charts outside of a BIRT report or to manipulate charts within a design using the Chart Engine API (CE API).  If you have existing code (RE, DE or CE API), no changes should be required, but it is advised to remove the setBirtHome method from your EngineConfig instance.
</p>
<code>
<pre style="font-size: 10pt">
BIRT RE/DE API code
config = new EngineConfig( ); or config = DesignConfig();
config.setBIRTHome("pathtoruntime");
Should be changed to:
config = new EngineConfig( ); or config = DesignConfig();

If you are using the Chart Engine API
PlatformConfig pf = new PlatformConfig();
pf.setBIRTHome("pathtoruntime");
Should be changed to:
PlatformConfig pf = new PlatformConfig();
</pre>
</code>
<p>
You will need to add all the BIRT Jars from the ReportEngine/lib directory to your classpath.  The ReportEngine directory also contains a bat file (genReport.bat) or shell script (genReport.sh) to run reports from the command line using the Report Engine API.  In addition, the Runtime contains a Java EE AJAX based viewer that uses the Report Engine API to run and render reports and supports pagination, table of contents, and exporting to all supported formats.  This viewer is available as a WAR (Birt.war) or in exploded format (WebViewerExample).  Many of the features of the viewer can be customized by modifying JSP fragments and JavaScript files located in the webcontent directory.
</p>
<p>
If you have developed plugins that implement BIRT extension points these should continue to work if you add them to the classpath.  For example, if you have developed an ODA data source extension to access data, or if you have developed an emitter simply add the jar for the exported plugin to your application classpath.  If you are using the viewer, just copy your exported plugin to the viewer/WEB-INF/lib directory.
</p>
<p>
If your reports use connection profiles supplied by the Data Tools Platform project (DTP), you will need to add a system or environment property that specifies a DTP workspace location.  The genReport bat or shell script files show an example of setting this variable.  If you are deploying these reports to the BIRT Viewer you will need to add the system property or set the environment variable in your application server.  More details on this variable are available in the <a href="http://wiki.eclipse.org/DTP_1.9_M7_New_and_Noteworthy">New and Noteworthy for DTP version 1.9</a> 
</p>
<p>
See the <a href="http://wiki.eclipse.org/Birt_3.7_Migration_Guide">BIRT 3.7 Migration Guide</a> for more details.
</p>

<h1><a name="jump_3">Open Office Emitters</a></h1>
<p>
BIRT currently supports emitting report output in many formats.  These include HTML, paginated HTML, DOC, XLS, Postscript, PPT, and PDF formats.    BIRT is designed to be extensible and provides extension points for many components within the designer and runtime.  The emitter framework provides an extension point to allow developers the ability to emit essentially any desired output.  In this release BIRT now provides Open Office support with the inclusion of emitters for Open Document Text (ODT), Open Document Presentation (ODP) and Open Document Spreadsheet (ODS) formats.  These export formats are available within the designer, in the Viewer or by using the Report Engine API.
</p>
<img src="images/3.7/exportmenus.png"><br>
<i>Export Options</i><br><br>

<img src="images/3.7/ods.png"><br>
<i>Open Document Spreadsheet Example</i><br><br>

<img src="images/3.7/odp.png"><br>
<i>Open Document Presentation Example</i><br><br>

<img src="images/3.7/odt.png"><br>
<i>Open Document Text Example</i><br><br>

<h1><a name="jump_4">Hive/Hadoop Driver</a></h1>
<p>
Business Intelligence Tools are only as valuable as the data they can process.  The BIRT project has been designed to facilitate access to as many data sources as possible.  Currently BIRT natively supports Flat File (CSV, SSV, PSV and TSV), JDBC Textual, JDBC Graphical Query Builder, XML, and Web Service data sources.  In addition BIRT provides a Scripted data source which allows the designer to implement custom logic in either Java or JavaScript which retrieves data, effectively allowing anything with a structured format or API to be used as a data source to BIRT.  These data sources can be parameterized and modified using script and can be combined with other data sources using the BIRT Joint Data Set feature.  BIRT also provides extension points that allow developers to implement data sources that can be plugged into the BIRT Designer GUI.  This allows a much more structured approach for retrieving custom data and the implementers of this extension can share their data sources with other developers. 
</p>
<p>
In the 3.7 release, BIRT now provides an extended JDBC driver that allows access to Hadoop Data through Hive using Hive Query Language (HQL).  To use the new driver, select Hive Data Source from the new Data Source Wizard and enter the connection properties.
</p>
<img src="images/3.7/newhiveconnection.png"><br>
<i>New Hive Connection</i><br><br>
<p>
Next select the Manage Drivers button and add the Hive client jars.  Note that this operation only has to be done once for a designer install.
</p>
<img src="images/3.7/hivemanagedrivers.png"><br>
<i>Hive Client Jars</i><br>
<p>
Now you can create a data set with the Hive connection.  If your query is going to use transform statements that make reference to script files you can use the add file statement property of the data source to add files to the Hadoop distributed cache.  This property is just a semi-colon separated list of add file commands.  This property can also be overridden by the data source or dataset, using property binding or script.
</p>
<img src="images/3.7/addfileprop.png"><br>
<i>Hive Add File Property</i><br>
<p>
When creating the query enter the HQL in the text box of the Data Set.
</p>
<img src="images/3.7/hivedataset.png"><br>
<i>Hive Example Query</i><br><br>
<img src="images/3.7/HiveTransformExample.png"><br>
<i>Example Hive Report</i><br><br>


<h1><a name="jump_5">Extensible JDBC Driver</a></h1>
<p>
BIRT consumes the Open Data Access extension points to add data sources to the designer and runtime.  While this feature works very well with new data sources, it is sometimes desirable to extend the JDBC driver to implement custom logic.  This logic may add an ACL to the query, retrieve a connection object from a different location or may optimize the query based on the selected database.  While in previous versions of BIRT this could be done using an ODA driverBridge extension point (see <a href="http://birtworld.blogspot.com/2007/01/birt-connection-pooling-continued.html">BIRT World</a>), this could only be done at runtime.  This feature was not available within the designer.  With the 3.7 release of BIRT users can extend the existing JDBC runtime or implement a driverBridge extension point and the designer (SQL Query textual editor) will call the custom runtime driver logic allowing developers to use the GUI on effective data that will be retrieved at runtime.
</p>
<p>
If you are extending the JDBC driver, start by implementing an org.eclipse.datatools.oda.datasource extension point, and extending from the OdaJdbcDriver class.  Finally implement the methods and extend the classes you wish to change.
</p>
<code>
<pre style="font-size: 10pt">
public class MyDriver extends OdaJdbcDriver
{
	public IConnection getConnection(String connectionClassName) throws OdaException
	{
		return new MyConnection();
	}
.
.

public class MyConnection extends Connection
{
	public void open( Properties connProperties ) throws OdaException
	{
	//custom logic
	}
		
	public IQuery newQuery( String query ) throws OdaException 
	{
		return new MyQuery( this.jdbcConn );
			
	}
}
public class MyQuery extends Statement
{
	public MyQuery( java.sql.Connection connection ) throws OdaException
	{
	//custom logic
	}
		
	public void prepare( String command ) throws OdaException
	{
	//custom logic
	}
	public void close() throws OdaException 
	{
	//custom logic
	}
	public IResultSet executeQuery( ) throws OdaException
	{
	//custom logic
	}
	.
	.
}
</pre>
</code>
<p>
With this change your extended JDBC driver will be called when users enter queries in the JDBC SQL Query textbox within the BIRT Data Set Editor.
</p>
<h1><a name="jump_6">Outline View Improvements</a></h1>
<p>
When designing reports that contain nested report items, selecting individual report items within the Report Editor can be difficult.  To work around this a developer can use the Outline View within the BIRT Report Design Perspective to select a nested item.
</p>
<img src="images/3.7/outline.png"><br>
<i>BIRT Outline View</i><br><br>
<p>
The Outline View has been improved in the BIRT 3.7 release to sync with the XML View of the report design.  By default when selecting the XML View of a report, the file is opened and the file cursor is placed at the top of the design.  Finding a specific item in this view can be difficult.  Now the user can select the report item from the outline and theXML View will automatically place the cursor at the report item location within the XML source.
</p>
<img src="images/3.7/xmlview.png"><br>
<i>Outline to XML View Selection</i><br><br>

<h1><a name="jump_7">SVG to PDF Improvements in WebViewer</a></h1>
<p>
In the 2.6 release of BIRT the Report Engine was modified to support <a href="http://www.eclipse.org/birt/phoenix/project/notable2.6.php#jump_10">native PDF drawing commands</a> when emitting a report that contains an SVG Chart. 
</p>
<p>
With the 3.7 Release of BIRT, the Viewer has been modified to support this change.
</p>

<h1><a name="jump_8">New Emitter Options</a></h1>
<p>
When using the API to construct an instance of the HTMLRenderOption class, the developer has many options for customizing the emitted HTML.  For example, if the user wishes the emitted HTML to contain no BODY or HEAD tags, the setEmbeddable method can be called passing a value of true.
</p>
<code>
<pre style="font-size: 10pt">
		HTMLRenderOption options = new HTMLRenderOption();	
		options.setOutputFileName("output/resample/renderoptions.html");
		options.setOutputFormat("HTML");
		options.setEmbeddable(true);
</pre>
</code>
<p>
This method can be very useful when embedding the output into existing HTML pages.
If the developer desires the emitted HTML to use inline styles the setEnableInlineStyles method can be called.
</p>
<code>
<pre style="font-size: 10pt">
		HTMLRenderOption options = new HTMLRenderOption();	
		options.setOutputFileName("output/resample/renderoptions.html");
		options.setOutputFormat("HTML");
		options.setEnableInlineStyle(true);
</pre>
</code>
<p>
If reports are being developed for mobile devices the VIEWPORT META tag can be set using the following render options.
</p>
<code>
<pre style="font-size: 10pt">
		HTMLRenderOption options = new HTMLRenderOption();	
		options.setOutputFileName("output/resample/renderoptions.html");
		options.setOutputFormat("HTML");
		options.setViewportMeta("width=device-width");
</pre>
</code>
<p>
If you are rendering multiple reports within the same HTML page you can set a prefix that is used when the engine creates CSS style names.  This can be used to prevent style conflicts.
</p>
<code>
<pre style="font-size: 10pt">
		HTMLRenderOption options = new HTMLRenderOption();	
		options.setOutputFileName("output/resample/renderoptions.html");
		options.setOutputFormat("HTML");
		options.setHTMLIDNamespace("mytest");
</pre>
</code>
<p>
This will produce style names in the emitted HTML similar to the following:
</p>
<code>
<pre style="font-size: 10pt">
&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8"&gt;
	&lt;style type="text/css"&gt;
		.mytest_style_2 { font-style: italic; font-size: 10pt; padding-right: 5pt;}
		.mytest_style_3 { background-color: rgb(75, 105, 135);}
</pre>
</code>
<p>
With the release of BIRT 3.7 a few more render options are now available.  To remove line separators and tabs which will produce a much smaller HTML file, the developer can use the following options.
</p>
<code>
<pre style="font-size: 10pt">
		HTMLRenderOption options = new HTMLRenderOption();	
		options.setOutputFileName("output/resample/renderoptions.html");
		options.setOutputFormat("HTML");
		options.setEnableCompactMode(true);
</pre>
</code>
<p>
Developers can now limit the number of pages generated when rendering to PDF by using code similar to the following:
</p>
<code>
<pre style="font-size: 10pt">
		PDFRenderOption options = new PDFRenderOption();
		options.setOption(IPDFRenderOption.PDF_PAGE_LIMIT, 2);
		options.setOutputFileName("output/resample/renderoptions.pdf");
		options.setOutputFormat("pdf");
</pre>		
</code>

<h1><a name="jump_9">Alias and Synonym Table Access</a></h1>
<p>
BIRT currently does not list Alias and Synonym tables within the JDBC Data Source.  With this release, a check box has been added to the JDBC Driver GUI to support listing these tables.
</p>
<img src="images/3.7/showalias.png"><br>
<i>Show Alias Option</i><br><br>

<h1><a name="jump_10">Viewtime-Value-Of with Page Variables</a></h1>
<p>
The Viewtime-Value-Of Text Report Item function was introduced in <a href="http://www.eclipse.org/birt/phoenix/project/notable2.6.php#jump_12">BIRT 2.6</a> and allows a value of a variable to be evaluated at render time as opposed to runtime.  This feature is useful if you wish to show report run times separate from report render times.  In prior releases of BIRT this tag could not be used in conjunction with page variables when rendering to PDF.  Page Variable are described in the <a href="http://www.eclipse.org/birt/phoenix/project/notable2.5.php#jump_4">BIRT 2.5 New and Notable</a> and are usually rendered on the master page of a report.  With this release these page variables can now be rendered in the body of the report using the Viewtime-Value-Of tag within a text element.  For example if you are using page variables to set a group page number you can use the following syntax within a text element to show this page number within the body of a report.
</p>
<code>
<pre style="font-size: 10pt">
&lt;viewtime-value-of&gt;
vars["GROUP_PAGE"]
&lt;/viewtime-value-of&gt;
</pre>
</code>
<p>
Alternatively this syntax can be used:
</p>
<code>
<pre style="font-size: 10pt">
&lt;VIEWTIME-VALUE-OF&gt;
reportContext.getPageVariable("GROUP_PAGE");
&lt;/VIEWTIME-VALUE-OF&gt;
</pre>
</code>
<p>

</p>
<h1><a name="jump_11">Miscellaneous</a></h1>
<p>
In addition to the above changes, the BIRT team has enhanced performance and made concurrency and memory optimizations in many areas of the product.  These changes include reducing memory for reports containing SVG images, eliminating memory consumption within the HTML emitter related to bookmarks, and concurrency issues with reports containing line feeds.
</p>


<br><br>




</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
