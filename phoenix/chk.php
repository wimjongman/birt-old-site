<?php

function checkLink($link=0)
{

	$fp = @fopen($link,"r");
	if ($fp)
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

   function url_exists($url) {
       $a_url = parse_url($url);
       if (!isset($a_url['port'])) $a_url['port'] = 80;
       $errno = 0;
       $errstr = '';
       $timeout = 30;
       if(isset($a_url['host']) && $a_url['host']!=gethostbyname($a_url['host'])){
           $fid = fsockopen($a_url['host'], $a_url['port'], $errno, $errstr, $timeout);
           if (!$fid) return false;
           $page = isset($a_url['path'])  ?$a_url['path']:'';
           $page .= isset($a_url['query'])?'?'.$a_url['query']:'';
           fputs($fid, 'HEAD '.$page.' HTTP/1.0'."\r\n".'Host: '.$a_url['host']."\r\n\r\n");
           $head = fread($fid, 4096);
           fclose($fid);
           return preg_match('#^HTTP/.*\s+[200|302]+\s#i', $head);
       } else {
           return false;
       }
   }



//$install_instructions_version = "http://www.eclipse.org/birt/phoenix/build/" . "install_" . "R2_1_1" . ".php";
$install_instructions_version = "http://www.google.com";

if ( url_exists( $install_instructions_version ) ){
?>
	Found it!!!!
<?php 
}else{ 
?>
    Did not find !!!google!!!!

<?php
$fp = fopen('http://www.google.com', 'r');

// the variable $http_response_header magically appears
print_r($http_response_header);

  
}


	
	
?>