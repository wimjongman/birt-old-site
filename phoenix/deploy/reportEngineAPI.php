<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Report Engine API";
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
	require "deploy.inc";
	$currentPage			= "Report Engine API";
	$linkToTop				= linkToTop();
	$deployLinksSideItem  	= getDeployLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

	
<div id="maincontent">
        <div id="midcolumn">



		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#background">Background</a></li>
				<li><a href="#config">Installing the Engine</a></li>
				<li><a href="#jdbc">Configuring JDBC Drivers</a></li>
				<li><a href="#api">API Overview</a></li>
				<li><a href="#engineconfig">EngineConfig</a></li>
				<li><a href="#reportengine">ReportEngine</a></li>
				<li><a href="#ireportrunnable">IReportRunnable</a></li>
				<li><a href="#ireportdocument">IReportDocument</a></li>
				<li><a href="#ienginetask">IEngineTask</a></li>
				<li><a href="#idataextractiontask">IDataExtractionTask</a></li>
				<li><a href="#igetparameterdefinitiontask">IGetParameterDefinitionTask</a></li>
				<li><a href="#irendertask">IRenderTask</a></li>
				<li><a href="#iruntask">IRunTask</a></li>
				<li><a href="#irunandrendertask">IRunAndRenderTask</a></li>
				<li><a href="#miscellaneous">Miscellaneous</a></li>
				<li><a href="#emitterconfiguration">Emitter Configuration</a></li>
				<li><a href="http://wiki.eclipse.org/Integration_Examples_%28BIRT%29">BIRT Wiki RE API Examples</a></li>
			</ul>
		</blockquote>




<h2><a name="background"></a>Background</h2>


The BIRT Report Engine API (RE API) allows you to integrate the run-time part of BIRT
into your application. This may mean integrating into a stand alone Java application,
deploying as part of a servlet or embedding it within an RCP application.
The engine supports the following operations:

<ul>
<li>Discover the set of parameters defined for a report. 
<li>Get the default values for parameters. 
<li>Run a report to produce HTML/Paginated HTML, WORD, XLS, PS, or PDF output. 
<li>Fetch an image or chart for a report. 
<li>Export Report data to CSV
<li>Retrieve TOCs, Bookmarks, etc

</ul>

<p>The report engine supports extensions for custom report items, data access, and custom 
output formats. Extensions are discussed elsewhere. This section will focus on how 
your application integrates with the report engine.
</p>




<h2><a name="config"></a>Installing the Engine</h2>
The first step is to download, install, and configure the BIRT engine. The 
engine is more than just a simple JAR file; it also includes a set of extensions 
(plug-ins), and a set of data drivers.
<br>
<ul>
<li>First download the Report Engine from the <a href="http://download.eclipse.org/birt/downloads">Eclipse download site.</a>
<li>This file will be named birt-runtime-version.zip. 
<li>Unzip this file into a directory, such as c:\birtruntime. 
<li>When you set the Engine Home, which is explained later, use C:/birtruntime/birt-runtime-version/ReportEngine as the value. 
<li>Add the jars in the ReportEngine/lib directory to your classpath/buildpath.
</ul><br>
Note that if you are using the RE API within an RCP/Eclipse application these steps are not needed. Just add the RE API plugins to your application and call the needed functions.
<p>
The BIRT Viewer sample is also bundled with the Report Engine download. It is located under the WebViewerExample directory. If you decide to use this example, see <a href="viewerSetup.php">Viewer Setup</a> for an explanation. 
The Viewer uses the RE API to generate reports within the context of a servlet.  It provides additional features, such as printing, TOCs, Page controls, etc.
Before using the RE API, verify that the Viewer is not applicable to your application.
</p>
<h2>Engine Source</h2>
<p>If you prefer to work directly with the BIRT source code, the Engine API is 
in the <code>org.eclipse.birt.report.engine project</code> within Eclipse CVS
<a href="http://dev.eclipse.org/viewcvs/index.cgi/source/org.eclipse.birt.report.engine/src/org/eclipse/birt/report/engine/api/?cvsroot=BIRT_Project">
Eclipse CVS</a>.  The source is also available from the BIRT site in one package (the BIRT Source Code Package), which can be downloaded from the<a href="http://download.eclipse.org/birt/downloads"> download site.</a></p>

<h2>Javadoc</h2>

<p>This page provides an overview of the engine. To do actual development, 
consult the Engine Javadoc.  These docs are available within BIRT Help.</p>

