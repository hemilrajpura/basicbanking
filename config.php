<?php
	
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = '';
 $db = "basicbank";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
ob_start();
session_start();

return $conn;

 }
 
function CloseCon($conn)
 {
 ob_flush();
 $conn -> close();
 }
   
?>