<?php if (!defined('PmWiki')) exit();

include_once('cookbook/comments.php');
PatchCommentBrowseFmt();
$EnableUpload = 1;
$UploadMaxSize = 500000;
$UploadDir = "/home/data/httpd/writable/birt/wiki.d/uploads";

