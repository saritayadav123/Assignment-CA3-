<?php

session_start();
if(isset($_POST['btn-logout']))
{
session_destroy();
header("location:login.php");
}
else
{
header("location:login.php");
}

?>
