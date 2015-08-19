<?php
session_start();					//starts session
include 'database_connector.php';	// includes database connector
if(isset($_POST['submit']))			// on submit will compare username and password
{									// to users table 
	$userName=$_POST['userName'];
	$passWord=$_POST['passWord'];
$result=mysqli_query($con, "INSERT INTO users VALUES( '','$userName', '$passWord')");
if($result)
{print "Member added to database";}
else { print "unsuccessfull";}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href="index.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hurricane 2015 season sign up</title>
</head>
<body>
<form name="signin" method="post" action="signin.php" id="form">
Member Sign up for the 2015 Hurricane Season<br />
Both Username and Password are required
<table border="6px">
<tr>
<td>Username</td>
<td><input name="userName" type="text" required="required"></td>
</tr>
<tr>
<td>Password</td>
<td><input name="passWord" type="password" required="required"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
</body>
</html>