<h2><a name="jdbc"></a>Configuring JDBC Drivers</h2>
<p>You must configure the engine to include any JDBC drivers that you need.</p>

<p>To do this, copy the driver jar file to the 
 ReportEngineInstall/birt-runtime-version/ReportEngine/plugins/org.eclipse.birt.report.data.oda.jdbc_version/drivers
 Directory.
</p>

<h2><a name="api"></a>API Overview</h2>

<p>The following are the key steps to use the API, identifying the classes and 
interfaces you use for each step.</p>

<ol>
  <li>Create an instance of <code>EngineConfig</code> to set options for the report engine.</li>
  <li>Set the Engine Home and start the Platform (Loads the plug-ins).  If you are using the RE API in plugin format there is no need to set BIRT Home.  If you are using the RE API from within a servlet, be sure to read about PlatformServletContext later on this page.
  <li>Create an instance of the <code>ReportEngine</code> class. You can use this object to 
  perform multiple tasks.</li>
  <li>Open a report design using one of the <code>openReport(&nbsp;)</code> methods of <code>ReportEngine</code>.</li>
  <li>Obtain information about report parameters using 
  <code>IGetParameterDefinitionTask</code>.  This is only needed if you want to build a custom parameter page or collect parameter definition information.  The IRunTask and the IRunAndRenderTask interfaces have methods for setting parameter values.</li>
  <li>Run and render a report using <code>IRunAndRenderReportTask</code> or <code>IRunTask</code> and <code>IRenderTask</code>.</li>
  <li>Repeat steps 4-6 for the next report.</li>
  <li>When done, call <code>shutdown(&nbsp;)</code> on your engine instance.  If using the engine in a servlet shudown the engine when the servlet shuts down.</li>
</ol>

<p>The following sections describe the primary Engine classes in detail. The 
Engine API includes a number of secondary helper classes referenced within each 
description.  The diagram below, serves as an overview of the classes needed to
accomplish a given task.
</p>
</p>

<img src="retask.jpg" /><br/><br/>

</p>


<h2><a name="engineconfig"></a>EngineConfig</h2>

<p>Use the <code>EngineConfig</code> class to set global options for the report engine as a 
whole. Use it to specify the location of engine plug-ins, the location of data 
drivers, and to add application-wide scriptable objects.</p>
<pre style="font-size: 10pt">>
EngineConfig config = new EngineConfig( );
config.setEngineHome( &quot;put engine path here&quot; );
</pre>
<br>The engine home should be set to installedlocation/birt-runtime-version/ReportEngine
when deployed as a stand alone Java Application.  See the <a href="http://wiki.eclipse.org/index.php/BIRT_Report_Engine_API">wiki</a> examples for
Servlet and RCP deployment.
<p>
Other functions of interest within this class are:
<ul>
<li><code>
setLogConfig(String directoryName, Level level)
</code><br>
This call sets the Log directory name and level (OFF, SEVERE, WARNING, INFO, CONFIG, FINE, FINER, FINEST and ALL)
<br> Setting directoryName to null will log to stdout.
</ul>

</p>

<h2><a name="reportengine"></a>ReportEngine</h2>

<p>The <code>ReportEngine</code>&nbsp;class represents the BIRT Report Engine. There is a significant cost associated with creating an engine instance, due 
primarily to the cost of loading extensions. Therefore, each application should 
create just one <code>ReportEngine</code> instance and use it to run multiple reports.
This is important to remember when deploying the engine in a servlet as well.
</p>


<p>The report engine is created through a factory supplied by the Platform.  Before creating the
engine, you should start the Platform, which will load the appropriate plug-ins.  This is done by calling
<code>Platform.startup(config)</code> that takes an 
<code>EngineConfig</code> object as argument. After using the engine, call 
<code>Plaform.shutdown()(&nbsp;)</code> function to do clean up work, which includes unloading the extensions.</p>

<pre style="font-size: 10pt">
try{
	final config = new EngineConfig( );
	config.setEngineHome( "C:\\birt-runtime-2_1_0\\birt-runtime-2_1_0\\ReportEngine" );
	config.setLogConfig(c:/temp, Level.FINE);
			
	Platform.startup( config );  //If using RE API in Eclipse/RCP application this is not needed.
	IReportEngineFactory factory = (IReportEngineFactory) Platform
			.createFactoryObject( IReportEngineFactory.EXTENSION_REPORT_ENGINE_FACTORY );
	IReportEngine engine = factory.createReportEngine( config );
	engine.changeLogLevel( Level.WARNING );
			
}catch( Exception ex){
	ex.printStackTrace();
}
// Run reports, etc.
...

