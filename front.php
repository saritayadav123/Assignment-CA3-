<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="front.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> signup form </title>
</head>
<body>
<div class="signup">
<form action="process.php" method="post">
<div class="form-input">
<input type="text" placeholder="Enter User Name" name="username" required >
</div>
<div class="form-input">
<input type="email" placeholder="Enter Email-id" name="email" required>
</div>
<div class="form-input">
<input type="password" placeholder="Enter Password" name="password" required>
</div>
<div class="form-input">
<input type="password" placeholder="Confirm Password" name="confirmpass" required>
</div>
<input type="submit" class="btn-signup" name="btn-sub" value="Create Account"> 
<br>
<a href="login.php"> Already Have Account </a>
</form>
</div>
</body>
</html>

