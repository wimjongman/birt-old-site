<?php

Header("Location: /birt/);	

/*
 * Created on Feb 27, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

$dest = $_GET['page'];
if ( $dest == "" )
	$dest = "main.html";
?>

<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Eclipse.org Main Page</title>

<LINK REL="shortcut icon" HREF="http://www.eclipse.org/images/eclipse.ico" TYPE="image/x-icon">
</head>
<frameset rows="48,*" frameborder=0 framespacing=0 border="0"> 
  <frame name="banner" scrolling="no" noresize target="home" 
         src="http://www.eclipse.org/banner.html"  marginwidth="0" marginheight="0" frameborder="NO">
  <frameset cols="126,*" frameborder=0 framespacing=0 border="0"> 
    <frame name="nav" scrolling="no" noresize target="main" 
           src="http://www.eclipse.org/home_nav1.html"  marginwidth="0" marginheight="0" frameborder="NO">
    <frame name="main" marginwidth=10 marginheight=10 noresize frameborder="NO"
    	   src="<?php echo $dest; ?>">

  </frameset>
  <noframes> 
  <body>
  <p>This page uses frames, but your browser doesn't support them.</p>
  </body>
  </noframes> </frameset>
</html>
