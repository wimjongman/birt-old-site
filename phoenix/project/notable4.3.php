<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 4.3";
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
				<li><a href="#jump_2">New Microsoft Office Emitters</a></li>
				<li><a href="#jump_3">New POJO Data Source</a></li>
				<li><a href="#jump_4">*New Cassandra Scripted Data Source</a></li>
				<li><a href="#jump_5">New MongoDB Data Source</a></li>
				<li><a href="#jump_6">Easy Client-Side JavaScript Library Inclusion</a></li>
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
In conjunction with the Kepler release, the BIRT team is pleased to announce the availability of BIRT 4.3. This document describes some of the new features that are available within the 4.3 release.
</p>
<p>
To review the projects included in the 4.3 release, see <a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/birt/project/plan/birt_project_plan_4_3.xml">the BIRT 4.3 Project Plan</a>.  Some features have also been back-ported to BIRT 4.2.2. These are marked with an asterisk in the feature header in this document.
</p>
<p>
As with all BIRT releases, the BIRT team appreciates your feedback and suggestions.  To get involved in the project take a look at the BIRT community links.
</p>
<h1><a name="jump_2">New Microsoft Office Emitters</a></h1>
<p>
BIRT currently supports emitting report output in many formats. These include HTML, paginated HTML, DOC, XLS, Postscript, PPT, PDF, ODP, ODS, and ODT formats. BIRT is designed to be extensible and provides extension points for many components within the designer and runtime. The emitter framework provides an extension point to allow developers the ability to emit essentially any desired output. In this release BIRT will offer enhancements to all three of the Microsoft Office emitters.<br><br>

For PowerPoint and Word, support for Office 2010 has been added with the inclusion of emitters for DOCX and PPTX formats.  For Excel, the popular SpudSoft Excel Emitters were added to BIRT which includes emitters for both XLS, named XLS_SPUDSOFT as the standard XLS emitter will remain, and XLSX. The new XLS & XLSX emitters are able to output pictures, which means charts can now be seen in your Excel export. These emitters will also give a more Excel-like output rather than trying to make the Excel output look like the HTML, meaning no merging of cells.  Multiple sheets are also an option with the new XLS & XLSX emitters.<br><br>

All of the above export formats are available within the designer, in the viewer, or by using the Report Engine API.
</p>
<img src="images/4.3/BIRTEmitters_4.3.png"><br>
<i>Export Options</i><br><br>
<img src="images/4.3/PPTX_4.3.png"><br>
<i>PPTX</i><br><br>
<img src="images/4.3/DOCX_4.3.png"><br>
<i>DOCX</i><br><br>
<img src="images/4.3/Excel_4.3.png"><br>
<i>XLS/XLSX</i><br><br>


<h1><a name="jump_3">New POJO Data Source</a></h1>
<p>
As with all information applications, the visualizations are only as good as the data that is analyzed and retrieved.  BIRT is no exception and provides extensive support for retrieving data.  BIRT currently supports drivers for JDBC, XML, Web Services, Flat Files, and Hive.  In addition, BIRT also supplies a Scripted Data source that can be implemented in Java or JavaScript that can be used to access virtually any data source that is structured or contains an API.  In the past, when you wanted to connect to a POJO (plain old Java object), the scripted data source is the one you would use.  In this release BIRT has added support for POJOs to be used as a data source making using this type of source easier than ever.<br><br>

With a couple classes like these:
</p>

<img src="images/4.3/CustomerDatasetJava_4.3.png"><br>
<i>CustomerDataset.java</i><br><br>
<img src="images/4.3/CustomersJava_4.3.png"><br>
<i>Customers.java</i><br><br>
<p>
You would create a POJO data source/set by following these steps:<br><br>

Create a new data source, selecting the POJO type.<br>
Then, hit next and add your POJO jar file so BIRT can locate your class files.
</p>
<img src="images/4.3/POJODataSourceAddJar_4.3.png"><br><br>
<p>Test your connection and then select finish.<br><br>

Next, we create a new data set using our POJO data source and choose our CustomerDataset.java class.</p>
<img src="images/4.3/POJODataSetRuntimeProperties_4.3.png"><br><br>
<p>Then, select the column mapping class used to define the data set columns and hit next.</p>
<img src="images/4.3/POJODataSetClassStructure_4.3.png"><br><br>
<p>Select the columns that you want to include in your data set.</p>
<img src="images/4.3/POJODataSetColumnMappings_4.3.png"><br><br>
<p>Finally, hit finish and preview your results.</p>
<img src="images/4.3/POJODataSetResultSet_4.3.png"><br><br>

