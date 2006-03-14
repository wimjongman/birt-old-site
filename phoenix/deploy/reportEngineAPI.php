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

	<div align=LEFT style="padding-left: 185px">
	$deployLinksSideItem


		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#background">Background</a></li>
				<li><a href="#config">Installing the Engine</a></li>
				<li><a href="#jdbc">Configuring JDBC Drivers</a></li>
				<li><a href="#api">API Overview</a></li>
				<li><a href="#simpleexample">Simple Example</a></li>
				<li><a href="#engineconfig">EngineConfig</a></li>
				<li><a href="#reportengine">ReportEngine</a></li>
				<li><a href="#ireportrunnable">IReportRunnable</a></li>
				<li><a href="#ireportdocument">IReportDocument</a></li>
				<li><a href="#ienginetask">IEngineTask</a></li>
				<li><a href="#idataextractiontask">IDataExtractionTask</a></li>
				<li><a href="#idatapreviewtask">IDataPreviewTask</a></li>
				<li><a href="#igetparameterdefinitiontask">IGetParameterDefinitionTask</a></li>
				<li><a href="#irendertask">IRenderTask</a></li>
				<li><a href="#iruntask">IRunTask</a></li>
				<li><a href="#irunandrendertask">IRunAndRenderTask</a></li>
				<li><a href="#miscellaneous">Miscellaneous</a></li>
				<li><a href="#emitterconfiguration">Emitter Configuration</a></li>
				<li><a href="#commonproblems">Common Problems</a></li>	
				
			</ul>
		</blockquote>




<h2><a name="background"></a>Background</h2>


The BIRT Report Engine API allows you to integrate the run-time part of BIRT
into your application. The engine supports the following operations:

<ul>
<li>Discover the set of parameters defined for a report.
<li>Get the default values for parameters.<li>Run a report to produce an HTML or PDF output.
<li>Fetch an image or chart for a report.
</ul>

<p>The report engine supports extensions for custom report items, and for custom 
output formats. Extensions are discussed elsewhere. This article focus on how 
your application integrates with the report engine.
</p>




<h2><a name="config"></a>Installing the Engine</h2>
The first step is to download, install, and configure the BIRT engine. The 
engine is more than just a simple JAR file; it also includes a set of extensions 
(plugins), and a set of data drivers.
<br>
First download the Report Engine from the <a href=http://download.eclipse.org/birt/downloads">Eclipse download site.</a>
<ul>
<li>This file will be named birt-runtime-2_0_1.zip.
<li>Unzip this file into a directory, such as c:\birtruntime.
<li>Copy the iText jar file (see install page for location) to the 
C:\birtruntime\birt-runtime-2_0_1\Report Engine\plugins\org.eclipse.birt.report.engine.emitter.pdf\lib directory.
<li>When you set the Engine Home, which is explained later, use C:/birtruntime/birt-runtime-2_0_1/Report Engine as the value.
</ul>
Some operating systems will have problems with the space in "Report Engine".  
<br><br>
The sample viewer servlet is also bundled with the Report Engine.  It is located under the Web Viewer Example directory.  If you decide to 
use this example, make sure you copy the additional files to the appropriate locations.
<ul>
 <li>Copy itext-1.3.jar to /Web Viewer Example/plugins/org.eclipse.birt.report.engine.pdf/lib.
 <li>Copy prototype.js to /Web Viewer Example/ajax/lib.
 <li>If you are using the birt.war, you will need to extract it and add the above files.
</ul>


<h2>Engine Source</h2>
<p>If you prefer to work directly with the BIRT source code, the Engine API is 
in the <code>org.eclipse.birt.report.engine project</code> within Eclipse CVS
<a href="http://dev.eclipse.org/viewcvs/index.cgi/source/org.eclipse.birt.report.engine/src/org/eclipse/birt/report/engine/api/?cvsroot=BIRT_Project">
Eclipse CVS</a>.</p>

<h2>Javadoc</h2>

<p>This article provides an overview of the engine. To do actual development, 
consult the Engine Javadoc.</p>

