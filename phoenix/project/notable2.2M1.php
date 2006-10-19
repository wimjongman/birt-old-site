<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "New and Notable Features within BIRT 2.2 Milestone 1";
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
	<div align=LEFT style="padding-left: 185px">

		<h1><a name="top"></a>$pageTitle</h1>
		<blockquote>
			<ul>
				<li><a href="#intro">Introduction</a></li>
				<li><a href="#jump_2">New Chart Types</a></li>
				<li><a href="#jump_3">New Chart Examples View</a></li>
				<li><a href="#jump_4">Application Context Object pushed to Web Viewer</a></li>
			</ul>
		</blockquote>

<h1><a name="intro">Introduction</a></h1>		

<p>
Since the release of BIRT 2.1.1, the BIRT Team has been diligently working on BIRT 2.2.  In accordance with Eclipse philosophy, milestones will be released throughout the development cycle.  The first milestone is now officially released.  Below is a description of some of the key features that are now available in the M1 build.  We encourage you to download BIRT 2.2 M1 and provide your feedback.  
</p>
<p>
To review the projects slated for the 2.2 release, see the draft project plan, which is available <a href="http://www.eclipse.org/birt/phoenix/project/project_plan_R2_2_0.php">here</a>.</p>

<h1><a name="jump_2">New Chart Types</a></h1>
<p>Presenting information graphically is often an effective method for summarizing detail data for use 
in making business decisions.  BIRT offers a very robust charting package that can be used within the Report 
Designer or in a stand-alone fashion. As of BIRT 2.1.1 seven major chart types and many subtypes are supported.  
Major types include bar, line, area, pie, meter, scatter and stock charts.  
Several of these support subtypes like stacked bar charts, super imposed meter charts, and candlestick stock charts.  
In addition, multiple chart types can be used in conjunction to create sophisticated combinational charts.
<img src="images/2.2/newcharts.JPG">
</p>
<br>
<i>
Example Charts
</i>
<p>
Thanks in part to a donation from Stephen Carlon of the Metier corporation, three new major chart types are available: Bubble, Gantt and Difference.  Bubble charts are an effective way of representing three-dimensional data in a 2D grid, with the third dimension of data represented by the area or diameter of a bubble.   As an example, a bubble chart may be used to display order details where the horizontal axes may represent product code and the vertical axes corresponds to unit cost.  The bubble size could then be set to quantity ordered.  Gantt charts are most often associated with project schedules and represent tasks using bars that correlate to beginning and ending dates.  The bars are filled with colors representative of the task status.  Difference charts are used to illustrate differences between two sets of data using fill areas.  Positive differences are usually displayed in one color while negative differences are displayed in another.  As an example, a difference chart may be used to track stock trades over a period of time, where the positive value represents what the stock was sold for and the negative value is associated with what the stock was purchased at.</p>

<h1><a name="jump_3">New Chart Examples View</a></h1>

<p>
BIRT 2.2 M1 now features a new view that provides quick access to the Charting API examples.  These examples include Java code to demonstrate building several chart types using the Chart Engine API (CE API).  This view can be accessed by selecting the “Window->Show View->Other” menu.</p>
<img src="images/2.2/chartexampleviewselect.JPG">
<br>
<i>
Chart Examples View
</i>
<br>
<p>
Once this view is opened, several examples are presented in a tree view.  When an example is selected a preview window illustrates the type of chart that the example constructs.  Selecting the open button will then open the Java snippet in the code window.
</p>

<img src="images/2.2/chartexampleview.JPG">
<br>
<i>
Chart Example
</i>


<h1><a name="jump_4">Application Context Object pushed to Web Viewer</a></h1>
<p>
BIRT currently uses an Application Context object to store engine configuration information, such as image locations, URL configurations when generating hyperlinks and setting image formats for chart generation.  This Application Context object is available throughout the generation and rendering phases of the reporting pipeline and can be manipulated using the Report Engine API (RE API).  Before BIRT 2.2 M1, this object could not be manipulated outside of BIRT unless the RE API was used.  This precluded using the BIRT Web Viewer Example with applications that required manipulation of the Application Context Object.  The M1 release now supports passing in this context object from an existing Servlet/JSP page.  This is illustrated in the following code snippet:
</p>
<pre style="font-size: 10pt">
		String contextKey = "appContextKey"; 
		request.setAttribute( "AppContextKey",contextKey );
		HashMap appContext = new HashMap( );
		appContext.put( "key1", "value1" ); 
		request.setAttribute( "AppContextValue",appContext );
		request.getRequestDispatcher( "/frameset?__report=testappcontext.rptdesign").forward(request,response);
</pre>
<p>
This also allows passing application specific information to a customized data driver.  For example, if your application used a proprietary (non JNDI) method for retrieving connections to a data source, this feature would allow you to pass the connection to an extended BIRT JDBC driver.
</p>




</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
