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
		$metaTitle 		= "Documentation";
		$metaKeywords	= "Eclipse,BIRT,Java,Java EE,Web,RCP,Data,Visualization,Reports,Reporting,Embed,Rich-Client,Dashboards";
		$metaAuthor		= "";
		$metaDescription = "BIRT is an open source technology platform used to create data visualizations and reports that can be embedded into rich client and web applications.";
		$ogTitle		= "Eclipse BIRT Project Home";
		$ogImage		= "http://www.eclipse.org/birt/img/logo/Birt-logo.png";
		$ogDescription  = "BIRT is an open source technology platform used to create data visualizations and reports that can be embedded into rich client and web applications.";
		
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
					<h1 class="eclipse-title-main">Integrating BIRT</h1>
					
					<div class="topic-menu topic-menu-right">
                
		                <div class="topic-menu-title">Section Contents</div>
		                <ul>
		                    <li><a href="/birt/documentation/install.php">Installation Guide</a></li>
		                    <li><a href="/birt/documentation/tutorial/">Design Tutorial</a></li>
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
		                    <li><a href="/birt/documentation/sample-database.php">Sample Database</a></li>
		                    <li><a href="/birt/documentation/reference.php">Technical Reference</a></li>
		                    <li><a href="/birt/documentation/building-birt.php">Building BIRT</a></li>
		           		</ul>

			        </div>

					<h2 class="topic-section-header padding-top-small">Concepts</h2>
					<h3>Birt POJO Runtime Note: </h3>
					<p>If you are installing BIRT 3.7 or later See <a href="http://wiki.eclipse.org/Birt_3.7_Migration_Guide">BIRT 3.7 Migration Guide</a>.<br />
					It is no longer necessary to set BIRT Home in the DesignConfig class. Just add the BIRT jars to your classpath/buildpath.</p>
					
					<p>A report design consist of three key concepts:
					<ul class="eclipse-list">
						<li>Elements<br />
						An "object" within the design such as the report itself, a data set, a style, a table, a label, etc.</li><br />
						<li>Property<br />
						Properties customize an element. For example, a data set has a name and a query. A style has CSS-like style properties. A label has style properties and display text. Properties further divide into <i>property definitions</i> provided by BIRT's Report Object Model (ROM), and <i>property values</i> set by you as you create a report design.</li><br />
						<li>Slots<br />
						A slot describes how elements assemble to form a report. A slot is a place where one element can contain other elements. For example, a report has slots for data sources, data sets, styles and the report body. A table has slots for	the header, detail, footer and groups.</li>
					</ul>
					</p>
					
					<h2 class="topic-section-header padding-top-small">API Services</h2>
					<p>The BIRT Design Engine API (DEAPI) provides a number of services to applications that work with report designs:
					<ul class="eclipse-list">
						<li>Create report designs</li><br />
						<li>Read and write report design files</li><br />
						<li>Create and delete report elements</li><br />
						<li>Put report elements into a slot, or move them from slot to slot</li><br />
						<li>Get and set the value of parameters</li><br />
						<li>Retrieve metadata about report elements, properties and slots</li><br />
						<li>Support undo/redo of changes</li><br />
						<li>Perform semantic checks of report designs</li>
					</ul>
					
					<h2 class="topic-section-header padding-top-small">DEAPI SDK</h2>
					<p>To create an application that uses the DEAPI, you'll need the design engine SDK.</p>
					<p>At present, you'll need to download the project source code and build the Javadoc yourself. In time, the Javadoc will be available as part of a BIRT download. The model Jar is available as part of the runtime download.
					<ul class="eclipse-list">
						<li>See the <a href="/birt/documentation/building-birt.php">BIRT build instructions</a> for information on how to access CVS and build the code. You only need to build the model and core projects.</li><br />
						<li>If you don't have access to CVS, you can also obtain the code from the web interface to the <a href="http://dev.eclipse.org/viewcvs/index.cgi/source/org.eclipse.birt.report.model/?cvsroot=BIRT_Project"> org.eclipse.birt.report.model</a> project.</li>
					</ul>
					</p>
					<p>This API is described in Javadoc in the <code>org.eclipse.birt.report.model.api</code> package within the <code>org.eclipse.birt.report.model project</code>. Read the package overview for general information about getting started with this API.</p>
					
					<h2 class="topic-section-header padding-top-small">Example</h2>
					<p>The following code shows a simple example that creates a working report design. Here are the files you'll need:
					<ul class="eclipse-list">
						<li><a href="/birt/resources/documentation/integrating/DeDemo.java" target="_new">Sample Java code</a></li><br />
						<li><a href="/birt/resources/documentation/integrating/sample.rptdesign" target="_new">Report produced by the example</a></li><br />
						<li><a href="/birt/resources/documentation/integrating/sample.html" target="_new">HTML output of the above report</a></li>
					</ul>
					</p>
					<p>The first step is to create an instance of the design engine.</p>
					<blockquote>
					SessionHandle session = DesignEngine.newSession( null );
					</blockquote>
					
					<p>Then, create a new report design.</p>
					<blockquote>
					ReportDesignHandle design = session.createDesign( );
					</blockquote>
					
					<p>Next, get the "element factory" that creates new elements within your design:</p>
					<blockquote>
					ElementFactory factory = design.getElementFactory( );
					</blockquote>
					
					<p>Next, we add a page master that determines how the report will appear when printed:</p>
					<blockquote>
					DesignElementHandle element = factory.newSimpleMasterPage( "Page Master" );<br />
					design.getMasterPages( ).add( element );
					</blockquote>
					
					<p>This design will contain a grid that contains an image and a label. Let's first create the grid and add it to the report's body slot.</p>
					<blockquote>
					GridHandle grid = factory.newGridItem( null, 2 /* cols */, 1 /* row */ );<br />
					design.getBody( ).add( grid );<br />
					grid.setWidth( "100%" );
					</blockquote>
					
					<p>Next, create the image and add it to the first cell within the grid.</p>
					<blockquote>
					RowHandle row = (RowHandle) grid.getRows( ).get( 0 );<br />
					ImageHandle image = factory.newImage( null );<br />
					CellHandle cell = (CellHandle) row.getCells( ).get( 0 );<br />
					cell.getContent( ).add( image );<br />
					image.setURI( "http://www.eclipse.org/birt/resources/documentation/tutorial/multichip-4.jpg");
					</blockquote>
					
					<p>Then, create a label and add it to the second cell.</p>
					<blockquote>
					LabelHandle label = factory.newLabel( null );<br />
					cell = (CellHandle) row.getCells( ).get( 1 );<br />
					cell.getContent( ).add( label );<br />
					label.setText( "Hello, world!" );<br />
					</blockquote>
					
					<p>Finally, save and close the report design.</p>
					<blockquote>
					design.saveAs( "sample.rptdesign" );<br />
					design.close( );
					</blockquote>
					
					<p>You can now open the design within BIRT and preview it.</p>
					
					<h2 class="topic-section-header padding-top-small">Additional Resources</h2>
					<p>Several Examples, PPT files and Webinars are available on BIRT-Exchange:
					<ul class="eclipse-list">
						<li><a href="http://www.birt-exchange.org/org/devshare/designing-birt-reports/978-webinar-archive-using-the-birt-design-engine-apis/">Design Engine API Webinar</a></li><br />
						<li><a href="http://www.birt-exchange.org/org/devshare/deploying-birt-reports/1344-eclipsecon-2011-api-examples/">Design Engine API Examples</a></li><br />
						<li><a href="http://www.birt-exchange.org/org/devshare/?topicid=0&filtercontent=de+api&contenttype=&timeperiod=0&results=10">Design Engine API Examples in BIRT-Exchange DevShare</a></li>
					</ul>
					</p>

					
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