<?php 
require_once( $_SERVER['DOCUMENT_ROOT']. "birt/test/config.php");
echo 'docroot: '.$_SERVER['DOCUMENT_ROOT'].'<br />';
echo 'dir: '. __DIR__  .'<br />';
echo 'test include: '.$_SERVER['DOCUMENT_ROOT'].'birt/test/config.php<br />';
die('test');
?>