<h2><a name="jdbc"></a>Configuring JDBC Drivers</h2>
<p>You must configure the engine to include any JDBC drivers that you need.</p>

<p>To do this, copy the driver jar file to the 
ReportEngineInstall/birt-runtime-2_0_1/Report Engine/plugins/org.eclipse.birt.report.data.oda.jdbc/drivers
directory.
</p>

<h2><a name="api"></a>API Overview</h2>

<p>The following are the key steps to use the API, identifying the classes and 
interfaces you use for each step.</p>

<ol>
  <li>Create an instance of <code>EngineConfig</code> to set options for the report engine.</li>
  <li>Create an instance of the <code>ReportEngine</code> class. You can use this object to 
  perform multiple tasks.</li>
  <li>Open a report design using one of the <code>openReport(&nbsp;)</code> methods of <code>ReportEngine</code>.</li>
  <li>Obtain information about report parameters using 
  <code>IGetParameterDefinitionTask</code>.</li>
  <li>Run and render a report using <code>IRunAndRenderReportTask</code>.</li>
  <li>Repeat steps 3-5 for the next report.</li>
  <li>When done, call <code>destroy(&nbsp;)</code> on your engine instance.</li>
</ol>
<p>
See the <a href="#basic">Simple example</a> below that illustrates these steps.
</p> 

<p>The following sections describe the primary Engine classes in detail. The 
Engine API includes a number of secondary helper classes referenced within each 
description.  The diagram below, serves as an overview of the classes needed to
accomplish a given task.
</p>
</p>

<img src="reportenginetask.jpg" width="834" height="549" /><br/><br/>

</p>


<h2><a name="engineconfig"></a>EngineConfig</h2>

<p>Use the <code>EngineConfig</code> class to set global options for the report engine as a 
whole. Use it to specify the location of engine plugins, the location of data 
drivers, and to add application-wide scriptable objects. At a minimum, you'll 
want to set the location of the engine installation using the <code>setEngineHome(&nbsp;)</code> 
method.</p>
<pre style="font-size: 10pt">>
EngineConfig config = new EngineConfig( );
config.setEngineHome( &quot;put engine path here&quot; );
</pre>
<br>The engine home should be set to
<br>installedlocation/birt-runtime-version/Report Engine
<p>
Other functions of interest within this Class are:
<ul>
<li><code>
setLogConfig(String directoryName, Level level)
</code><br>
This call sets the Log directory name and level (OFF, SEVERE, WARNING, INFO, CONFIG, FINE, FINER, FINEST and ALL)
</ul>

</p>

<h2><a name="reportengine"></a>ReportEngine</h2>

<p>The <code>ReportEngine</code>&nbsp;class represents the BIRT Report Engine. There is a significant cost associated with creating an engine instance, due 
primarily to the cost of loading extensions. Therefore, each application should 
create create just one <code>ReportEngine</code> instance and use it to run multiple reports.</p>
<p>The report engine is created through its constructor that takes an 
<code>EngineConfig</code> object as argument. The configuration object can be null, which 
means to use the default engine configuration. After using the engine, call 
<code>destroy(&nbsp;)</code> to do clean up work, which includes unloading the extensions.</p>

<pre style="font-size: 10pt">
EngineConfig config = new EngineConfig( );
...
ReportEngine engine = new ReportEngine( config );

// Run reports, etc.
...

// Shut down the engine.

try
{
    engine.destroy( );
}
catch ( EngineException e1 )
{
    // Ignore
}</pre>

<p>
Other functions of interest within this Class are:
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
Note that openReportDesign can take a String or an InputStream.


Use the returned object to obtain parameter data or run the report.<br> The class 
provides methods for getting report properties such as the title, author and so 
on. It also provides methods for getting images embedded (stored) within the 
report design. If your application requires more information about the design, you can 
obtain a Design Engine report handle, then use the BIRT <a href="de-api.html">
Design Engine API</a> to traverse though the report design.</p>


<h2><a name="ireportdocument"></a>IReportDocument</h2>


