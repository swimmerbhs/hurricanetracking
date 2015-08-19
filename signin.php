<?php
session_start();					//starts session
include 'database_connector.php';	// includes database connector

if(isset($_POST['submit']))			// on submit will compare username and password
{									// to users table 
	$userName=$_POST['userName'];
	$passWord=$_POST['passWord'];
	$result=mysqli_query($con,"SELECT * FROM users WHERE `username` = '$userName' AND `password` = '$passWord'");
 if($result)
        {
           $count=mysqli_num_rows($result);     //count number of rows where true       

            if($count==1)						//if only one will start the session
            {
                   $_SESSION['userName']= $userName;
                   $_SESSION['passWord'] = $passWord;
                  header("location:users.php");    // and will go to this users page
           }
           else									//if not one then will ask again
           {      
                  header("location:index.php");  
           }

        }
	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href="index.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Hurricane 2015 signin</title>
</head>
<body>
<form name="signin" method="post" action="signin.php" id="form">
Member Sign in for the 2015 Hurricane Season
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