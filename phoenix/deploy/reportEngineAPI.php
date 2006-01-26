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
				<li><a href="#installing">Installing the API</a></li>
				<li><a href="#config">Installing the Engine</a></li>
				<li><a href="#jdbc">Configuring JDBC Drivers</a></li>
				<li><a href="#api">API Overview</a></li>
				<li><a href="#example">Example Application</a></li>
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

<h2><a name="installing"></a>Installing the API</h2>

The first step is to download, install, and configure the BIRT engine. The 
engine is more than just a simple JAR file; it also includes a set of extensions 
(plugins), and a set of data drivers.

<h3>Engine Download</h3>
<p> The standalone <a href="http://download.eclipse.org/birt/downloads/">BIRT Report Engine</a> is now available for download.
Within this download are several examples on how to use the Report Engine, Chart Engine and
the Viewer.<br>
</p>

<h3>Engine Source</h3>
<p>If you prefer to work directly with the BIRT source code, the Engine API is 
in the <code>org.eclipse.birt.report.engine project</code> within Eclipse CVS in
<code><a href="http://dev.eclipse.org/viewcvs/index.cgi/source/org.eclipse.birt.report.engine/src/org/eclipse/birt/report/engine/api/?cvsroot=BIRT_Project">
source/org.eclipse.birt.report.engine/src/org/eclipse/birt/report/engine/api</a></code>.</p>

<h3>Javadoc</h3>

<p>This article provides an overview of the engine. To do actual development, 
consult the Engine Javadoc.</p>

<h2><a name="config"></a>Installing the Engine</h2>
First download the Report Engine from the <a href=http://download.eclipse.org/birt/downloads">Eclipse download site.</a>
This file will be named birt-runtime-2_0_0.zip.
Unzip this file into a directory, such as c:\birtruntime.
Copy the iText jar file (see install page for location) to the 
C:\birtruntime\birt-runtime-2_0_0\Report Engine\plugins\org.eclipse.birt.report.engine.emitter.pdf\lib directory.
When you set the Engine Home, which is explained later, use C:/birtruntime/birt-runtime-2_0_0/Report Engine as the value.
Some operating systems will have problems with the space in "Report Engine".  Rename it if needed.

The sample viewer is also bundled with the Report Engine.  It is located under the Web Viewer Example directory.  If you decide to 
use this example, make sure you copy the additional files to the appropriate location.
<ul>
 <li>Copy itext-1.3.jar to /Web Viewer Example/plugins/org.eclipse.birt.report.engine.pdf/lib.
 <li>Copy prototype.js to /Web Viewer Example/ajax/lib.
 <li>Copy Axis jars to the /Web Viewer Example/WEB-INF/lib
 <li>If you are using the birt.war, you will need to extract it and add the above files.
</ul>

<h2><a name="jdbc"></a>Configuring JDBC Drivers</h2>
<p>You must configure the engine to include any JDBC drivers that you need.</p>


<p>The report engine uses the Eclipse plugin mechanism for managing extensions. 
One of those extensions is a bridge between BIRT and JDBC implemented using the 
BIRT Open Data Access (ODA) framework. JDBC drivers are defined in the <code>plugin.xml</code> 
file for the JDBC extension: <code><i>ENGINE-HOME</i>/plugins/org.eclipse.birt.report.data.oda.jdbc_version/plugin.xml</code>.
Use any text editor to edit the configuration file. Add an entry such as the one 
shown in bold below.</p>

<pre class="code-block">&lt;runtime&gt;
  &lt;library name=&quot;oda-jdbc.jar&quot;&gt;
    &lt;export name=&quot;*&quot;/&gt;
  &lt;/library&gt;
  <b>&lt;library name=&quot;lib/<i>driver_name</i>.jar&quot;&gt;
    &lt;export name=&quot;*&quot;/&gt;
  &lt;/library&gt;</b>
&lt;/runtime&gt;
</pre>

  <p>Where <i>driver_name</i> is the name of your JDBC driver JAR. Add another <code>&lt;LibraryName></code> element for each 
