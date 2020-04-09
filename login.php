<!DOCTYPE html>
<html lang="en">
<head>
<title>login form</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="login.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="login">
<form method="post" action="login-process.php">
<div class="form-input">
<input type="text" name="username" placeholder="Enter User Name" required> 
</div>
<div class="form-input">
<input type="password" name="password" placeholder="Enter Password" required>
</div>
<input type="submit" value="Login" class="btn-login" name="btn-login">
<br>
<a href="front.php"> Don't Have Account? </a>
</form>
</div>
</body>
</html>