<p>BIRT optionally can store reports in an intermediate format, after generation and before rendering.
This document, with the default extension rptdocument, can be manipulated with the IReportDocument class.
The Engine will create this document when the <code>runTask</code> is used.  The BIRT viewer uses this
format to do pagination, TOCs, CSV extraction, bookmarks, etc.
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
do not require setting up a scripting context. Other operations, such as 
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
	engine.createDataPreviewTask();;
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

<h2><a name="idatapreviewtask"></a>IDataPreviewTask</h2>


<p>Use this task to run Data Sets that exist within the report design.  The following
example opens test.rptdesign and executes the Data Set named "Customers". </p>
<pre style="font-size: 10pt">
//Open a report design  
IReportRunnable design = engine.openReportDesign("c:/work/test/test.rptdesign"); 
		
//Create Data Preview task 
IDataPreviewTask task = engine.createDataPreviewTask(design); 	
//Execute Data Set, returning only 10 rows.  Set binding map to null (We have no data set parameters)
IQueryResults actualResultSet = task.executeDataSet("Customers", 10, null);

try{
	if ( actualResultSet != null )
	{	
		//Iterate through results		  
		Collection col = actualResultSet.getPreparedQuery( ).getReportQueryDefn( ).getRowExpressions( );
		IBaseExpression[] expressions = (IBaseExpression[])col.toArray( new IBaseExpression[col.size( )]);
		IResultIterator iter = actualResultSet.getResultIterator( );
		
		int columnCount = expressions.length;				
		for ( int n = 0; n < columnCount; n++ )
		{
			System.out.print( actualResultSet.getResultMetaData().getColumnName(n+1) + "--" );
		}				
		System.out.println("");
		while ( iter.next( ) )
		{
			for ( int n = 0; n < columnCount; n++ )
			{
				System.out.print( iter.getString( expressions[n] )+ "--" );
			}
			System.out.println("");

		}
		actualResultSet.close( );
	}		
} catch ( BirtException ex ){
	ex.printStackTrace( );
}
</pre>
<h2><a name="igetparameterdefinitiontask"></a>IGetParameterDefinitionTask</h2>

<p>Use this task to obtain information about parameters. Parameter default 
values are expressions, and so a scripting context (represented by the task) is 
required. Parameter definitions provide access to the parameter 
definition information that the report designer entered at design time. If a 
parameter has custom XML or user-defined properties defined, then these are also 
available. Applications typically use the standard and custom properties to 
create a parameter UI that prompts the user for parameter values. Parameters can 
be organized into groups. Your application has the choice of retrieving the 
parameters organized by group (as they should be displayed to the user), or in 
ungrouped form (useful for creating a programmatic interface.)</p>

<p>The <code>IParameterGroupDefn</code> and <code>IScalarParameterDefn</code>
interfaces provide 
information about parameter groups and individual parameters.</p>

<p>
The following example opens a report design and iterates through the parameters and parameter groups.
If a List Box parameter is found, which is not in a group, the selection values are
retieved.
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
<p>Use this task to render a report document to either HTML or PDF. This task
expects the document to exist, which means it has been generated with the <code>IRunTask</code> engine task.
This class renders the report, based on the supplied page range or page number.</p>
<p>
The following example renders the first two pages of the "Pages" report document.  You will notice that
it renders the two pages as one page of HTML.
</p>
<pre style="font-size: 10pt">

//Open a report document 
IReportDocument iReportDocument = engine.openReportDocument("c:/work/test/Pages.rptdocument");
//Create Render Task
IRenderTask task = engine.createRenderTask(iReportDocument);
		
//Set Render context to handle url and image locataions
HTMLRenderContext renderContext = new HTMLRenderContext();
renderContext.setImageDirectory("image");
HashMap contextMap = new HashMap();
contextMap.put( EngineConstants.APPCONTEXT_HTML_RENDER_CONTEXT, renderContext );
task.setAppContext( contextMap );
		
