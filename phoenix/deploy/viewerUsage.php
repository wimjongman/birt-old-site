<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

Header("Location: /birt/documentation/integrating/viewer-usage.php");

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Using the BIRT Report Viewer";
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
	$currentPage			= "Viewer Usage";
	$linkToTop				= linkToTop();
	$deployLinksSideItem  	= getDeployLinksSideItem($currentPage);


	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PW8LFV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PW8LFV');</script>
<!-- End Google Tag Manager -->

<div id="maincontent">
	<div id="midcolumn">

		<h1><a name="top"></a>$pageTitle</h1>

		<blockquote>
		
				
			<ul>
				<li><a href="#overview">Overview</a></li>
				<li><a href="#operations">Viewer Operations</a></li>
				<li><a href="#run">Run a Report</a></li>
				<li><a href="#frameset">Viewer Frameset</a></li>
				<li><a href="#command_options">Viewer Command Options</a></li>
				<li><a href="#parameters">Report Parameters</a></li>
				<li><a href="#error">Error Reporting</a></li>
			</ul>
		</blockquote>

		<h2><a name="overview"></a>Overview</h2>
		<p>
		    If you are using the 2.2.x Birt Viewer please see this <a href="viewerUsage2.2.php">page</a>.<br>
		 </p><p>   
			The sample BIRT viewer is optimized for use within Eclipse for the preview operation. When used outside Eclipse, it simply acts as an example of the application you might build to run and view reports. Your report viewer application must be in Java so that it has access to the BIRT engine.
			The viewer can also be deployed as an Eclipse plugin in an RCP application.
		</p>

		<p>
			The Viewer performs three distinct operations, of which one is internal and not visible to your application:
		</p>
		<ul class="midlist">
			<li>
				Create a frameset based viewer that interacts with the servlet using AJAX to support more features.
			</li>
			<li>
				Given a set of report parameter values, run a report and return the output as either HTML or PDF.
			</li>
			<li>
				Retrieve an embedded image, or an image of a chart within the report. (Internal operation.)
			</li>
		</ul>
		<p>
			You can use a full-feature Viewer frameset that handles parameter entry, Table of Contents, export to CSV and HTML pagination. Or, you can supply the parameter values and simply run the report to produce a simple HTML or PDF output page.
		</p>


		<h2><a name="operations"></a>Viewer Operations</h2>
		<p>
			The BIRT viewer provides a number of URLs that control its behavior. The Viewer provides two modes of operation as given by two servlet mappings.
		</p>
		<p>
			<table>
			<thead>
			  <tr>
				<td>Operation</td>
				<td>Description</td>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>frameset</td>
				<td>Display a frameset that contains the report and additional AJAX components for
				retrieving Table of Contents, exporting to CSV, parameter entry and paging controls.</td>
			  </tr>
			  <tr>
				<td>run</td>
				<td>Runs the report and displays the
				output as a stand-alone HTML page, or as a PDF document.</td>
			  </tr>
			</tbody>
			</table>
		</p>
		<p>The servlet mapping names are case sensitive.
		</p>

		<h2><a name="run">Run a Report</a></h2>
		<p>
			The run servlet mapping runs a report given a set of report parameters, and returns the report as an HTML page or PDF document. This servlet mapping does not provide a frameset. Use this option if you want the report to appear as a stand-alone page or if PDF output is required. Parameters must be handled in one of three ways:
		</p>
		<ul class="midlist">
			<li>
				The report requires no report parameters.
			</li>
			<li>
				Your application already knows the values of the parameters (perhaps from a server session), and passes them along.
			</li>
			<li>
				Your application has created a parameter page specifically for the report.
			</li>
		</ul>
<div class="homeitem3col">
<h3>Birt 2.1 RC3 or Later Runtime Note: </h3>
<ul>
 <li>If your report has a required parameter with no default value, the parameter entry screen will be displayed automatically.
 </ul>
