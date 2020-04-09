<?php

session_start();

require_once("connect.php");

if(isset($_POST["btn-login"]))
{
$username = $_POST["username"];
$password = $_POST["password"];
if( empty($username) || empty($password) )
{
echo "Enter The Details";
}
else
{
$query = "select * from bunty where username='$username'";
$result = mysqli_query($conn,$query);
if($row = mysqli_fetch_assoc($result))
{
$db_pass = $row["password"];
$db_user = $row["username"];

if(($username == $db_user) && (md5($password)==$db_pass))
{
$_SESSION['user']=$_POST['username'];
header("location:index.php");
}
else
{
echo "<script type='text/javascript'>alert('Incorrect User Name or Password, Login using the credentials, Redirecting to Login Page...') </script>";
echo "<script type='text/javascript'> location.href='login.php'; </script>";
}
}

}

}
?>