<h1><a name="jump_4">*New Cassandra Scripted Data Source</a></h1>
<p>
BIRT 4.2.2 and later supports scripted data source connections for use with Cassandra distributions, including:<br>
<ul>
<li>Apache Cassandra</li>
<li>Datastax Cassandra Community</li>
<li>Datastax Cassandra Enterprise</li>
</ul>
BIRT connects to and queries a Cassandra data source using the Hector API. You must copy the Hector client library JAR files to the appropriate folders for both BIRT Designer and the BIRT runtime deployment application. You can download the JAR files from <a href="https://github.com/hector-client/hector/downloads">here</a>.<br><br>For the designer, copy the JARs into the <Eclipse>/plugins/org.eclipse.birt.me.prettyprint.hector_version/lib/ directory.  Depending on the runtime type you're using, you'll place the jars in different locations.  For OSGi BIRT runtime deployment, copy the JAR files to the <Eclipse>/plugins/org.eclipse.birt.me.prettyprint.hector_version/lib/ folder and restart the runtime deployment application. If the "Servlet ViewerServlet is not available" error message appears, copy the org.apache.commons.logging_version.jar (available in WEB-INF/platform/plugins/) to the birt/WEB-INF/lib/ folder. This is a known issue with tomcat-6. For non-OSGi BIRT runtime deployment, copy the JAR files to the <installation_folder>/webapps/birt_runtime/scriptlib/ folder and restart the runtime deployment application.<br><br>

With the Hector jars copied in, you can now create your data source by selecting the Cassandra Scripted Data Source data source type and clicking finish.  Then, create your Scripted Data Set by creating a new data set using the scripted data source and then defining your fields.  Now that you've created your data set, you can now write your script.  To get started with this, select your data set in the Data Explorer and then the Script tab under the design layout window.
</p>
<img src="images/4.3/CassandraScriptedDataSet_4.3.png"><br><br>
<p>
Now, you just need to connect to your data using the open script function and then map your data to your rows you defined in the fetch script.  To test your data set, open the data set and choose the preview results.
</p>

<h1><a name="jump_5">New Mongo DB Data Source</a></h1>
<p>
The BIRT project has been designed to facilitate access to as many data sources as possible. Currently BIRT natively supports Flat File (CSV, SSV, PSV and TSV), JDBC Textual, JDBC Graphical Query Builder, XML, and Web Service data sources. This project provides the ability for BIRT developers to access data contained in MongoDB, a popular NoSQL repository.<br><br>

To create a MongoDB data set, follow these steps:<br><br>

First, choose to create a new data source and choose the MongoDB Data Source and hit next.  Then, you'll input your connection information, test your connection, and hit finish.
</p>
<img src="images/4.3/MongoDBODAConnection_4.3.png"><br><br>
<p>
Now that you have your source set up, you'll use it to create a new data set.  In the data set wizard, select the mongoDB data source and hit next.  Then, choose the collection you wish to use and select your fields.  You can also set up command operations for MapReduce, Aggregate, or Run Database Command.
</p>
<img src="images/4.3/MongoDBDataSet_4.3.png"><br><br>
<p>
Once you've selected the fields you want and set up your desired command operations, hit finish and preview your results.
</p>
<img src="images/4.3/MongoDBPreviewResults_4.3.png"><br><br>

<h1><a name="jump_6">Easy Client-Side JavaScript Library Inclusion</a></h1>
<p>
BIRT 4.3 introduces the use of head.js to allow for easy inclusion of JavaScript libraries.  To use this feature simply go to the script tab after selecting an empty spot in your report.  When here, choose "clientScripts" from the drop down.
</p>
<img src="images/4.3/JSLoaderClientScripts_4.3.png"><br><br>
<p>
Here you'll write a head.js script to load your JavaScript libraries.  The head.js call uses the format head.js(file1,file2,...,[callback]);  This will look something like the following:
</p>
<img src="images/4.3/JSLoaderClientInitialize_4.3.png"><br><br>
<p>
In a HTML text box in your report layout, you'll write your script that uses the JavaScript library you've included.  Using head.js's head.ready() function to run your script after all the JavaScript libraries have been loaded will look something like this:
</p>
<img src="images/4.3/JSLoaderHTMLTextScript_4.3.png"><br><br>
<p>
Once completed, you can run your report and see the easy client-side use of your external JavaScript library.
</p>
<img src="images/4.3/JSLoaderOutput_4.3.png"><br>
<br><br>




</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
