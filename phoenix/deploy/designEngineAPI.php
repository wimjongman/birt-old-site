<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Design Engine API";
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
	$currentPage			= "Design Engine API";
	$linkToTop				= linkToTop();
	$deployLinksSideItem  	= getDeployLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
			<ul>
				<li><a href="#concepts">Concepts</a></li>
				<li><a href="#services">API Services</a></li>
				<li><a href="#sdk">DEAPI SDK</a></li>
				<li><a href="#example">Example</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/BIRT_Design_Engine_API">BIRT Wiki DE API Examples</a></li>
				<li><a href="#add">Additional Resources</a></li>				
			</ul>
		</blockquote>

		<h2><a name="concepts"></a>Concepts</h2>

<div class="homeitem3col">
<h3>Birt POJO Runtime Note: </h3>
<ul>
 If you are installing BIRT 3.7 or later See <a href="http://wiki.eclipse.org/Birt_3.7_Migration_Guide">BIRT 3.7 Migration Guide</a>.<br>
 It is no longer necessary to set BIRT Home in the DesignConfig class.  Just add the BIRT jars to your classpath/buildpath.
 </ul>
</div>

		<p>
			A report design consist of three key concepts:
		</p>
		<ul class="midlist">
			<li>
				Elements
				<br>
				An "object" within the design such as the report itself, a data set, a style, a table, a label, etc.
			</li>
			<li>
				Property
				<br>
				Properties customize an element. For example, a data set has a name and a
				query. A style has CSS-like style properties. A label has style properties and
				display text. Properties further divide into <i>property definitions</i>
				provided by BIRT's Report Object Model (ROM), and <i>property values</i> set by
				you as you create a report design.
			</li>
			<li>
				Slots
				<br>
				A slot describes how elements assemble to form a report. A slot is a place
				where one element can contain other elements. For example, a report has slots
				for data sources, data sets, styles and the report body. A table has slots for
				the header, detail, footer and groups.
			</li>
		</ul>

		<h2><a name="services"></a>API Services</h2>
		<p>
			The BIRT Design Engine API (DEAPI) provides a number of services to applications that work with report designs:
		</p>
		<ul class="midlist">
			<li>
				Create report designs
			</li>
			<li>
				Read and write report design files
			</li>
			<li>
				Create and delete report elements
			</li>
			<li>
				Put report elements into a slot, or move them from slot to slot
			</li>
			<li>
				Get and set the value of parameters
			</li>
			<li>
				Retrieve metadata about report elements, properties and slots
			</li>
			<li>
				Support undo/redo of changes
			</li>
			<li>
				Perform semantic checks of report designs
			</li>
		</ul>


		<h2><a name="sdk">DEAPI SDK</a></h2>
		<p>
			To create an application that uses the DEAPI, you'll need the design engine SDK.
		</p>
		<p>
			At present, you'll need to download the project source code and build the Javadoc yourself. In time, the Javadoc will be available as part of a BIRT download.
			The model Jar is available as part of the runtime download.
		</p>
		<ul class="midlist">
			<li>
				See the <a href="/birt/phoenix/build/buildInstructions.php">BIRT build instructions</a> for information on how to access CVS and build the code. You only need to build the model and core projects.
			</li>
			<li>
				If you don't have access to CVS, you can also obtain the code from the web interface to the <a href="http://dev.eclipse.org/viewcvs/index.cgi/source/org.eclipse.birt.report.model/?cvsroot=BIRT_Project"> org.eclipse.birt.report.model</a> project.
			</li>
		</ul>
		<p>
			This API is described in Javadoc in the <code>org.eclipse.birt.report.model.api</code>
			package within the <code>org.eclipse.birt.report.model project</code>. Read the package
			overview for general information about getting started with this API.
		</p>


		<h2><a name="example">Example</a></h2>
		<p>
			The following code shows a simple example that creates a working report design. Here are the files you'll need:
		</p>
		<ul class="midlist">
			<li>
				<a href="/birt/phoenix/deploy/DeDemo.java" target="_new">Sample Java code</a>
			</li>
			<li>
				<a href="/birt/phoenix/deploy/sample.rptdesign" target="_new">Report produced by the example</a>
			</li>
			<li>
				<a href="/birt/phoenix/deploy/sample.html" target="_new">HTML output of the above report</a>
			</li>
		</ul>
		<p>
			The first step is to create an instance of the design engine.
		</p>
		<blockquote>
			SessionHandle session = DesignEngine.newSession( null );
		</blockquote>
		<p>
			Then, create a new report design.
		</p>
		<blockquote>
			ReportDesignHandle design = session.createDesign( );
		</blockquote>
		<p>
			Next, get the "element factory" that creates new elements within your design:
		</p>
		<blockquote>
			ElementFactory factory = design.getElementFactory( );
		</blockquote>
		<p>
			Next, we add a page master that determines how the report will appear when printed:
		</p>
		<blockquote>
			DesignElementHandle element = factory.newSimpleMasterPage( "Page Master" );<br>
			design.getMasterPages( ).add( element );
		</blockquote>
		<p>
			This design will contain a grid that contains an image and a label. Let's first create the grid and add it to the report's body slot.
		</p>
		<blockquote>
			GridHandle grid = factory.newGridItem( null, 2 /* cols */, 1 /* row */ );<br>
			design.getBody( ).add( grid );<br>
			grid.setWidth( "100%" );
		</blockquote>
		<p>
			Next, create the image and add it to the first cell within the grid.
		</p>
		<blockquote>
			RowHandle row = (RowHandle) grid.getRows( ).get( 0 );<br>
			ImageHandle image = factory.newImage( null );<br>
			CellHandle cell = (CellHandle) row.getCells( ).get( 0 );<br>
			cell.getContent( ).add( image );<br>
			image.setURI( "http://www.eclipse.org/birt/phoenix/tutorial/multichip-4.jpg");
		</blockquote>
		<p>
			Then, create a label and add it to the second cell.
		</p>
		<blockquote>
			LabelHandle label = factory.newLabel( null );<br>
			cell = (CellHandle) row.getCells( ).get( 1 );<br>
			cell.getContent( ).add( label );<br>
			label.setText( "Hello, world!" );<br>
		</blockquote>
		<p>
			Finally, save and close the report design.
		</p>
		<blockquote>
			design.saveAs( "sample.rptdesign" );<br>
			design.close( );
		</blockquote>
		<p>
			You can now open the design within BIRT and preview it.
		</p>
<h2><a name="add"></a>Additional Resources</h2>
<p>
Several Examples, PPT files and Webinars are available on BIRT-Exchange
<li><a href="http://www.birt-exchange.com/be/info/designengineapi-websem/">Design Engine API Webinar</a></li>
<li><a href="http://www.birt-exchange.org/org/devshare/deploying-birt-reports/1344-eclipsecon-2011-api-examples/">Design Engine API Examples</a></li>
<li><a href="http://www.birt-exchange.org/org/devshare/?topicid=0&filtercontent=de+api&contenttype=&timeperiod=0&results=10">Design Engine API Examples in BIRT-Exchange DevShare</a></li>

</p>
	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
