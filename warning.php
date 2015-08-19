<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<link rel="shortcut icon" href="hurricane.ico">
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href="/css/index.css" rel="stylesheet" type="text/css" />
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
<title>Storm Information</title>
</head>
<body>
<nav class="navbar navbar-inverse  navbar-static-top" role="navigation" id="topnavbar">
  <div class="container-fluid">
    <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Hurricane Tracking</a>
    </div>
<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="warning.php">Watches/Warnings</a></li>
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
            <!--<li><a href="Erika.php">Erika</a></li>
            <!--<li><a href="Fred.php">Fred</a></li>-->
          </ul>
        </li>
             <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Historical
          <span class="caret"></span></a>
 <ul class="dropdown-menu">
            <!--<li>2015</li>
            <li class="divider"></li>
            <li><a href="15/Ana.php">Ana</a></li>
            <li><a href="15/Bill.php">Bill</a></li>
            <li><a href="15/Claudette.php">Claudette</a></li>
            <li><a href="15/Danny.php">Danny</a></li>
            <li><a href="15/Erika.php">Erika</a></li>
            <li><a href="15/Fred.php">Fred</a></li>
			<li class="divider"></li>-->
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
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
</div>
</nav>
<ol class="breadcrumb">
   <li><a href="index.php">Home</a></li>
<li class="active">Storm Information</li>
</ol>
<div class="cat">
<table cellspacing="5px">
<caption>Hurricane Watches and Warnings</caption>
<thead>
<tr>
<th>Condition</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td>Watch</td>
<td>A <em>watch</em> lets you know that weather conditions are favorable for a hazard to occur. It literally means "be on guard!" During a weather watch, gather awareness of the specific threat and prepare for action - monitor the weather to find out if severe weather conditions have deteriorated and discuss your protective action plans with your family.</td>
</tr>
<tr>
<td>Warning</td>
<td>A <em>warning</em> requires immediate action. This means a weather hazard is imminent - it is either occurring (a tornado has been spotted, for example) - or it is about to occur at any moment. During a weather warning, it is important to take action: grab the emergency kit you have prepared in advance and head to safety immediately. Both watches and warnings are important, but warnings are more urgent.</td>
</tr>
<tr>
<td>Tropical Storm Watch:</td>
<td> An announcement that tropical-storm conditions are possible within the specified area. </td>
</tr>
<tr>
<td>Tropical Storm Warning:</td>
<td>An announcement that tropical-storm conditions are expected within the specified area. <strong>Watches are issued 48 hours in advance of the anticipated onset of tropical-storm-force winds.</strong></td>
</tr>
<tr>
<td>Hurricane Watch:</td>
<td>An announcement that tropical-storm conditions are expected within the specified area. </td>
</tr>
<tr>
<td>Hurricane Warning:</td>
<td>  An announcement that hurricane conditions are expected within the specified area. <strong>Warnings are issued 36 hours in advance of the anticipated onset of tropical-storm-force winds.</strong></td>
</tr>
<tr>
<td>Extreme Wind Warning</td>
<td> Extreme sustained winds of a major hurricane (115 mph or greater), usually associated with the eyewall, are expected to begin within an hour</td>
</tr>
</tbody>
</table>
</div>
</body>
</html>