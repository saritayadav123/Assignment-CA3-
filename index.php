<!DOCTYPE html>
<html lang="en">
<head>
<title>index</title>
<style>

body
{
margin: 0 auto;
background: url("back.jpg") no-repeat;
background-size: 100%;
}

a
{
text-decoration:none;
margin: 0 auto;
font-family:"fontAwesome";
font-size:60px;
margin: 0 auto;
color:#ff661a;
pointer-events:none; 
cursor:default;
}

.btn-logout
{
float:right;
margin-top:10px;
margin-right:35px;
padding: 10px;
cursor:pointer;
font-size:20px;
font-family:"FontAwesome";
color: #fff;
background-color:#ff3300;
border-radius:10px;
}

</style>
</head>
<body>

<?php

session_start();

if(isset($_SESSION['user']))
{
echo " <a href='#'> Welcome to my page "  .$_SESSION['user']." </a>";
}
else
{
header("location:login.php");
}
?>


<form action="logout.php" method="post"> 
<input type="submit" class="btn-logout" name="btn-logout" value="Logout">
</form>

</body>
</html>
