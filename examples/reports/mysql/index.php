<?php

Header("Location: /birt/demos/");

/*
 * Created on Feb 26, 2005
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

global $birtPath;
$birtPath = "../../../";
require $birtPath . "include/viewer.inc";
viewer( "examples/reports/mysql" );

?>