// destroy the engine.
try
{
	engine.destroy();
	Platform.shutdown();    
}
catch ( EngineException e1 )
{
    // Ignore
}</pre>

<p>
Other functions of interest within this class are:
<ul>
<li><code>
engine.changeLogLevel(java.util.logging.Level.FINE);
</code><br>
Change engine log level (OFF, SEVERE, WARNING, INFO, CONFIG, FINE, FINER, FINEST and ALL)
</ul>

</p>




<h2><a name="ireportrunnable"></a>IReportRunnable</h2>


<p>BIRT report designs are stored as XML files.  By default the extension is rptdesign.
<br>
To work with the report design in the engine, you must first load the report using one of the <code>openDesign(&nbsp;)</code> methods in 
the <code>ReportEngine</code> class.</p>
<p>
The report design open methods return a 
<code>IReportRunnable</code> instance that represents the engine's view of the 
report design. </p>


<pre style="font-size: 10pt">
IReportRunnable report = engine.openReportDesign( name );
</pre>

<p>
Note that BIRT supplies many options for opening reports such as the filename or an input stream.


Use the returned object to obtain parameter data or run the report.<br> The class 
provides methods for getting report properties such as the title, author and so 
on. It also provides methods for getting images embedded (stored) within the 
report design. If your application requires more information about the design, you can 
obtain a Design Engine report handle, then use the BIRT <a href="designEngineAPI.php">
Design Engine API</a> to traverse the report design.</p>


<h2><a name="ireportdocument"></a>IReportDocument</h2>


<p>BIRT optionally can store reports in an intermediate format, after generation and before rendering.
This document, with the default extension rptdocument, can be manipulated with the <code>IReportDocument</code> interface.
The Engine will create this document when the <code>runTask</code> is used.  The BIRT viewer uses this
format to do pagination, TOCs, CSV extraction, bookmarks, etc.  When finished with a IReportDocument, be sure to close it, with the close() method.
</p>
<p>The Engine's <code>openDocument</code> method returns a <code>IReportDocument</code> that represents the intermediate report document. 
</p>
<p>
The example below illustrates getting the TOC from the report document, after the runTask is used to generate
the report.
</p>


<pre style="font-size: 10pt">
IReportDocument ird = engine.openReportDocument("c:/work/test/TOCTest.rptdocument");
//get root node
TOCNode td = ird.findTOC(null);
List children = td.getChildren( );
//Loop through Top Level Children
if ( children != null && children.size( ) > 0 )
{
	for ( int i = 0; i < children.size( ); i++ )
	{
		TOCNode child = ( TOCNode ) children.get( i );
		System.out.println( "Node ID " + child.getNodeID());
		System.out.println( "Node Display String " + child.getDisplayString());
		System.out.println( "Node Bookmark " + child.getBookmark());
			
	}
}
</pre>

<h2><a name="ienginetask"></a>IEngineTask</h2>

<p>BIRT reports support scripting. Operations that execute scripts require a 
scripting context. Report operations also require a locale. BIRT Engine tasks 
provide the framework for managing the scripting context, report locales and so 
on. In general, if an operation requires neither a script context nor a locale, 
it will appear as a method on the engine or the report design. However, if the 
operation does require these items, then a task class represents the operation.</p>

<p>For example, opening a design file or retrieving an image in the design file 
does not require setting up a scripting context. Other operations, such as 
retrieving default parameters, retrieving a dynamic selection list, and running 
and rendering a report, all support scripting, require a scripting context, and 
are represented as tasks.</p>

<p>Create tasks using the factory methods on the <code>ReportEngine</code> class.
The supported Tasks are shown below:<br> 
</p>
<ul>
<li><code>
	engine.createDataExtractionTask();
</code>
<li><code>
	engine.createGetParameterDefinitionTask();
</code>
<li><code>
	engine.createRenderTask();
</code>
<li><code>
	engine.createRunTask();
</code>
<li><code>
	engine.createRunAndRenderTask();
</code>
</ul>
<p></p>


<h2><a name="idataextractiontask"></a>IDataExtractionTask</h2>