additional JDBC driver JAR file that might be needed. Put the library itself 
  into the lib directory: <code><i>ENGINE-HOME</i>/plugins/org.eclipse.birt.report.data.oda.jdbc_version/lib.</code></p>
  <p>More information about the ODA runtime driver extension point schema can be 
  found in CVS BIRT source tree: <code>org.eclipse.birt.data.oda/schema/odaDriverRuntime.exsd</code>. 
  Use the Eclipse PDE Tools to see its reference document.</p>

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

<p>The following sections describe the primary Engine classes in detail. The 
Engine API includes a number of secondary helper classes referenced within each 
description.</p>

<h3><code>EngineConfig</code> Class</h3>

<p>Use the <code>EngineConfig</code> class to set global options for the report engine as a 
whole. Use it to specify the location of engine plugins, the location of data 
drivers, and to add application-wide scriptable objects. At a minimum, you'll 
want to set the location of the engine installation using the <code>setEngineHome(&nbsp;)</code> 
method.</p>
<pre class="code-block">EngineConfig config = new EngineConfig( );
config.setEngineHome( &quot;put engine path here&quot; );</pre>
The engine home should be set to
installedlocation/birt-runtime-version/Report Engine


<h3>Emitter Configuration</h3>

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

<p>You can also create your own implementation of <code>IHTMLImageHandler</code> if the above 
don't meet your needs.</p>

<p>Here's how to create an emitter configuration and set the image handler:</p>

<pre class="code-block">EngineConfig config = new EngineConfig( );

// Create the emitter configuration.

HTMLEmitterConfig hc = new HTMLEmitterConfig( );

// Use the &quot;HTML complete&quot; image handler to write the files to disk.

HTMLCompleteImageHandler imageHandler = new HTMLCompleteImageHandler( );
hc.setImageHandler( imageHandler );

// Associate the configuration with the HTML output format.

config.setEmitterConfiguration( HTMLRenderOption.OUTPUT_FORMAT_HTML, hc );</pre>


<h3><code>ReportEngine</code> Class</h3>

<p>The <code>ReportEngine</code>&nbsp; class represents the BIRT Report Engine. There is a significant cost associated with creating an engine instance, due 
primarily to the cost of loading extensions. Therefore, each application should 
create create just one <code>ReportEngine</code> instance and use it to run multiple reports.</p>
<p>The report engine is created through its constructor that takes an 
<code>EngineConfig</code> object as argument. The configuration object can be null, which 
means to use the default engine configuration. After using the engine, call 
<code>destroy(&nbsp;)</code> to do clean up work, which includes unloading the extensions.</p>

<pre class="code-block">EngineConfig config = new EngineConfig( );
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


<h3><code>IReportRunnable</code> Class</h3>


<p>BIRT reports are stored as an XML file. To work with the report in the 
engine, you must first load the report using one of the <code>openDesign(&nbsp;)</code> methods in 
the <code>ReportEngine</code> class. These methods return an 
<code>IReportRunnable</code> instance that represents the engine's view of the 
report design. </p>

<pre class="code-block">IReportRunnable report = engine.openReportDesign( name );</pre>

<p>Use this object to obtain parameter data or run the report. The class 
provides methods for getting report properties such as the title, author and so 
on. It also provides methods for getting images embedded (stored) within the 
report design. If your application requires more information about the design, you can 
obtain a Design Engine report handle, then use the BIRT <a href="de-api.html">
Design Engine API</a> to traverse though the report design.</p>

<h3><code>IEngineTask</code> Abstract Base Class</h3>

<p>BIRT reports support scripting. Operations that execute scripts require a 
scripting context. Report operations also require a locale. BIRT Engine tasks 
provide the framework for managing the scripting context, report locales and so 
on. In general, if an operation requires neither a script context nor a locale, 
it will appear as a method on the engine or the report design. However, if the 
operation does 
require these items; then the operation is represented by a task class.</p>

<p>For example, opening a design file or retrieving an image in the design file 
do not require setting up a scripting context. Other operations, such as 
retrieving default parameters, retrieving a dynamic selection list, and running 
and rendering a report, all support scripting, require a scripting context, and 
are represented as tasks.</p>

<p>Create tasks using the factory methods on the <code>ReportEngine</code> class. Each task 
takes a report runnable (design), a scripting context, a locale, and other 
information.</p>

<h3><code>IGetParameterDefinitionTask</code> Class</h3>

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

<pre class="code-block">// Get the parameter definitions

