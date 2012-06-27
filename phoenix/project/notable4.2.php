<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 4.2";
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
				<li><a href="#jump_2">New Donut Chart Type</a></li>
				<li><a href="#jump_3">New Excel Data Source</a></li>
				<li><a href="#jump_4">Maven Support</a></li>				
				<li><a href="#jump_5">Relative File Support</a></li>
				<li><a href="#jump_6">Eclipse 4.2 as Primary Workbench</a></li>				
				<li><a href="#jump_7">*Enhanced Aggregate Filter Support</a></li>
				<li><a href="#jump_8">*Derived Cube Measures</a></li>
				<li><a href="#jump_9">*Relative Time Period Report Item</a></li>
				<li><a href="#jump_10">*OSGi Runtime</a></li>
				<li><a href="#jump_11">*Data Set Cache Control</a></li>
				<li><a href="#jump_12">Miscellaneous</a></li>	
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
In conjunction with the Juno release, the BIRT team is pleased to announce the availability of BIRT 4.2. This document describes some of the new features that are available within the 4.2 release.
</p>
<p>
To review the projects included in the 4.2 release, see <a href="http://www.eclipse.org/projects/project-plan.php?planurl=http://www.eclipse.org/birt/project/plan/birt_project_plan_4_2.xml">the BIRT 4.2 Project Plan</a>.  Some features have also been back-ported to BIRT 3.7.2. These are marked with an asterisk in the feature header in this document.
</p>
<p>
As with all BIRT releases, the BIRT team appreciates your feedback and suggestions.  To get involved in the project take a look at the BIRT community links.
</p>
<h1><a name="jump_2">New Donut Chart Type</a></h1>
<p>
BIRT currently provides an extensive chart engine that can be used standalone or in conjunction with the BIRT designer.  The engine supports fourteen main chart types with many subtypes which can be rendered in many formats, such as SVG, PNG, JPG and BMP.  The engine also supports client side interactivity to allow developers to provide features such as drill to details and multi-hyperlink capabilities.  In addition the chart engine provides a set of extension points that allow developers to create new chart types, complete with custom GUIs that can be plugged into the Chart Designer.  In the Juno release of BIRT, the Pie chart type has been extended to now support an inner radius property that will allow developers to ability to create donut chart types.
</p>
<img src="images/4.2/donutdesign.png"><br>
<i>Donut Chart Design</i>
<p>
The inner radius property can be set as a percentage of the chart or as a specific pixel value.  While the value can be set in the designer, it can also be set in script using a beforeGeneration event handler on the chart similar to the following:
</p>
<code>
<pre style="font-size: 10pt">

		importPackage( Packages.org.eclipse.birt.chart.model.impl );
		importPackage( Packages.org.eclipse.birt.chart.model.type.impl );
	
		if( chart.getClass() == ChartWithoutAxesImpl ){
			seriesDef = chart.getSeriesDefinitions().get(0);
			catRunSeries = seriesDef.getRunTimeSeries();
			valSeriesDef = seriesDef.getSeriesDefinitions().get(0);
			valRunSeries = valSeriesDef.getRunTimeSeries().get(0);
		
			if( valRunSeries.getClass() == PieSeriesImpl ){
				valRunSeries.setInnerRadius( 60 );			
			}
		}

</pre>
</code>
<img src="images/4.2/donutreport.png"><br>
<i>Donut Chart Report</i><br><br>

<h1><a name="jump_3">New Excel Data Source</a></h1>
<p>
As with all information applications, the visualizations are only as good as the data that is analyzed and retrieved.  BIRT is no exception and provides extensive support for retrieving data.  BIRT currently supports drivers for JDBC, XML, Web Services, Flat Files, and Hive.  In addition BIRT also supplies a Scripted Data source that can be implemented in Java or JavaScript that can be used to access virtually any data source that is structured or contains an API.  In this release BIRT has added support for Excel files to be used as a data source.  This new ODA has the following features:
</p>
<ul>
<li>
Supports both XLS and XLSX formats
</li>
<li>
Retrieving the Excel file from an absolute path or a relative path within the resource folder
</li>
<li>
Reading Multiple Sheets within one BIRT Data set
</li>
<li>
Connection Profile support
</li>
<li>
Column name and data type row selectors
</li>
<li>
Date, DateTime and Time support
</li>
</ul>
<img src="images/4.2/excelds.png"><br>
<i>Excel Data Source</i><br><br>
<img src="images/4.2/exceldataset.png"><br>
<i>Excel Data Set</i><br><br>
<p>
The new Excel driver supports multiple worksheets, by specifying the Worksheet property binding setting.
</p>
<img src="images/4.2/worksheets.png"><br>
<i>Worksheet Property</i><br><br>
<img src="images/4.2/exceloutput.png"><br>
<i>Example output</i><br><br>