<p>Use this task to extract data from a report document.  The BIRT viewer uses
this class to extract report data into CSV format.  This class supports extracting
data from the report document by specifying the result set and columns you would
like to have extracted.
<br>
From the Viewer code
</br>
<pre style="font-size: 10pt">
dataTask.selectResultSet( resultSetName );
dataTask.selectColumns( columnNames );
dataTask.setLocale( locale );
</pre>
</p>

<p>
Below is an example that uses the Data Extraction Task to extract the first two columns of data.
</p>
<pre style="font-size: 10pt">
//Open previously created report document
IReportDocument iReportDocument = engine.openReportDocument("c:/work/test/TOCTest.rptdocument");

//Create Data Extraction Task		
IDataExtractionTask iDataExtract = engine.createDataExtractionTask(iReportDocument);

//Get list of result sets		
ArrayList resultSetList = (ArrayList)iDataExtract.getResultSetList( );

//Choose first result set
IResultSetItem resultItem = (IResultSetItem)resultSetList.get( 0 );
String dispName = resultItem.getResultSetName( );
iDataExtract.selectResultSet( dispName );

IExtractionResults iExtractResults = iDataExtract.extract();
IDataIterator iData = null;
try{
	if ( iExtractResults != null )
	{
		iData = iExtractResults.nextResultIterator( );

		//iterate through the results
		if ( iData != null  ){
			while ( iData.next( ) )
			{	
				Object objColumn1;
			    Object objColumn2;
				try{
					objColumn1 = iData.getValue(0);
				}catch(DataException e){
					objColumn1 = new String("");
				}
				try{
					objColumn2 = iData.getValue(1);
				}catch(DataException e){
					objColumn2 = new String("");
				}
					System.out.println( objColumn1 + " , " + objColumn2 );
			}
			iData.close();
		}
	}
}catch( Exception e){
		e.printStackTrace();
}

iDataExtract.close();
</pre>

<h2><a name="igetparameterdefinitiontask"></a>IGetParameterDefinitionTask</h2>

<p>Use this task to obtain information about parameters. Parameter default 
values are expressions, and so a scripting context (represented by the task) is 
required. Parameter definitions provide access to the parameter 
definition information that the report designer entered at design time. If a 
parameter has custom XML or user-defined properties defined, then these are also 
available. Parameters can 
be organized into groups. Your application has the choice of retrieving the 
parameters organized by group (as they should be displayed to the user), or in 
ungrouped form (useful for creating a programmatic interface.)</p>

<p>The <code>IParameterGroupDefn</code> and <code>IScalarParameterDefn</code>
interfaces provide 
information about parameter groups and individual parameters.</p>

<p>
The following example opens a report design and iterates through the parameters and parameter groups.
If a List Box parameter is found, which is not in a group, the selection values are
retrieved.
<pre style="font-size: 10pt">

//Open a report design 
IReportRunnable design = engine.openReportDesign("C:/work/test/parameters.rptdesign"); 
		
IGetParameterDefinitionTask task = engine.createGetParameterDefinitionTask( design );
Collection params = task.getParameterDefns( true );

Iterator iter = params.iterator( );
//Iterate over all parameters
while ( iter.hasNext( ) )
{
	IParameterDefnBase param = (IParameterDefnBase) iter.next( );
	//Group section found
	if ( param instanceof IParameterGroupDefn )
	{
		//Get Group Name
		IParameterGroupDefn group = (IParameterGroupDefn) param;
		System.out.println( "Parameter Group: " + group.getName( ) );
		
		//Get the parameters within a group
		Iterator i2 = group.getContents( ).iterator( );
		while ( i2.hasNext( ) )
		{
			IScalarParameterDefn scalar = (IScalarParameterDefn) i2.next( );
			System.out.println("\t" + scalar.getName());
		}
		        
	}
	else
	{
		//Parameters are not in a group
		IScalarParameterDefn scalar = (IScalarParameterDefn) param;
		System.out.println(param.getName());
		
		//Parameter is a List Box
		if(scalar.getControlType() ==  IScalarParameterDefn.LIST_BOX)
		{
		    Collection selectionList = task.getSelectionList( param.getName() );
		    //Selection contains data    
			if ( selectionList != null )
			{
				for ( Iterator sliter = selectionList.iterator( ); sliter.hasNext( ); )
				{
					//Print out the selection choices
					IParameterSelectionChoice selectionItem = (IParameterSelectionChoice) sliter.next( );
					String value = (String)selectionItem.getValue( );
					String label = selectionItem.getLabel( );
					System.out.println( label + "--" + value);
				}
			}		        
		}   
	}
}
		
