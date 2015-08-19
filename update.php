<?php
include 'database_connector.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href="/css/index.css" rel="stylesheet" type="text/css" />
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<style type='text/css'>
body{ background-color: black; }
/*This will work for chrome */
                    .col-md-8
                    {
                        width:871px;
                    }
/*This will work for firefox*/
                    @-moz-document url-prefix() {
                        .col-md-8{
                        width:885px;
                    }
                    }
                @media (min-width: 979px) {
  ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;
  }
}
              </style>
<title>Coordinate Update</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/index.php">Hurricane Tracking</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="users.php">update coodinates</a></li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Storm Information
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="cat.php">Category Information</a></li>
          <li><a href="warning.php">Watches/Warning Information</a></li>
           </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Current
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="Ana.php">Ana</a></li>
            <li><a href="Bill.php">Bill</a></li>
            <li><a href="Claudette.php">Claudette</a></li>
            <li><a href="Danny.php">Danny</a></li>
            <li><a href="Erika.php">Erika</a></li>
            <li><a href="Fred.php">Fred</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Historical
          <span class="caret"></span></a>
 <ul class="dropdown-menu">
          <li>2014</li>
            <li class="divider"></li>
            <li><a href="14/Arthur.php">Arthur</a></li>
            <li><a href="14/Bertha.php">Bertha</a></li>
            <li><a href="14/Cristobal.php">Cristobal</a></li>
            <li><a href="14/Dolly.php">Dolly</a></li>
            <li><a href="14/Edouard.php">Edouard</a></li>
            <li><a href="14/Fay.php">Fay</a></li>
	     <li><a href="14/Gonzalo.php">Gonzalo</a></li>
            <li><a href="14/Hanna.php">Hanna</a></li>
      </ul>
        </li>
      </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="add.php"><span class="glyphicon glyphicon-plus"></span> Add</a></li>
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<ol class="breadcrumb">
<li><a href="index.php">Home</a></li>
<li class="active">Update Coordinate</li>
</ol>
<?php
$result=mysqli_query($con, "select * from Spots15 where `id = '$id' ");	  
while($row=mysqli_fetch_array($result)){
  $id       = $row['ID'];
  $cat		= $row['CATAGORY'];
  $name		= $row['NAME']; 	
  $date     = $row['DATE'];    //stores the column name from table in a variable 
  $time     = $row['TIME'];	// so the rows can be formated like this	
  $lat    	= $row['LAT'];
  $long    	= $row['LONG'];
  $wind    	= $row['WINDSPEED'];
  $direct   = $row['DIRECTION'];
  $speed	= $row['MOVEMENT'];
  $pressure	= $row['PRESSURE'];
}
?>
<form action="add.php" name="add" method="post" id="addform" sclass="form-horizontal">
  <div class="form-group">
    <label for="category" class="col-sm-2 control-label">Category:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cat" size="30" placeholder="<? echo $cat; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="Name" class="col-sm-2 control-label">Name Of Storm:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="name" size="30" placeholder="<? echo $name; ?>">
    </div>
  </div>
 <div class="form-group">
    <label for="date" class="col-sm-2 control-label">Date of Advisory:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="date" size="30" placeholder="<? echo $date; ?>">
    </div>
  </div>
 <div class="form-group">
    <label for="time" class="col-sm-2 control-label">Time of Advisory:</label>
    <div class="col-sm-10">
     <input type="text" class="form-control"  name="time" size="30" placeholder="<? echo $time; ?>">
    </div>
  </div>
   <div class="form-group">
    <label for="latitude" class="col-sm-2 control-label">Latitude at Advisory:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="lat" size="30" placeholder="<? echo $lat; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="longitutde" class="col-sm-2 control-label">Longitutde at Advisory:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="long" size="30" placeholder="<? echo $long; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="windSpeed" class="col-sm-2 control-label">Wind Speed at Advisory:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="wind" size="30" placeholder="<? echo $wind; ?>"><? echo $wind; ?>
    </div>
  </div>
  <div class="form-group">
    <label for="direction" class="col-sm-2 control-label">Direction at Advisory:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="direction" size="30" placeholder="<? echo $direct; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="movement" class="col-sm-2 control-label">Speed at Advisory:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="speed" size="30" placeholder="<? echo $speed; ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="pressure" class="col-sm-2 control-label">Pressure at Advisory:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="pressure" size="30" placeholder="<? echo $pressure; ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="Submit" value="Submit" class="btn btn-default">Submit</button>
    </div>
  </div>
  </form>
</body>
</html>