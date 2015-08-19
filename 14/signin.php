<?php
session_start();					//starts session
include 'database_connector.php';	// includes database connector

if(isset($_POST['submit']))			// on submit will compare username and password
{									// to users table 
	$userName=$_POST['userName'];
	$passWord=$_POST['passWord'];
	$result=mysqli_query($con,"SELECT * FROM users WHERE `userName` = '$userName' AND `passWord` = '$passWord'");
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hurricane 2014 signin</title>
</head>
<body>
<form name="signin" method="post" action="signin.php" id="form">
Member Login <br /><br />
Username<input name="userName" type="text"><Br />
Password<input name="passWord" type="password"><br /><br />
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>