task.close();
</pre>

<p>Use the <code>IGetParameterDefinitionTask</code> class to evaluate the default value for a parameter. The parameter 
default value is an expression, and the task provides the required execution 
context.</p>

<pre style="font-size: 10pt">
IScalarParameterDefn param = ...;
IGetParameterDefinitionTask task = ...;
Object value = task.getDefaultValue( param );</pre>


<h2><a name="irendertask"></a>IRenderTask</h2>
<p>Use this task to render a report document to a specific output (eg, HTML, PDF, ...). This task
expects the document to exist, which means it has been generated with the RunTask engine task.
This class renders the report, based on the supplied page range, page number or all if no page is specified.</p>
<p>
The following example renders the first two pages of the "Pages" report document.  You will notice that
it renders the two pages as one page of HTML.
</p>
<pre style="font-size: 10pt">

//Open a report document 
IReportDocument iReportDocument = engine.openReportDocument("c:/work/test/Pages.rptdocument");
//Create Render Task
IRenderTask task = engine.createRenderTask(iReportDocument);
//Set parent classloader report engine
task.getAppContext().put(EngineConstants.APPCONTEXT_CLASSLOADER_KEY, RenderTaskExample.class.getClassLoader()); 

IRenderOption options = new RenderOption();		
options.setOutputFormat("html");
options.setOutputFileName("output/resample/eventorder.html");
	
			
if( options.getOutputFormat().equalsIgnoreCase("html")){
	HTMLRenderOption htmlOptions = new HTMLRenderOption( options);
	htmlOptions.setImageDirectory("output/image");
	htmlOptions.setHtmlPagination(false);
	//set this if you want your image source url to be altered
	//If using the setBaseImageURL, make sure to set image handler to HTMLServerImageHandler
	htmlOptions.setBaseImageURL("http://myhost/prependme?image=");
			
	htmlOptions.setHtmlRtLFlag(false);
	htmlOptions.setEmbeddable(false);
}else if( options.getOutputFormat().equalsIgnoreCase("pdf") ){
			
	PDFRenderOption pdfOptions = new PDFRenderOption( options );
	pdfOptions.setOption( IPDFRenderOption.FIT_TO_PAGE, new Boolean(true) );
	pdfOptions.setOption( IPDFRenderOption.PAGEBREAK_PAGINATION_ONLY, new Boolean(true) );

}
//Use this method if you want to provide your own action handler
options.setActionHandler(new MyActionHandler());

//file based images
//options.setImageHandler(new HTMLCompleteImageHandler())
//Web based images.  Allows setBaseImageURL to prepend to img src tag
options.setImageHandler(new HTMLServerImageHandler());
		
IRenderTask task = engine.createRenderTask(document); 		
task.setRenderOption(options);
task.setPageRange("1-2");
task.render();
iReportDocument.close();

</pre>

<h2><a name="iruntask"></a>IRunTask</h2>
<p>Use this task to run a report and 
generate a report document, which is saved to disk.  The report document can then be used with the
<code>IRenderTask</code> to support features such as paging.</p>
<p>The following example simply creates a report document and saves it to disk.</p>
<pre style="font-size: 10pt">
//Open a report design 
IReportRunnable design = engine.openReportDesign("C:/work/test/MyOrders.rptdesign"); 
		
//Create task to run the report - use the task to execute the report and save to disk.
IRunTask task = engine.createRunTask(design); 
//Set parent classloader for engine
task.getAppContext().put(EngineConstants.APPCONTEXT_CLASSLOADER_KEY, RunTaskExample.class.getClassLoader()); 
					
//run the report and destroy the engine
task.run("c:/work/test/MyOrders.rptdocument");		

task.close();
</pre>


<h2><a name="irunandrendertask"></a>IRunAndRenderTask</h2>
<p>Use this task to run a report and 
output it to one of the supported output formats. This task does not create a report document. Create a new task for each report that you run.</p>

<p>Reports may take parameters. The <code>IRunAndRenderReportTask</code> takes parameter 
values as a <code>HashMap</code> or you can set them individually. The <code>IRunAndRenderReportTask</code> provides 
the <code>validateParameters(&nbsp;)</code> method to validate the parameter values before you run 
the report.</p>


<pre style="font-size: 10pt">

//Open the report design
IReportRunnable design = engine.openReportDesign("Reports/TopNPercent.rptdesign"); 
	