//Set Render Options
HTMLRenderOption options = new HTMLRenderOption();
options.setOutputFileName("c:\\work\\test\\pages.html");
options.setOutputFormat("html");
task.setRenderOption(options);
				
//Render Pages 1-2
task.render("1-2");
task.close();

</pre>

<h2><a name="iruntask"></a>IRunTask</h2>
<p>Use this task to run a report and 
generate a report document, that is saved to disk.  The report document can then be used with the
<code>IRenderTask</code> to support features such as paging.</p>
<p>The following example simply creates a report document and saves it to disk.</p>
<pre style="font-size: 10pt">
//Open a report design 
IReportRunnable design = engine.openReportDesign("C:/work/test/MyOrders.rptdesign"); 
		
//Create task to run the report - use the task to execute the report and save to disk.
IRunTask task = engine.createRunTask(design); 
			
//run the report and destroy the engine
task.run("c:/work/test/MyOrders.rptdocument");		

task.close();
</pre>


<h2><a name="irunandrendertask"></a>IRunAndRenderTask</h2>
<p>Use this task to run a report and 
convert it to either HTML or PDF. This task does not save the report document 
itself to disk. Create a new task for each report that you run.</p>

<p>Reports may take parameters. The <code>IRunAndRenderReportTask</code> takes parameter 
values as a <code>HashMap</code>. The <code>IRunAndRenderReportTask</code> provides 
the <code>validateParameters(&nbsp;)</code> method to validate the parameter values before you run 
the report.</p>

