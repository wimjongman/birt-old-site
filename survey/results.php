<?php
/*
 * Created on Mar 31, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

global $data;
$data = file_get_contents( "results.csv" );
?>

<HTML
<head>
<title>Raw Survey Results</title>
</head>
<body>
<pre>
<?php echo htmlentities( $data ); ?>
</pre>
</body>
</html>