//Create task to run and render the report,
IRunAndRenderTask task = engine.createRunAndRenderTask(design); 
//Set parent classloader for engine
task.getAppContext().put(EngineConstants.APPCONTEXT_CLASSLOADER_KEY, RunAndRenderTaskExample.class.getClassLoader()); 
		
//Set parameter values and validate
task.setParameterValue("Top Percentage", (new Integer(3)));;
task.setParameterValue("Top Count", (new Integer(5)));
task.validateParameters();
				
//Setup rendering to HTML
HTMLRenderOption options = new HTMLRenderOption();		
options.setOutputFileName("output/resample/TopNPercent.html");
options.setOutputFormat("html");
//Setting this to true removes html and body tags
options.setEmbeddable(false);
		
task.setRenderOption(options);
//run and render report
task.run();
task.close();

</pre>

<h2><a name="miscellaneous"></a>Miscellaneous</h2>
<p>Described below are some miscellaneous items that bear mentioning when using the BIRT Report Engine API</p>

<h4>Adding Script Objects</h4>

<p>

BIRT's script engine supports adding Java objects at the API level.  If you wish the
Java object to be available to the Report, retrieve the application context at the EngineConfig or Task level and add the object to the Map.
For example, adding a Java object to the task.
</p>
<p>
Add the following code to your task.
</p>
<pre style="font-size: 10pt">
MyJavaObject jo = new MyJavaObject();
task.getAppContext().put("MyJavaScriptItem", jo);
</pre>
<p>
Now within the the script editor, you can reference your Java Object as follows:
</p>
<pre style="font-size: 10pt">
testMyJavaObject = MyJavaScriptItem.getMyMethod();
</pre>


<h4>Rendering to an Output Stream</h4>
<p>
When rendering a report it may be desirable to output the report to an output stream, such as <code>HttpServletResponse</code>.
To do this modify your RenderOption instance to use <code>setOutputStream</code> instead of <code>setOutputFileName</code>.
For example,
<pre style="font-size: 10pt">
public void webReport( HttpServletResponse response )
{
.
.
.
//Set rendering options 
HTMLRenderOption options = new HTMLRenderOption();
options.setOutputStream(response);
task.setRenderOption(options);		
//run the report
task.run();
}
</pre>

<h4>IPlatformContext - Web Based Plugin Loading</h4>
<p>
By default BIRT loads plug-ins located in the BIRT_HOME/plugins directory.  The plug-ins loaded provide functionality for connecting to data sources,
emitters (eg, PDF, WORD, XLS, HTML ...), and chart rendering.  BIRT_HOME in the examples on this page is set using the setEngineHome method of the <code>EngineConfig</code> class.
BIRT loads these plug-ins using the Java File API.  
</p>
<p>
This method is usually sufficient.  If deployed to a web application, the developer can usually call ServletContext.getRealPath to retrieve the
real path and set the BIRT_HOME accordingly.  This can present a problem when deploying to a war file. Certain application servers will return null
when getRealPath is called.  This will result in the plug-ins not getting loaded.
</p>
<p>
The IPlatformContext interface describes the methods needed to load the resources required by the BIRT runtime.  Within BIRT there are two implementations
of this interface, PlatformFileContext() and PlatformServletContext().  The Platform Context is set using the setEngineContext method of the
<code>EngineConfig</code> class.  If this method is not called it defaults to PlaformFileContext() and uses the Java File API to load the resources.  The 
<code>PlatformServletContext</code> class uses Resource based operations.

So if you are deploying an application to the Web that uses the BIRT API and it is not contained in a war you can use the default and
set your engine home to something similar to:

<pre style="font-size: 10pt">
config.setEngineHome( servletContext.getRealPath("/WEB-INF"));
</pre>
The BIRT Viewer application will load the plug-ins from /WEB-INF/Plugins directory.

If you deploy your application in a war, setup your code like:
<pre style="font-size: 10pt">
//this causes the plug-in loader to look in the current directory.
config.setEngineHome("");
//Using the PlatformServletContext will cause the OSGi loader to look for the
//plug-ins in the WEB-INF/Platform directory.  If this directory
//does not exist create it. 
//Next copy the plug-ins directory from the ReportEngine directory to
//the WEB-INF/Platform/ directory.
IPlatformContext context = new PlatformServletContext( sc );
config.setPlatformContext( context );



</pre>



</p>