<p>You can produce HTML or PDF output. Set the output format by calling options.setOutputFormat("html) or ("pdf").
If you rendering to PDF, using PDFRenderContext instead of HTMLRenderContext allows manipulation of font information, such as
setting font directory.</p>

<pre style="font-size: 10pt">

//Open a report design - use design to modify design, retrieve embedded images etc. 
IReportRunnable design = engine.openReportDesign("C:/work/test/TopDeals.rptdesign"); 
		
//Create task to run the report and render the report
IRunAndRenderTask task = engine.createRunAndRenderTask(design); 
		
//Set Render context to handle url and image locataions
HTMLRenderContext renderContext = new HTMLRenderContext();
renderContext.setImageDirectory("image");
HashMap contextMap = new HashMap();
contextMap.put( EngineConstants.APPCONTEXT_HTML_RENDER_CONTEXT, renderContext );
task.setAppContext( contextMap );
		
//Set rendering options - such as file or stream output, 
//output format, whether it is embeddable, etc
HTMLRenderOption options = new HTMLRenderOption();
//options.setOutputStream(System.out);
options.setOutputFileName("c:\\work\\test\\pfilter.html");
options.setOutputFormat("html");
task.setRenderOption(options);
		
task.run();

</pre>

<h2><a name="miscellaneous"></a>Miscellaneous</h2>
<p>Described below are some miscellaneous items that bear mentioning when using the BIRT Report Engine API</p>

<h4>Adding Script Objects</h4>

<p>

BIRT's script engine supports adding Java objects at the API level.  If you wish the
Java object to be available to the Report, use the <code>task.addScriptableJavaObject("ScriptName", JavaObjectInstance)</code>
method available to the task.
</p>
<p>
Add the following code to your task.
</p>
<pre style="font-size: 10pt">
MyJavaObject jo = new MyJavaObject();
task.addScriptableJavaObject("MyJavaScriptItem", jo);
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
To do this modify your HTMLRenderOption instance to use <code>setOutputStream</code> instead of <code>setOutputFileName</code>.
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
By default BIRT loads plugins located in the BIRT_HOME/plugins directory.  The plugins loaded provide functionallity for connecting to datasources,
emitters for PDF and HTML, and chart rendering.  BIRT_HOME in the examples on this page is set using the setEngineHome method of the EngineConfig class.
BIRT loads these plugins using the Java File API.  
</p>
<p>
This method is usually sufficient.  If deployed to a web application, the developer can usually call ServletContext.getRealPath to retrieve the
real path and set the BIRT_HOME accordingly.  This can present a problem when deploying to a war file. Certain application servers will return null
when getRealPath is called.  This will result in the plugins not getting loaded.
</p>
<p>
The IPlatformContext interface describes the methods needed to load the resources required by the BIRT runtime.  Within BIRT there are two implementations
of this interface, PlatformFileContext() and PlatformServletContext().  The Platform Context is set using the setEngineContext method of the
EngineConfig class.  If this method is not called it defaults to PlaformFileContext() and uses the Java File API to load the resources.  The 
PlatformServletContext class uses Resource based operations.

So if you are deploying an application to the Web that uses the BIRT API and it is not contained in a war you can use the default and
set your engine home to something similar to:

<pre style="font-size: 10pt">
config.setEngineHome( servletContext.getRealPath("/WEB-INF"));
</pre>
Doing this will result in the Application server looking for the BIRT jars and plugins in the /WEB-INF and /WEB-INF/Plugins directories of
your application ie servletContext.getResourcePaths( ).

If you deploy your application in a war setup your code like:
<pre style="font-size: 10pt">
//this causes the plugin loader to look in the current directory.
config.setEngineHome("");
//URLtoExamine is the location of the plugins directory.
//In the case of the BIRT viewer this would be http://server:port/viewer 
IPlatformContext context = new PlatformServletContext( servletContext, URLtoExamine );
config.setEngineContext( context );
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
<p>An &quot;emitter&quot; is the component of the report engine that produces output. BIRT provides two emitters: HTML and PDF. You'll want to configure the HTML 
emitter to manage images and links. BIRT supports three kinds of images:</p>

<ul>
  <li>Images referenced using a URL</li>
  <li>Embedded images</li>
  <li>Images created to represent charts</li>
</ul>

<p>Your application must have a policy for handling images in HTML. URL-based 
images are usually no problem. However, you'll need to handle the other two. The 
<code>IHTMLImageHandler</code> interface defines the policy. The BIRT Engine provides two 
default implementations:</p>

<ul>
  <li><code>HTMLCompleteImageHandler</code>: used to write images to disk when rendering a 
  report to produce an HTML file on disk.</li>
  <li><code>HTMLServerImageHandler</code>: used to handle images for an engine running in an 
  app server. This class is used by the BIRT web app.</li>
</ul>
<p>When you instantiate a EngineConfig Class the HTMLCompleteImageHandler class is used by default.
Images will be created in your temporary files location (ie C:\Documents and Settings\User\Local Settings\Temp).
If this is not desired you can use the <code>HTMLRenderContext</code> class.

<pre style="font-size: 10pt">

		//Create the HTMLRenderContext Class
		HTMLRenderContext renderContext = new HTMLRenderContext();
		//Set the image directory to be ./image
		renderContext.setImageDirectory("image");
		
		//Set context for the RunAndRender Task
		HashMap contextMap = new HashMap();
		contextMap.put( EngineConstants.APPCONTEXT_HTML_RENDER_CONTEXT, renderContext );
		task.setAppContext( contextMap );

   </pre>    
        
<p>You can also create your own implementation of <code>IHTMLImageHandler</code> if the above 
don't meet your needs.</p>
<p>Here's how to create an emitter configuration and set the image handler:</p>

<pre style="font-size: 10pt">
EngineConfig config = new EngineConfig( );

// Create the emitter configuration.
HTMLEmitterConfig hc = new HTMLEmitterConfig( );

// Use the &quot;HTML complete&quot; image handler to write the files to disk.
HTMLCompleteImageHandler imageHandler = new HTMLCompleteImageHandler( );
hc.setImageHandler( imageHandler );

// Associate the configuration with the HTML output format.
config.setEmitterConfiguration( HTMLRenderOption.OUTPUT_FORMAT_HTML, hc );</pre>

<p>

If your code is going to be run in a servlet, please review the
ReportEngineService.java code in CVS <a href="http://dev.eclipse.org/viewcvs/index.cgi/source/org.eclipse.birt.report.viewer/birt/WEB-INF/classes/org/eclipse/birt/report/services/ReportEngineService.java?rev=HEAD&cvsroot=BIRT_Project&content-type=text/vnd.viewcvs-markup">ReportEngineService.java</a>
The BIRT Viewer uses this Class to configure the engine.  The constructor for the ReportEngineService uses the HTMLServerImageHandler Class,
which in turn reads Image locations from the Web.xml file.
</p>
<pre style="font-size: 10pt">		
	config = new EngineConfig( );
	// Register new image handler
	HTMLEmitterConfig emitterConfig = new HTMLEmitterConfig( );
	emitterConfig.setActionHandler( new HTMLActionHandler( ) );
 	imageHandler = new HTMLServerImageHandler( );
	emitterConfig.setImageHandler( imageHandler );
	config.getEmitterConfigs( ).put( "html", emitterConfig ); 
</pre>
<br><br>

<h2><a name="simpleexample"></a>Simple Example</h2>

A simple example is presented below.<br>
A more complex example can be found <a href="ReportRunner.java">here.</a> This example is from the Engine API Source code.<br>
To build the simple example:
<ul>
<li>Verify that your Engine Home is set correctly.
<li>Set the folder locations for the report design and output HTML file.
<li>Add jar files located in the Report Engine directory (from the Report Engine Download) to the Buildpath/Classpath
</ul>

<pre style="font-size: 10pt">	
import java.util.HashMap;

import org.eclipse.birt.report.engine.api.EngineConfig;
import org.eclipse.birt.report.engine.api.EngineException;
import org.eclipse.birt.report.engine.api.HTMLRenderContext;
import org.eclipse.birt.report.engine.api.HTMLRenderOption;

import org.eclipse.birt.report.engine.api.IReportRunnable;
import org.eclipse.birt.report.engine.api.IRunAndRenderTask;
import org.eclipse.birt.report.engine.api.ReportEngine;
import org.eclipse.birt.report.engine.api.EngineConstants;

public class ExecuteReport {

	static void executeReport() throws EngineException
	{
		//Engine Configuration - set and get temp dir, BIRT home, Servlet context
		EngineConfig config = new EngineConfig();
		config.setEngineHome( <b>"C:/birt-runtime-2_0_1/birt-runtime-2_0_1/Report Engine"</b> );	
        
		//Create the report engine
		ReportEngine engine = new ReportEngine( config );
		
		
		//Open a report design - use design to modify design, retrieve embedded images etc. 
		IReportRunnable design = engine.openReportDesign(<b>"C:/work/test/forecast.rptdesign"</b>); 
		
		//Create task to run the report - use the task to execute and run the report,
		IRunAndRenderTask task = engine.createRunAndRenderTask(design); 
		
		//Set Render context to handle url and image locataions
		HTMLRenderContext renderContext = new HTMLRenderContext();
		renderContext.setImageDirectory("image");
		HashMap contextMap = new HashMap();
		contextMap.put( EngineConstants.APPCONTEXT_HTML_RENDER_CONTEXT, renderContext );
		task.setAppContext( contextMap );
		
		//Set rendering options - such as file or stream output, 
		//output format, whether it is embeddable, etc
		HTMLRenderOption options = new HTMLRenderOption();
		options.setOutputFileName(<b>"c:/work/test/Forecast.html"</b>);
		options.setOutputFormat("html");
		task.setRenderOption(options);
		
		//run the report and destroy the engine
		task.run();
		
		engine.destroy();
	}	
	/**
	 * @param args
	 */
	public static void main(String[] args) {
		try
		{
			executeReport( );
		}
		catch ( Exception e )
		{
			e.printStackTrace();
		}
	}

}
</pre>


<h2><a name="commonproblems"></a>Common Problems</h2>
<ol>
  <li>When running the API you recieve the following error:
  SEVERE: Message:The extension point 
[org.eclipse.birt.report.model.reportItemModel] is not found. Error 
code:EXTENSION_POINT_NOT_FOUND.
<br>
Verify that you have set the Report Engine Home directory.
Verify that you have the 2.0 Report Engine Download.
</ol>


</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
