<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 transitional//EN">
<html>

<head>
<title>Test</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$doc = domxml_open_file( "community.html" );
if ( $doc == null ) echo "NULL<br>/n";
else echo "Worked<br>/n";

?>

<?php phpinfo(); ?> 

</body>
</html>