<h4>Embedding Report Output</h4>

<p>
If you need to embed your report output into an existing web page you can use the <code>options.setEmbeddable(true);</code> method.
This will remove the &lt;HTML&gt; and &lt;BODY&gt; tags in the generated report.
For example,
<pre style="font-size: 10pt">
public void embedReport( HttpServletResponse response )
{
.
.
.
//Set rendering options 
HTMLRenderOption options = new HTMLRenderOption();
options.setOutputStream(response);
options.setEmbeddable(true);
task.setRenderOption(options);		
//run the report
task.run();
}
</pre>


<h2><a name="emitterconfiguration"></a>Emitter Configuration</h2>
<p>An &quot;emitter&quot; is the component of the report engine that produces output. BIRT provides many emitters such as HTML, XLS and PDF. 
To configure emitter options you need to use the RenderOption class.  In some of the examples above this was done, with
code similar to the following:

<pre style="font-size: 10pt">
IRenderOption options = new RenderOption();		
options.setOutputFormat("html");
options.setOutputFileName("output/resample/eventorder.html");
</pre>
BIRT also provides an extended RenderOption class for the PDF and HTML emitters (PDFRenderOption and HTMLRenderOption).
The PDFRenderOption class provides methods for handling fonts and the HTMLRenderOption class provides methods for
handling images, url encoding, and other html specific settings.
You may need to configure the HTML emitter to manage images.<br>
BIRT supports several image types:</p>

<ul>
  <li>Images referenced using a URL</li>
  <li>Embedded images</li>
  <li>Images created to represent charts</li>
  <li>Images from BLOB types</li>
</ul>

<p>Your application must have a policy for handling images in HTML. URL-based 
images are usually no problem. However, you'll need to handle the others. The 
<code>IHTMLImageHandler</code> interface defines the policy. The BIRT Engine provides two 
default implementations:</p>

<ul>
  <li><code>HTMLCompleteImageHandler</code>: used to write images to disk when rendering a 
  report to produce an HTML file on disk.</li>
  <li><code>HTMLServerImageHandler</code>: used to handle images for an engine running in an 
  app server. This class is used by the BIRT example web viewer.</li>
</ul>
<p>When you instantiate a <code>EngineConfig</code> class the <code>HTMLCompleteImageHandler</code> class is used by default.
Images will be created in your temporary files location (ie C:\Documents and Settings\User\Local Settings\Temp).
If this is not desired you can use the <code>HTMLRenderOption</code> class to change this location.


<pre style="font-size: 10pt">

HTMLRenderOption htmlOptions = new HTMLRenderOption( options);
htmlOptions.setImageDirectory("output/image");
		
   </pre>    
<p>
Setting the Image Directory instructs the RE API to store images, used within the report output, in that directory.
If your emitter is setup with the standard <code>HTMLCompleteImageHandler</code>, the output image src attribute will point to this directory using
the File protocol.  If your emitter is configured with the <code>HTMLServerImageHandler</code>, you can specify an image base URL using the <code>HTMLRenderOption</code> class.  The engine
will prepend all images with this URL in the src attribute of the report output. 
</p> 
<pre style="font-size: 10pt">

HTMLRenderOption options = new HTMLRenderOption();		
options.setOutputFileName("output/resample/TopNPercent.html");
options.setOutputFormat("html");
options.setImageDirectory("C:\\apps\\apache-tomcat-5.5.20\\webapps\\2.2\\images");
options.setBaseImageURL("http://localhost:8080/2.2/images/");		
options.setImageHandler(new HTMLServerImageHandler());
task.setRenderOption(options);
</pre>    
       
<p>You can also create your own implementation of <code>IHTMLImageHandler</code> if the above 
don't meet your needs.</p>

<p>

If your code is going to be run in a servlet, please review the
ReportEngineService.java code in CVS <a href="http://dev.eclipse.org/viewcvs/index.cgi/source/org.eclipse.birt.report.viewer/birt/WEB-INF/classes/org/eclipse/birt/report/services/ReportEngineService.java?rev=HEAD&cvsroot=BIRT_Project&content-type=text/vnd.viewcvs-markup">ReportEngineService.java</a>
The BIRT Viewer uses this class to configure the engine.  The constructor for the ReportEngineService uses the <code>HTMLServerImageHandler</code> class,
which in turn reads Image locations from the web.xml file.
</p>

<br><br>


</div>
	$deployLinksSideItem
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