</div>
<br>
		<p>
			The run report URL is of the form:
		</p>
		<blockquote>
			http:<i>//sitePrefix</i>/birt-viewer/run?<i>option1</i>=<i>value1</i>;<em>option</em><i>2</i>=<i>value2;...</i>
		</blockquote>
		<p>
			See below for a list of available viewer command options.
		</p>


		<h2><a name="frameset">Viewer Frameset</a></h2>
		<p>
			The <code>frameset</code> command provides additional UI to work with a report. Use this URL when your report contains parameters, and you want the Viewer to display a UI so the user can enter parameter values. Using the <code>frameset</code>
			command also allows for HTML pagination.
					</p>
		<p>
			The frame-based viewer displays a frameset that contains the report and controls for the following functions:
		</p>
		<ul class="midlist">
			<li>
				Table of Contents - Use this navigate reports.  Selecting a link in a multi-page report will automatically load the desired page.
			</li>
			<li>
				Run Report - Use this control to enter parameters and execute the report.
			</li>
			<li>
				Export Data - This control prompts the user to select what report data should be exported to CSV.
			</li>
			<li>
				Page Controls - Navigate paginated HTML report output.
			</li>
		</ul>
		<p>
			The parameters dialog displays a form for entering the parameters (if any) for
			a report. It contains a  Run Report button that runs the report. The report then
			appears in the report frame . The user can refine the report simply by modifying
			parameters in the parameter frame and again by clicking Run Report.
		</p>
		<p>
			The viewer URL is of the form:
		</p>
		<blockquote>
			http:<i>//sitePrefix</i>/birt-viewer/frameset?<i>option1</i>=<i>value1</i>;<i>option2</i>=<i>value2;...</i>
		</blockquote>
		<p>
			See below for a list of available command options. The command options allow you to control which of the three frames appear in the resulting web page.
		</p>
		<p>
			When you issue this command, the viewer will do one of two things:
		</p>
		<ul class="midlist">
			<li>
				Run and display the report if any of the following conditions are true.
				<ul>
				<li>The report has no parameters</li>  
				<li>All parameters have supplied default values.</li>
				<li>All parameters have <code>allowNull</code> property checked</li>
				</ul>
			</li>
			or
			<li>
				Display the parameter page and ask you to enter parameters. You can then click the Run Report button to run the report.
			</li>
		</ul>


		<h2><a name="command_options">Viewer Command Options</a></h2>
		<p>
			The run and the frameset Viewer operations both take a set of options which include report parameters. Report parameters are defined within the report design. They appear in the URL using their internal names, not display names. Viewer options pass information to the BIRT Viewer web app. Viewer options start with a double underscore to differentiate them from report parameters. Option names and values must be encoded for use in a URL. For example:
		</p>
		<blockquote>
			http://localhost:8080/birt-viewer/run?__report=report%5CSalesInvoice.rptdesign&amp;OrderNumber=10010
		</blockquote>
		<p>
			In the above:
		</p>
		<ul class="midlist">
			<li>
				http://localhost:8080/ ? The URL (including port) for your installation of the app server.
			</li>
			<li>
				/birt-viewer/ ? The name of the BIRT Viewer servlet.
			</li>
			<li>
				run ? The servlet mapping for running a report.
			</li>
			<li>
				report%5CSalesInvoice.rptdesign ? Relative file system path of the report to run. The name is relative to the web app directory in which the birt-viewer was installed.
			</li>
			<li>
				OrderNumber=10010 ? The name and value of a report parameter as defined in the report design.
			</li>
		</ul>

		<h3>List of Options</h3>
		<p>
			The available viewer options include:
		</p>
		<p>
			<table class="simple-table">
			  <tbody><tr>
				<td><b>Option</b></td>
				<td><b>Description</b></td>
				<td><b>Values</b></td>
				<td><b>Default</b></td>
				<td><b>frameset</b></td>
				<td><b>run</b></td>
			  </tr>
			  <tr>
				<td>__format</td>
				<td>The output format</td>
				<td>html or pdf</td>
				<td>html</td>
				<td>N</td>
				<td>Y</td>
			  </tr>
			  <tr>
				<td>__isnull</td>
				<td>Identifies that a report parameter has a null value</td>
				<td>Parameter name</td>
				<td>None. Required.</td>
				<td>N</td>
				<td>Y</td>
			  </tr>
			  <tr>
				<td>__locale</td>
				<td>Report locale</td>

				<td>Java locale value such as en, en-us or ch-zh.</td>
				<td>JVM locale</td>
				<td>Y</td>
				<td>Y</td>
			  </tr>

			  <tr>
				<td>__report</td>
				<td>The path to the report design.</td>
				<td>&nbsp;</td>
				<td>None. Required.</td>
				<td>Y</td>
				<td>Y</td>
			  </tr>
			  <tr>
				<td>__document</td>
				<td>The path to the report document.</td>
				<td>&nbsp;</td>
				<td>None. Required.</td>
				<td>Y</td>
				<td>N</td>
			  </tr>			  
			  <tr>
				<td><i>reportParam</i></td>
				<td>Report parameter.</td>
				<td>As specified in the report design.</td>
				<td>As specified in the report design.</td>
				<td>Y</td>
				<td>Y</td>
			</table>
		</p>
		<h3>Case-Sensitivity</h3>
		<p>
			Case-sensitivity of the options varies:
		</p>
		<ul class="midlist">
			<li>
				Viewer option names and values are case-insensitive.
			</li>
			<li>
				Report parameter names are case-sensitive: they must match the name as defined in the design.
			</li>
			<li>
				The file name case sensitivity is defined by your operating system.
			</li>
		</ul>
		<p>
			If the URL contains a misspelled option name, or the name of report parameters are in the wrong case, then the Viewer silently ignores the parameter.
		</p>
		<h3>The __format Option</h3>
		<p>
			The type of output to produce: either html or pdf. Values are case insensitive. If a value other than pdf is provided, then the HTML format is produced.
		</p>

		<h3>The __isnull Option</h3>
		<p>
			Report parameters can take a value, or can be null. (Here "null" means the database definition: the value is unknown.) By definition, date and numeric report parameters have a null value if the report parameter is provided in the URL, and the value is blank. However, string report parameters have an ambiguity: is an empty value to be considered blank (a string whose value is ""), or null? Since blank is used more often, BIRT interprets an empty report parameter value as blank. To say a string parameter is is null, just write:
		</p>
		<blockquote>
			__isnull=<i>yourParam</i>
		</blockquote>
		<p>
			While this option is primarily for string report parameters, it works just as well for other report parameter types as well. See the <a href="#reportParams">Report Parameters</a> section below for additional details.
		</p>
		<h3>The __locale Option</h3>
		<p>
			Use the <code>__locale</code> option to specify both the locale for report parameter
			values, and the locale for the report output. The locale must be a valid Java
			locale such as <code>en-us</code>, etc. as specified in the
			<a href="http://java.sun.com/j2se/1.4.2/docs/guide/intl/locale.doc.html">Sun
			Java locale guidelines</a>. If you do not specify a locale, it defaults to the
			locale set in the Java virtual machine (JVM.)
		</p>
		<p>
			Values are case insensitive.
		</p>
		<h3>The __report Option</h3>
		<p>
			The <code>__report</code> Option names the
			report design to run. It can be an absolute or relative file name. If
			relative, the following search rules are used.
		</p>
		<ul class="midlist">
			<li>
				If name is absolute, use it directly.
			</li>
			<li>
				If <code>BIRT_VIEWER_DOCUMENT_FOLDER</code> is set in the web.xml, use this value as the base for the relative name.
			</li>
			<li>
				If <code>BIRT_VIEWER_WORKING_FOLDER</code> is set in the web.xml, use this value as the base for the relative name.
			</li>
			<li>
				Otherwise, use the viewer web app's directory as the base for the relative name.
			</li>
		</ul>
		<h3>The __document Option</h3>
		<p>
			The <code>__document</code> Option names the
			report document to run with the frameset mapping.  This file is the intermediate file when run and render are separate phases. It can be an absolute or relative file name. If
			relative, the following search rules are used.  If the __document parameter is used without the __report parameter and existing report document can be rendered.
		</p>
		<ul class="midlist">
			<li>
				If name is absolute, use it directly.
			</li>
			<li>
				If <code>BIRT_VIEWER_DOCUMENT_FOLDER</code> is set in the web.xml, use this value as the base for the relative name.
			</li>
			<li>
				If <code>BIRT_VIEWER_WORKING_FOLDER</code> is set in the web.xml, use this value as the base for the relative name.
			</li>
			<li>
				Otherwise, use the viewer web app's directory as the base for the relative name.
			</li>
		</ul>

		<h2><a name="parameters"></a>Report Parameters</h2>
		<p>
			Report parameters can be Boolean, Number, Date, Float or String. The values are defined as follows:
		</p>
		<p>
			<table>
			<thead>
			  <tr>
				<td>Data Type </td><td>Value Encoding </td><td>Notes </td></tr>

			</thead>
			<tbody>
			  <tr>
				<td>Boolean</td>
				<td>true, false</td>
				<td>Must use the value true for a true value, all other values
				(including 1) are treated as false. (Uses the Java Boolean.parse() method
				for parsing.) Values are case-insensitive.</td>
			  </tr>
			  <tr>

				<td>Number</td>
				<td>Floating point number with a locale-specific decimal
				separator.</td>
				<td>Must not include a thousands separator, or extra characters
				such as a currency symbol. Uses the Java java.text.DecimalFormat class
				to parse the number.</td>
			  </tr>
			  <tr>
				<td>String</td>
				<td>None</td>

				<td>&nbsp;</td>
			  </tr>
			  <tr>
				<td>Date</td>
				<td>Locale-specific date format.</td>
				<td>Uses the Java java.text.SimpleDateFormat class to parse the date.</td>
			  </tr>

			</tbody>
			</table>
		</p>
		<h3>Report Parameter Value</h3>
		<p>
			The rules for a given parameter foo are determined by the first rule below that takes effect:
		</p>
		<ul class="midlist">
			<li>
				If <code>__isnull=foo</code> appears in the URL, <code>foo</code>'s value is null.
			</li>
			<li>
				If <code>foo=mumble</code> appears in the URL, foo's value is mumble.
			</li>
			<li>
				If <code>foo=</code> appears in the URL, <code>foo</code>'s value is blank if it is a string, and null if it is a number or date.
			</li>
			<li>
				If foo has a default value, <code>foo</code>'s value is that default value.
			</li>
			<li>
				Otherwise, <code>foo</code>'s value is blank  for string or null  for number and date.
			</li>
		</ul>
		<h3>Value Checking</h3>
		<p>
			The report definition provides two properties for report parameters that
			influence parameter validation. First, the <code>allowNull</code> property determines if a
			report parameter can be null. If a report parameter has a null value, but the <code>allowNull</code>
			property is false, then the BIRT report engine will raise an error.
		</p>

		<p>
			Second, string report parameters have a <code>allowBlank</code> property. If report
			parameter has a blank value, and <code>allowBlank</code> property is false, then the BIRT
			report engine will raise an error.
		</p>

		<h2><a name="error"></a>Error Reporting</h2>
		<p>
			If an error occurs during the operation, an error page will appear.
		</p>

	</div>
	$deployLinksSideItem
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
