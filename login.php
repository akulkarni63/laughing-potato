<?php
session_start();
$error = '';

if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error= "user or pass is invalid";
	}
	else
	{
		$username = $_POST['username'];
		$password =	$_POST['pas'];
		
		$conn = mysqli_connect("localhost", "root", "", "data");
		$query = "SELECT username, password from data where username=?	AND password=? LIMIT 1";
$stmt = $conn-> prepare($query);
$stmt-> bind_param("ss", $username, $password);
$stmt-> execute();
$stmt-> bind_result($username, $password);
$stmt-> store_result();
if($stmt->fetch())	
{
	$SESSION['login']=$username;
	header("location: profile.php");
}
else {
	$error ="user or pass invalid";
}
mysqli_close($conn);
	}
}
?>