<?php
if($_SERVER["REMOTE_ADDR"]==$_SERVER["SERVER_ADDR"])
{	
date_default_timezone_set('Asia/Tehran');
$filename="code_forge/".date('Y-m-d_H.i.s').".code";
file_put_contents($filename,"<?php {$_REQUEST["code"]}");
// eval($_REQUEST["code"]);
include $filename;
}