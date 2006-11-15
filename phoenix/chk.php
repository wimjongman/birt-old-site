<?php

?>
This is a test
<?php

$fp = fopen('http://www.google.com', 'r');

// the variable $http_response_header magically appears
$aaa = "Test1";
$bbb = "Test2";

print_r($aaa);
print_r($http_response_header);
print_r($bbb);

  
}


	
	
?>