<h1><a name="jump_4">Maven Support</a></h1>
<p>
While many artifacts from previous versions of BIRT have made it into a Maven repository, with this release of BIRT, the build process has modified to upload releases to the Sonatype repository.  The BIRT runtime artifacts will be uploaded for each release of BIRT and will allow developers to integrate any of the BIRT engines into an existing Java application using Maven.  Example POM entries are shown below.
</p>
<code>
<pre style="font-size: 10pt">
&lt;repository&gt;
    &lt;releases&gt;
      &lt;enabled&gt;false&lt;/enabled&gt;
    &lt;/releases&gt;
    &lt;snapshots&gt;
      &lt;enabled&gt;true&lt;/enabled&gt;
      &lt;updatePolicy&gt;daily&lt;/updatePolicy&gt;
      &lt;checksumPolicy&gt;ignore&lt;/checksumPolicy&gt;
    &lt;/snapshots&gt;
    &lt;id&gt;sonatype-nexus-snapshots&lt;/id&gt;
    &lt;name&gt;Sonatype Nexus Snapshots&lt;/name&gt;
    &lt;url&gt;https://oss.sonatype.org/content/repositories/snapshots&lt;/url&gt;
&lt;/repository&gt;

&lt;repository&gt;
   &lt;releases&gt;
      &lt;enabled&gt;true&lt;/enabled&gt;
   &lt;/releases&gt;
   &lt;snapshots&gt;
      &lt;enabled&gt;false&lt;/enabled&gt;
      &lt;updatePolicy&gt;daily&lt;/updatePolicy&gt;
      &lt;checksumPolicy&gt;ignore&lt;/checksumPolicy&gt;
   &lt;/snapshots&gt;
   &lt;id&gt;sonatype-nexus-releases&lt;/id&gt;
   &lt;name&gt;Sonatype Nexus Snapshots&lt;/name&gt;
   &lt;url&gt;https://oss.sonatype.org/content/repositories/releases&lt;/url&gt;
&lt;/repository&gt;

&lt;dependency&gt;
    &lt;groupId&gt;org.eclipse.birt.runtime.3_7_1&lt;/groupId&gt;
     &lt;artifactId&gt;org.eclipse.birt.runtime&lt;/artifactId&gt;
     &lt;version&gt;3.7.1&lt;/version&gt;
&lt;/dependency&gt;

&lt;dependency&gt;
  &lt;groupId&gt;org.eclipse.birt.runtime&lt;/groupId&gt;
  &lt;artifactId&gt;org.eclipse.birt.runtime&lt;/artifactId&gt;
  &lt;version&gt;4.2.0.v20120605-1006-SNAPSHOT&lt;/version&gt;
&lt;/dependency&gt;  
</pre>
</code>
<br><br>
<h1><a name="jump_5">Relative File Support</a></h1>
<p>
Currently BIRT requires full paths or URLs when using some data sources and connection profiles.  With this release, BIRT now includes relative path support in these cases.  Included are data sources like Flat File and XML as well as connection profiles.  The browse button has been modified in these cases to offer relative or absolute paths.
</p>
<img src="images/4.2/relativepath.png"><br>
<i>Relative File Support</i><br><br>
<p>
When using a relative path, it will be relative to your resource folder.  So in the case shown above the Employee.csv file is a relative file and should exist in your resource folder.  The resource folder can be set in the designer preferences and in the web.xml of the example Viewer. 
</p>
<h1><a name="jump_6">Eclipse 4.2 as Primary Workbench</a></h1>
<p>
With the Juno release of BIRT, Eclipse 4.2 is now the default workbench.  BIRT has been fully built, tested and is supported to run on Eclipse 4.2.  In addition Eclipse 3.8 is still supported.
</p>

