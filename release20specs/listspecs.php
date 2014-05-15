<?php



$lst="";
foreach (glob("*.pdf") as $filename) {
	$lst = $lst . "<a href='$filename'>$filename</a><br>";
}
$lst = $lst . "<a href='./ChartModelDoc 1.0.1/Eclipse BIRT Chart Object Model.html'>Chart Model 1.0.1</a><br>";
$lst = $lst . "<a href='./ChartModelDoc 2.0.0/schema20.html'>Chart Model 2.0.0</a><br>";
 
echo $lst
?> 
