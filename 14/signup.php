<?php
session_start();					//starts session
include 'database_connector.php';	// includes database connector
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href="index.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hurricane 2014 sign up</title>
</head>
<body>
<form name="signin" method="post" action="signup.php" id="form">
<?php
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
Member Signup<br /><br />
Username<input name="userName" type="text"><br />
Password<input name="passWord" type="password"><br /><br />
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>