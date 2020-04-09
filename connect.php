<?php

$dbserver = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "sarita";

//for connection
$conn = mysqli_connect($dbserver, $dbusername, $dbpass, $dbname);

//check connection
if(!$conn)
{
die ("check database connection" .mysqli_connect_error());
}


?>