IGetParameterDefinitionTask task = engine.createGetParameterDefinitionTask( report );
Collection params = task.getParameterDefns( true );

// The collection contains parameters and parameter groups.

Iterator iter = params.iterator( );
while ( iter.hasNext( ) )
{
    IParameterDefnBase param = (IParameterDefnBase) iter.next( );
    if ( param instanceof IParameterGroupDefn )
    {
        IParameterGroupDefn group = (IParameterGroupDefn) param;

        // Do something with the parameter group.
        // Iterate over group contents.

        Iterator i2 = group.getContents( ).iterator( );
        while ( iter.hasNext( ) )
        {
            IScalarParameterDefn scalar = (IScalarParameterDefn) i2.next( );
            
            // Do something with a parameter within a group.
    }
    else
    {
        IScalarParameterDefn scalar = (IScalarParameterDefn) i2.next( );

        // Do something with a top-level parameter.
    }
}</pre>

<p>Use the <code>IGetParameterDefinitionTask</code> class to evaluate the default value for a parameter. The parameter 
default value is an expression, and the task provides the required execution 
context.</p>

<pre class="code-block">IScalarParameterDefn param = ...;
IGetParameterDefinitionTask task = ...;
Object value = task.getDefaultValue( param );</pre>

<h3><code>IRunAndRenderReportTask</code> Class</h3>
<p>Use this task to run a report and 
convert it to either HTML or PDF. This task does not save the report document 
itself to disk. Create a new task for each report that you run.</p>

<p class="caution"><span class="caution-head">Release 1.0.1  Note:</span> BIRT 1.0 
supports the ability to run a report and to directly produce HTML or PDF. Later 
versions will allow the ability to save the report document to disk for later 
use. At that time, BIRT will provide other tasks to run the report, then later 
to render a saved report document.
</p>

<p>Reports may take parameters. The <code>IRunAndRenderReportTask</code> takes parameter 
values as a <code>HashMap</code>. The <code>IRunAndRenderReportTask</code> provides 
the <code>validateParameters(&nbsp;)</code> method to validate the parameter values before you run 
the report.</p>

<p>You can produce HTML or PDF output. Each format offers a distinct set of 
options. These options are set through the <code>HTMLRenderOption</code> and 
<code>PDFRenderOption</code> 
classes. Create the one for the output format you desire, set the options you 
need, and pass the instance to <code>IRunAndRenderReportTask</code> before running the 
report.</p>

<pre class="code-block">// Create the task

IRunAndRenderTask task = engine.createRunAndRenderTask( report );

// Set up options for HTML output.

HTMLRenderOption options = new HTMLRenderOption( );
options.setOutputFormat( HTMLRenderOption.OUTPUT_FORMAT_HTML );
options.setOutputFileName( outputName );
task.setRenderOption( options );

// Set parameter values using a HashMap. Parameters are name/value pairs.
// The values must be Java objects of the correct type.

HashMap params = new HashMap( );
... 
task.setParameterValues( params );

// Run the report.

task.run( );</pre>

<h2><a name="example"></a>Example Application</h2>


The best way to learn about the engine API is to look at a sample application. 
This sample is a command-line application that takes a report design and can 
either print parameter information about the design (-i option), or run and render the 
report (-h option for HTML, -p option for PDF). When running, the utility takes a set of parameter values, and accepts 
an output format. The application illustrates the major steps you should follow 
in your own application.<p><a href="RunReport.java">Download the sample 
application</a>.</p>
<a href="birtengine.zip">Download the sample 
application Ant project</a>.
The Ant project has a readme.txt explaining which files need to be copied.
<p>To run a <a href="test.rptdesign">sample report </a>to HTML, setting the 
&quot;sample&quot; parameter to the value &quot;Hello&quot;:</p>
<pre class="code-block">java RunReport test.rptdesign -h sample=Hello</pre>
<p>To get information about the report properties and parameter definitions:</p>
<pre class="code-block">java RunReport test.rptdesign -i</pre>
This example has not been updated to reflect 2.0 changes yet.
ReportRunner.java is delivered as part of the Engine API and offers a more complex example.
You can check it out of CVS or download BIRT 2.0's version <a=href="ReportRunner.java">here</a>.


	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
