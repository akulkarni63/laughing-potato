<?php
include ('login.php');
if (isset($_SESSION['login_user'])) {
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Login</title>
<link href ="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="login">
<h2> login</h2>
<form action="" method="post">
<label> UserName :</label>
<input id="name" name="username" type="text"><br>
<label> Pass:</label>
<input id="name" name="pass" type="password">
<input value="login" name="submit" type="submit">
<span> <?php echo $error; ?></span>
</form>
</div>
</body>
</html>
