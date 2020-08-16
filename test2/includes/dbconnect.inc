<?php
// Generic Script to Connect to the SHS MySQL Server
// Use as an Include
$host = "localhost";
$user = "firewal2";
$password = "Mac Taylor1";
$db = "firewal2_maindb";
if ($dbconnection = mysql_connect($host,$user,$password)) {
if (mysql_select_db($db)) {
pass;
} else {
die("Failure Connecting to Database. DB does not exist.");
};
} else {
die("Failure Connecting to Database. Connection Invalid.");
};
?>