<h1><a name="jump_7">*Enhanced Aggregate Filter Support</a></h1>
<p>
The BIRT project currently provides an Aggregation Report Item.  This Report Item supplies over 25 aggregate functions, like SUM, COUNT, TOPN, that can be used to analyze data.  The Aggregation Report Item even provides an extension point to add your own functions.  While this Report Item is very powerful it only aggregates the rows available to it.  If you apply filters to the container element, the Aggregation Item will only aggregate the filtered rows.   This is not always desired.   In some cases users filter rows for display purposes only.  In these cases, consumers of the data may still wish to have the filtered rows aggregated.  To accommodate this feature a check box has been added to the Filter Editor.  This checkbox "Recalculate Totals", determines if aggregates will include the filtered out rows.  If the box is checked the rows will be filtered out of aggregation elements.  If the box is not checked, the filtered out rows will be included.
</p>
<img src="images/4.2/recalccheckbox.png"><br>
<i>Recalculate Checkbox</i><br><br>
<p>
This feature is available on all filter locations, including data sets, tables, crosstabs and charts.  
</p>
<img src="images/4.2/aggtablesandfilters.png"><br>
<i>Table and Crosstab Filter examples</i><br><br>
<img src="images/4.2/aggchart.png"><br>
<i>Chart Filter Examples</i><br><br>
<h1><a name="jump_8">*Derived Cube Measures</a></h1>
<p>
BIRT provides a data cube element which appears in the Data Explorer view and allows the developer to build cubes based on existing data sets. These cubes are constructed using dimensions and measures and can be consumed by crosstab and chart report items.  In prior releases of BIRT when adding measures to the cube the user was restricted to the data set elements and an aggregation function.  With this release, developers can now create derived measures in the cube which use other measures for calculating the new measure.
</p>
<img src="images/4.2/derivedcubemeasure.png"><br>
<i>Derived Cube Measure</i><br><br>
<p>
The Measure Editor has been enhanced to supply a check box to indicate whether the measure is derived.  If the new measure is derived, new options are available in the expression builder to access the existing measures.  For example, in the image above an average price per unit is calculated based on the Amount and Quantity measures.  Once the measure is created it functions in the same fashion as existing measures including totaling capabilities.
</p>
<img src="images/4.2/derivedmeasureexample.png"><br>
<i>Derived Cube Measure consumed by Crosstab</i><br><br>
<h1><a name="jump_9">*Relative Time Period Report Item</a></h1>
<p>
When using crosstabs to display time based data, scripting is often required to implement complex time period calculations.  With this release, BIRT now offers a new report item that will handle time period based calculations automatically when used within a crosstab.    This report item "Relative Time Period" is located in the palette and can be dragged to the measure field of a crosstab.  The new report item can also be placed by right clicking on any measure in an existing crosstab.
</p>
<img src="images/4.2/crosstabrightclick.png"><br>
<i>Insert Relative Time Period Report Item into Crosstab</i><br><br>
<p>
The Relative Time Period report item supports 13 different periods, including Previous N Year, YTD, Current Quarter, Trailing NPeriods, and Next NPeriods.  
</p>
<img src="images/4.2/relativetimeperiodeditor.png"><br>
<i>Relative Time Period Aggregation Builder</i><br><br>
<p>
This report item works very similar to an Aggregation Report item, but allows the aggregation to be grouped on given period(s) in relation to the current time dimension value.  For example the following image depicts a crosstab that contains two measures (Amount and QTY) and two Relative Time Period Report Items (QTY to Date and Previous Qtr). 
</p>
<img src="images/4.2/timeperiodexample.png"><br>
<i>Relative Time Period Example</i><br><br>

<h1><a name="jump_10">*OSGi Runtime</a></h1>
<p>
With the introduction of BIRT 3.7, a new POJO runtime was delivered to help ease deploying of BIRT.  While the new runtime is simpler in most cases some users prefer the OSGi based runtime.  With this release the OSGi runtime is also available for download.  To download the OSGi based runtime select the "full BIRT {Version} Download Page" link from the main BIRT downloads page.
</p>
<img src="images/4.2/birtdownloadpage.png"><br>
<i>BIRT Download Page</i><br><br>
<p>
On the full download page select the Report Engine OSGi deployment link to download.
</p>
<img src="images/4.2/osgiruntimedownload.png"><br>
<i>BIRT OSGi runtime link</i><br><br>

<h1><a name="jump_11">*Data Set Cache Control</a></h1>
<p>
BIRT makes extensive use of caching to improve performance when generating reports.  Generally when a data set is bound to more than one report item, the data set will be cached so multiple queries for the same data are not executed.  If a query is using a parameter and the value of the parameter changes the query will be re-executed.  While this is probably the most desired approach, it is often the case that users want to re-execute the query for each bound report item instance.  This generally happens when a developer is using a filter on a nested report item to control what is displayed based on an outer table value or when the user is modifying the query of a report item using a beforeOpen script on the dataset.  With this release of BIRT, it is now possible to configure whether the data engine caches a data set.  In the advanced settings for all data sets a new option has been added.  This options "Needs cache for data-engine" determines if the data set will be cached.  By default this value is true, meaning the data engine will cache the dataset.  If you set the value to false the data set will be re-executed for each bound item instance.
</p>
<img src="images/4.2/needscache.png"><br>
<i>BIRT Data Set Cache Control Setting</i><br><br>

<h1><a name="jump_12">Miscellaneous</a></h1>
<p>
In addition to the above changes, BIRT now provides extension points for connection profile encryption and enforcing file extensions on connection profiles.  Also improvements have been made to the process for retrieving a JNDI connection, default parameter with dynamic datasets, font path configuration with the BIRT engine, variable template location and support for EFS. 
</p>


<br><br>




</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
