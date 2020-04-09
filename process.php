<?php

require_once("connect.php");

if(isset($_POST["btn-sub"]))

{
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$confirmpass = mysqli_real_escape_string($conn, $_POST["confirmpass"]);

if( empty($username) && empty($email) && empty($password) && empty($confirmpass))
{
echo "Enter The Details";
}

if($password!=$confirmpass)
{
echo "Incorrect Password";
}

else
{
$pass = md5($password);
$cpass = md5($confirmpass);

$q = "select * from bunty where username='$username' && password='$pass'";
$result = mysqli_query($conn,$q);
$num = mysqli_num_rows($result);

if($num == 1)
{
echo "<script type='text/javascript'>alert('Account with this username already exists, Login using the credentials, Redirecting to Login Page...')</script>";
}
else
{
$sql = "insert into bunty (username,email,password,cpass) values ('$username', '$email', '$pass', '$cpass')";
mysqli_query($conn,$sql);
echo "<script type='text/javascript'> alert('$username, your account has been successfully created, Redirecting you to Login Page...')</script>";
}
}
}
?>

<html>
<body>
<script type='text/javascript'> location.href='login.php'; </script>
</body>
</html>
