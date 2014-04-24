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
					<h1 class="eclipse-title-main">Integrating BIRT</h1>
					
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
					
					<h2 class="topic-section-header padding-top-small">Background</h2>
					<p>BIRT provides a rich scripting model based on the Mozilla Rhino engine. The processes that the Report engine uses to create reports can be classified in two phases, Report Generation and Presentation. The Generation phase consumes the report design and creates an intermediate file, called the report document. The Presentation phase uses the report document to render to HTML or PDF. The report creation pipeline can execute these phases as one task or in two task. If executed in one phase the report document is created in memory. This is the default behavior of the designer when "Preview as HTML" is chosen. If executed in two phases the report document is created and stored to disk. This is the default behavior of the designer when "Preview in Web Viewer" is selected.</p>
					<p>Events within each phase can be overridden, by creating event handlers, to alter report content. BIRT allows these event handlers to be written in either JavaScript or Java. If you code your event handler in both Java and JavaScript the JavaScript version will be executed by default.</p>
					<img src="/birt/test/img/documentation/integrating/overview.jpg" /><br/><br/>
					
					<h2 class="topic-section-header padding-top-small">Events</h2>
					<p>Script events are defined for three objects, Report Object, Report Elements, and Data Source(Sets). The phase the engine is processing determines what events and which properties of the object are available for customization. The diagram below illustrates what Script Events are available in a particular phase, for a given object.</p>
					<img src="/birt/test/img/documentation/integrating/events.jpg" />
					<p>Pictured below is a representation of the event firing order for a simple report containing a table and a data element. The event order is shown for separate generation and presentation phases.<br><br>
					Generation phase.</p>
					<img src="/birt/test/img/documentation/integrating/eventgen.jpg" />
					<p>Presentation phase.</p>
					<img src="/birt/test/img/documentation/integrating/eventpres.jpg" />
					
					<h2 class="topic-section-header padding-top-small">reportContext and this</h2>
					<p>Selecting the Palette view while in the Script editor will display functions and variables that are available in the given event for the selected report element. For example the screenshot below is for the onCreate event handler of a data element.</p>
					<img src="/birt/test/img/documentation/integrating/palette.jpg"/>
					<p>Using the <b><font color="purple">this</font></b> operator list available methods and properties for the element in the given event and is used to view or alter styles, values etc. See examples illustrated later.</p>
					<p>Use of reportContext allows accessing or modifying of report wide properties. Using reportContext a developer can set global variables to share between elements. For example:
					<pre style="font-size: 10pt">
					onInitialize of the report
					reportContext.setPersistentGlobalVariable("testglobal", "test global string");
					</pre>
					use of the Persistent version allows the variable to be persisted across generation and presentation. Also note that the variable is an Object type allowing greater flexibility.
					<pre style="font-size: 10pt">
					onPrepare of a label element in a table
					this.text = reportContext.getPersistentGlobalVariable('testglobal');
					</pre>
					This global variable can be assigned to a data element using the binding editor. Simply reference the variable in the expression builder for the desired column. For example, if a column exist in the binding editor that retrieves a string from a data base, you could append your global variable to the value by entering the following expression:
					<pre style="font-size: 10pt">
					dataSetRow["MyString"] + "-" + reportContext.getPersistentGlobalVariable('testglobal');
					</pre>
					<br />
					The reportContext also allows access to session variables.
					<pre style="font-size: 10pt">
					//attributeBean is a Birt Viewer supplied session variable
					myAttributeBean = reportContext.getHttpServletRequest().getAttribute('attributeBean');
					reportDoc = myAttributeBean.getReportDocumentName( );
					this.text = reportDoc;
					</pre>
					The reportContext allows reading and modifying the context for use within scripts.  For example:
					<pre style="font-size: 10pt">
					onInitialize of the report
					appContext = reportContext.getAppContext();
					importPackage(Packages.java.util)
					myArrList = new ArrayList();
					myArrList.add("one");
					myArrList.add("two");
					appContext.put("AppContextTest", myArrList);
					</pre>
					This loads the current application context and modifies it for later use.
					Within a label element's onPrepare event handler, it could then be used as follows:
					<pre style="font-size: 10pt">
					appContext = reportContext.getAppContext();
					myObject = appContext.get("AppContextTest");
					this.text = myObject.size();
					</pre>
					The above example could have also been implemented using:
					<pre style="font-size: 10pt">
					reportContext.setPersistentGlobalVariable("testglobal", myArrList);
					</pre>
					The reportContext can also be used to retrieve the current locale and messages stored within a resource file.
					</p>
					
					<h2 class="topic-section-header padding-top-small">Report Level Events</h2>
					<ul class="eclipse-list">
						<li>afterFactory - The afterFactory event executes upon terminating the generation phase.</li><br />
						<li>afterRender - The afterRender event executes at the end of the presentation phase.</li><br />
						<li>beforeFactory - The beforeFactory event executes prior to beginning the generation phase.</li><br />
						<li>beforeRender - The beforeRender event executes just prior to beginning the presentation phase.</li><br />
						<li>initialize - A script that executes before the report begins to execute in both the generation or presentation phase.</li>
					</ul>
					<p>Within the initialize event you can define global functions, variables and objects. For example to create a global JavaScript function:
					<pre style="font-size: 10pt">
					function gTest(v){
					      return "Global Function:" + v;
					}
					//this line is only required if using the function within Chart Scripts
					reportContext.setPersistentGlobalVariable("gTest", gTest);
					</pre>
					To use this function just call
					<pre style="font-size: 10pt">
					gTest("MyTest");
					or
					gTest = reportContext.getPersistentGlobalVariable("gTest");
					val = gTest("Use Persistent");
					</pre>
					To access the reportContext object within a chart script use the following:
					<pre style="font-size: 10pt">
					context.getExternalContext().getScriptable()
					</pre>
					To illustrate, the chart title could be altered with the following chart script:
					<pre style="font-size: 10pt">
					function beforeGeneration( chart, context ){
						importPackage(Packages.org.eclipse.birt.chart.model.type.impl);
						newChartTitle = context.getExternalContext().getScriptable().getPersistentGlobalVariable("testglobal");
						chart.getTitle().getLabel().getCaption().setValue(newChartTitle);
					}
					</pre>
					
					In the beforeFactory event there are several methods that allow accessing elements within the report. The elements usually require a name.  For example, using a Data Set named "orders", I want to display the query that was executed in a dynamic text element named "TestHeader". This can be achieved by entering the following script in beforeFactory
					<pre style="font-size: 10pt">
					query = this.getDataSet("orders").queryText
					this.getDynamicText("TestHeader").valueExpr = "query;";
					</pre>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Report Element Events</h2>
					<p>
					<ul class="eclipse-list">
						<li>onPrepare: This event gets called in the report generation phase. It is called once for each report element in the design. This is an opportunity to change the element design. The changes will affect all instances of the element, i.e. all table rows.</li><br />
						<li>onCreate: Also a generation phase event. Here, the instance of the element can be modified and accessed. For example, an instance of a table row might be changed (setting every 10th rows background to red for example).</li><br />
						<li>onRender: Presentation phase event. Similar to onCreate in that the instance is modifiable. Access to data is not available.</li>
					</ul>
					</p>
					
					<p>
					Here is a very simple scripting example for a detail row in a table:
					<pre style="font-size: 10pt">
					onPrepare:
					this.getStyle().backgroundColor = "red";//This would change all row instances
		
					onCreate:
					if (this.getRowData().getExpressionValue(3) > 100)
					this.getStyle().backgroundColor="red";//This will only change the row instance
					
					For a table with 100 rows, onPrepare will be called once (to change the 
					design), and onCreate and onRender will be called 100 times (to change the 
					instance).
					</pre>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Report Element Event Examples</h2>
					
					<h4>Setting Label, Text, Dynamic Text and Data Element values</h4>
					<p>Setting the value of a label element can be achieved by writting an event handler for the onPrepare or onCreate event and entering similar code presented below:
					<pre style="font-size: 10pt">
					this.text = "My New Label"
					</pre>
					Obviously this is a simple example and the value could be set simply by double clicking on the text element.  Using the JavaScript editor allows complex logic to be implemented.<br />
					Setting the value of a text element can be done in the onPrepare event by entering the following code in your event handler:
					<pre style="font-size: 10pt">
					this.content= = "My New Text"
					</pre>
					
					When setting the value of a dynamic text element you will need to specify a value expression.  This value expression gets evaluated when generating the report. Creating an event handler for the onPrepare event allows changing the value expression.
					<pre style="font-size: 10pt">
					this.valueExpr = "row['CITY']";
					</pre>
					It is important to note that valueExpr expects a string. This is similar to what you would enter in the Expression Builder, but wrapped in quotes. So if you want to enter a string or partial string use single quotes.<br />
					
					<pre style="font-size: 10pt">
					this.valueExpr = this.valueExpr = "'my row count: ' + (row[0] + 1)";
					</pre>
					Setting values for data elements is accomplished by using the binding editor. If you wish to change this value in script you can set the value in the binding editor to a JavaScript variable. This variable can then be changed within script. If you use this method remember that order of execution is important. Changing the variable after the element is created will not change the data element value.
					</p>
					
					<h4>Setting TOC Entries in Script</h4>
					<p>The TOC expression is similar to value expressions in that it expects a string.<br /><br />
					
					<pre style="font-size: 10pt">
					this.tocExpression=this.tocExpression = "'tocbyrownumber: ' + row[0]";
					</pre>
					</p>
					
					<h4>Using row data within scripts</h4>
					<p>
					Row data is available in the onCreate event. This allows you to examine the values that will be used on the current row of a table or list.<br /><br />
					
					<pre style="font-size: 10pt">
					this.getRowData().getExpressionValue(int) 
					</pre>
					
					should give you the value of the expression in the i:th column in your table.<br /><br />
					<pre style="font-size: 10pt">
					this.getRowData().getExpressionValue("some_expression") 
					</pre>
					
					should give you the value of the provided expression for the row. This expression has to be defined on the table.<br /><br />
					
					Examples:
					<pre style="font-size: 10pt">
					Table(2 columns):
					row["product"]    |    row["price"]
					
					Result:
					product1    |    $20
					product2    |    $30
					
					Script on row.onCreate:
					if (this.getRowData().getExpressionValue(1) == "product1")
					    this.getStyle().backgroundColor = "red";
					    
					if (this.getRowData().getExpressionValue("row[price]") == "$30")
					    this.getStyle().backgroundColor = "blue";
					</pre>
					Result of script:<br /><br />
					
					First row should be red, second row should be blue. Remember that the the expressions are the ones defined on the table using the binding editor, not the dataset.  Using the row[name] syntax corresponds to the name field defined in the binding editor.</p>
					
					<h4>Modifying Hyperlinks</h4>
					<p>
					The hyperlink for a data element can be modified in the onPrepare by using code similar to:<br /><br />
					
					<pre style="font-size: 10pt">
					this.getAction().URI = "'http://www.google.com'";
					</pre>
					Notice the single quotes within the double quotes.</p>
					
					<h4>Using getStyle</h4>
					<p>Using the getStyle method allows customizing properties for a given element.</p>
					<p><img src="/birt/test/img/documentation/integrating/getStyle.jpg" />
					</p>
					<p>for example to bold a particular element:</p>
					<pre style="font-size: 10pt">
					this.getStyle().fontWeight = "bold";
					</pre>
					
					<h4>Using getParent</h4>
					<p>The getParent method allows access  to elements that contain the element you are currently working with. If you were scripting an onPrepare event handler for a table row, getParent would return a handle to the table. If you were scripting an onPrepare event handler for a data element, to access the table you will need to call getParent several times.
					<pre style="font-size: 10pt">
					this.getParent().getParent().getParent()
					
					This corresponds to 
					dataElement->Cell->Row->Table
					</pre>
					So to change the color of the table background from a data element would look like this:<br /><br />
					<pre style="font-size: 10pt">
					this.getParent().getParent().getParent().getStyle().backgroundColor = "Silver";
					</pre>
					</p>
					
					<h4>Using getValue</h4>
					<p>Often it is required to alter the visual appearance of an element based on its value.  This can be usually done within the mapping or highlights tab. When more complex logic is required it can be accomplished by using the getValue method within the onCreate of a row or data element.</p>
					<p>On the data element<br /><br />
					<pre style="font-size: 10pt">
					if( this.getValue() > 30 ){
						this.getStyle().fontFamily = "Arial"
						this.getStyle().backgroundColor = "Yellow"
					}
					
					on the row
					if (this.getRowData().getExpressionValue("row[QtyOrdered]") > 30){
						this.getStyle().fontFamily = "Arial"
						this.getStyle().backgroundColor = "Yellow"
					}
					</pre>
					
					<h4>Using Named Expressions</h4>
					<p>A named expression is an expression that is created on an element and given a name. The expression definition can be edited in onPrepare, and the value of the evaluated expression can be accessed in onCreate and onRender. These are often useful when scripting in Java and use of a function like Total is needed. For example a named expression my be defined as totalCreditValue and it's value set to Total.sum(row[“CREDITLIMIT”]). The named expression would then be available to other elements in JavaScript as well as Java.<br />
					So if you define a Named Expression on a table named 'RWC' and set it's value to row[0], you would access it on the row like:<br /><br />
					<pre style="font-size: 10pt">
					rc = this.parent.getNamedExpressionValue("RWC");
					</pre>
					
					</p>
					
					<h2 class="topic-section-header padding-top-small">Report Data Source(Set) Events</h2>
					
					<p>The events available with Data Source and Data Sets will depend on the type of source that is being used.
					
					<h4>Data Source Events</h4>
					The common events for the Data Source are:
					<ul class="eclipse-list">
						<li>afterClose - A script that executes after BIRT closes the data source connection.</li><br />
						<li>afterOpen - A script that executes after BIRT opens the data source connection for data access.</li><br />
						<li>beforeClose - A script that executes before BIRT closes the data source connection.</li><br />
						<li>beforeOpen - A script that executes before BIRT opens the data source connection for data access.</li>
					</ul>
					If you are building a Scripted Data Source, two additional events are available:
					<ul class="eclipse-list">
						<li>Open - A script that executes to open the Data Source.</li><br />
						<li>Close - A script that executes to close the Data Source.</li>
					</ul>
					With the property binding editor now available, setting properties using script is not always necessary. An example of setting the password for the Data Source is as follows:<br /><br />
					
					<pre style="font-size: 10pt">
					Data Source beforeOpen 
					currentPassword = this.getExtensionProperty("odaPassword");
					DataSourceClass = new Packages.myExternalSecurity();
					this.setExtensionProperty("odaPassword", DataSourceClass.getPassword());
					</pre>
					
					<h4>Data Set Events</h4>
					The common events for the Data Sets are:
					<ul class="eclipse-list">
						<li>afterClose - A script that executes after BIRT closes the data set.</li><br />
						<li>afterOpen - A script that executes after BIRT opens the data set.</li><br />
						<li>beforeClose  - A script that executes before BIRT closes the data set.</li><br />
						<li>beforeOpen - A script that executes before BIRT opens the data set.</li><br />
						<li>onFetch - A script that executes after fetching each row and before applying filters or calculating computed fields</li>
					</ul>
					If you are building a Scripted Data Source, four additional events are available:
					<ul class="eclipse-list">
						<li>describe - A script that is used to create the columns of a Scripted Data Source dynamically.</li><br />
						<li>open  - A script that executes upon opening the data set.</li><br />
						<li>close  - A script that executes after the fetch event returns false.</li><br />
						<li>fetch  - A script that executes to retrieve the data.</li>
					</ul>
					
					With the property binding editor now available, setting Data Set properties can usually be done in the properites editor.<br />
					An example of changing the query with JavaScript is presented below.<br /><br />
					<pre style="font-size: 10pt">
					beforeOpen of the Data Set
					this.queryText = "SELECT * FROM Customers where CustomerID IN (" + params["customersInClause"] +")";
					</pre>
					
					When implementing a Scripted Data Set, use the open event to initialize variables, classes etc. Use the Fetch event to load your row data. Remember to return false when your data set is finished. Use close to close any external objects.</p>
					
					<p>To illustrate a Scripted Data Set, assume that you have an external Java Object that returns an ArrayList. To use this with the scripted data set do the following.
					<pre style="font-size: 10pt">
					open event of the Data Set
					importPackage(Packages.test.my.ds)
					myDataSet = new DS();
					myArrayList = myDataSet.getList();
					myIter = myArrayList.iterator();
					
					fetch event of the Data Set
					if( !myIter.hasNext() ){
						return false;
					}
					//myOnlyColumn must be manually defined or defined in the describe event
					row["myOnlyColumn"] = iter.next();
					return true;
					</pre>
					</p>
					
					<h2 class="topic-section-header padding-top-small">Writting Events in Java</h2>
					<p>BIRT event handlers can be written in Java. This section will describe setting up a Birt Events Java project, assigning the event handlers to elements and finally debugging the report.</p>
					<p>When writing Java event handlers remember that a new event handler instance will be created for each invocation. The implication of this is that you can not use class data memeber to pass information between methods. For example, if you want to pass information from "onPrepare()" to "onCreate()", you need to use the reportContext to hold the shared information.</p>
					
					<h4>Setting up the Java Project</h4>
					<p>Within Eclipse, open your workspace that contains the reports that will use the Java event handlers. Create a new Java project and add scriptapi.jar from the Report Engine download.</p>
					
					<h3>Birt POJO Runtime Note: </h3>
					<p>If you are using BIRT 3.7 or later See <a href="http://wiki.eclipse.org/Birt_3.7_Migration_Guide">BIRT 3.7 Migration Guide</a>.<br/>
					Add org.eclipse.birt.runtime_version.jar to the project instead of scriptapi.jar. </p>
					
					<img src="/birt/test/img/documentation/integrating/buildpath.jpg" /><br/><br/>
					
					<p>The scriptapi.jar file includes the event adapters that are needed to implement event handlers.</p>
					
					<img src="/birt/test/img/documentation/integrating/eventadapters.jpg" /><br/><br/>
					
					<p>Create a new class, specifying TableEventAdapter as the super class.</p>
					<img src="/birt/test/img/documentation/integrating/tableadapter.jpg" /><br/><br/>
					<p>Enter the following code for the class.<br /><br />
					<pre style="font-size: 10pt">
					package my.test.events;
					
					import org.eclipse.birt.report.engine.api.script.eventadapter.TableEventAdapter;
					import org.eclipse.birt.report.engine.api.script.element.ITable;
					import org.eclipse.birt.report.engine.api.script.IReportContext;
					
					public class TableEH extends TableEventAdapter {
					
					     /* table onPrepare event */
					     public void onPrepare( ITable table, IReportContext reportContext ){
					         	try {
					         	    table.setNamedExpression( "total_limit_avg", "Total.ave(row[\"CREDITLIMIT\"])" );
					         	} catch ( Exception e ) {
					         	    e.printStackTrace( );
					         	}
					     }
					}
					</pre>
					This code will add a named expression on a table.  The value of the named expression is set to Total.ave(row["CREDITLIMIT"]). In order for this to work there must be a column on the table with a value of row["CREDITLIMIT"].</p>
					
					<p>Repeat the process above for the class RowEH which extends RowEventAdapter and enter the following code.<br /><br />
					<pre style="font-size: 10pt">
					package my.test.events;
					
					import org.eclipse.birt.report.engine.api.script.eventadapter.RowEventAdapter;
					import org.eclipse.birt.report.engine.api.script.IReportContext;
					import org.eclipse.birt.report.engine.api.script.instance.IRowInstance;
					import org.eclipse.birt.report.engine.api.script.IRowData;
					
					public class RowEH extends RowEventAdapter {
						public void onCreate(IRowInstance row, IReportContext context) {
							IRowData data = row.getRowData();
							double avgCreditLimit = ((Double) row.getParent().getNamedExpressionValue("total_limit_avg")).doubleValue();
							try {
								if (((Double) data.getExpressionValue("row[\"CREDITLIMIT\"]")).doubleValue() > avgCreditLimit ) {
									row.getStyle( ).setFontWeight( "bolder" );
									row.getStyle( ).setFontSize( "larger" );
									row.getStyle( ).setColor( "olive" );
								}
							} catch (Exception e) {
								e.printStackTrace();
							}
						}
					}
					</pre>
					<p>This event handler is executed on every row and looks for a column named "CREDITLIMIT". If this credit limit is above the average for all entries in the table, the font weight and size are changed and the color is changed to olive.</p>
					
					<h4>Adding the event handler to the Report</h4>
					<p>Now that the Java classes are built we can create a simple report and apply the event handler.</p>
					
					<p>Build a listing report using the sample database "Classic Models". Enter the following query.<br /><br />
					<pre style="font-size: 10pt">
					select CLASSICMODELS.CUSTOMERS.CUSTOMERNUMBER,CLASSICMODELS.CUSTOMERS.CUSTOMERNAME,CLASSICMODELS.CUSTOMERS.CREDITLIMIT
					from CLASSICMODELS.CUSTOMERS
					</pre>
					Drag the data set to the report view and a table should be created automatically. Select the newly created table and enter my.test.events.TableEH in the Event Handler entry on the Properties tab.</p>
					<img src="/birt/test/img/documentation/integrating/tableeh.jpg" /><br/><br/>
					<p>Repeat the process for the row event handler, by selecting the row and entering my.test.events.RowEH in the Event Handler entry on the Properties tab.</p>
					<p>Selecting Preview should result in the following output.</p>
					<img src="/birt/test/img/documentation/integrating/scriptoutput.jpg" />
					
					<h2 class="topic-section-header padding-top-small">Debugging a Report</h2>
					<h4>Debugging Java Event Handlers</h4>
					<p>Switch to the Java Perspective and select the Java class that implements the event handler. Add breakpoints as usual and select the run->debug menu. Select BIRT Report under Configurations and click the new button. Check Java under debug type. Select the Classpath tab add the project that impements the event handler using the Add Projects button. Click on debug. The breakpoints in your code will halt report generation. You can now use the standard Eclipse Java Debugger features to diagnose your code.</p>
					<img src="/birt/test/img/documentation/integrating/debugjava.png" />
					
					<h4>Debugging JavaScript Event Handlers</h4>
					<p>If you are only using JavaScript event handlers the JavaScript debugger can be used to debug your report.  Click Window->Open Perspective->Other and choose the debug Perspective. Once the debug Perspective is open select Run->Debug Configurations. You can create a new BIRT Report debug launch configuration that will use the currently opened report. In addition you specify which Report Engine Task to run while debugging. These include the Run, RunAndRender, and the RenderTask. You can also set the debugger to do a Run and then a Render Task. These options allow you to recreate the deployed environment. For example when using the frameset servlet mapping in the example Web Viewer, the engine performs a Run Task to generate the report document and then performs a Render Task on the report document. When debugging a report you can specify the Run+Render option to reproduce this behavior in the debugger. The debugger also includes breakpoints, expressions, and variables and supports stepping through either Java or JavaScript event handlers.</p>
					<img src="/birt/test/img/documentation/integrating/debugjs.png" />
					
					<h4>Deploying Java Event Handlers</h4>
					<p>To deploy the Java Event Handlers you can place the jar containing the event handler in the SCRIPTLIB directory of the web application. The SCRIPTLIB directory is defined in the web.xml of the Viewer application. By default this directory is BIRTViewer/scriptlib. To change this directory set the BIRT_VIEWER_SCRIPTLIB_DIR entry in the web.xml.<br /><br />
					
					<pre style="font-size: 10pt">
					&lt;context-param&gt;
						&lt;param-name&gt;BIRT_VIEWER_SCRIPTLIB_DIR&lt;/param-name&gt;
						&lt;param-value&gt;&lt;/param-value&gt;
					&lt;/context-param&gt;
					</pre>
					</p>
					
					<h3>BIRT POJO Viewer Note: </h3>
					<p>If you are installing BIRT 3.7 or higher, the event handler jar can be placed in the WebViewer's classpath (eg WEB-INF/lib).</p>
					<p>If you are testing the event handler in the designer add the Java project that contains the event handler to the workspace which contains your BIRT report project. Use the Window-Preferences-Report Design-Classpath to configure the BIRT Project Classpath so it has access to the Java Project. Additionally you can select the report, click the properties tab, select the resources property and add the jar. When using this method import the jar to the BIRT Project workspace before adding the resource.</p>
					
					<h2 class="topic-section-header padding-top-small">Additional Resources</h2>
					<p>Several Examples, PPT files and Webinars are available on the BIRT Developer Center
					<ul class="eclipse-list">
						<li><a href="http://www.birt-exchange.com/be/info/birtscripting-websem/">Report Scripting Webinar</a></li><br />
						<li><a href="http://www.birt-exchange.org/org/devshare/index.php?topicid=0&filtercontent=script&contenttype=&timeperiod=0&results=10">Report Script Examples in BIRT-Exchange DevShare</a></li>
					</ul>
					
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