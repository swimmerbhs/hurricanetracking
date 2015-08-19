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
        <li class="active"><a href="cat.php">Category Information</a></li>
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
<li>Storm Information</li>
<li class="active">Cateogry Information</li>
</ol>
<div class="cat">
<table>
<caption>Saffir-Simpson Wind Scale</caption>
<colgroup>
<col style="width: 16%;"align="center" /></col> 
<col style="width: 16%;" align="center" /></col> 
<col style="width: 68%;" align="center" /></col> 
</colgroup>
<thead>
<tr>
<th>Catagory</th>
<th>Sustained Winds</th>
<th>Types of Damage Due to Hurricane Winds</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tropical<br />Depression</td>
<td>Less than 35MPH</td>
<td></td>
</tr>
<tr>
<td>Tropical<br />Storm</td>
<td>35MPH - 74MPH</td>
<td></td>
</tr>
<tr>
<td>1</td>
<td>75MPH - 95MPH</td>
<td><p style="font-size=9px"><strong>Very dangerous winds will produce some damage: </strong><br />Well-constructed frame homes could have damage to roof, shingles, vinyl siding and gutters. Large branches of trees will snap and shallowly rooted trees may be toppled. Extensive damage to power lines and poles likely will result in power outages that could last a few to several days.</p></td>
</tr>
<tr>
<td>2</td>
<td>96MPH - 110MPH</td>
<td><p><strong>Extremely dangerous winds will cause extensive damage: </strong><br /> Well-constructed frame homes could sustain major roof and siding damage. Many shallowly rooted trees will be snapped or uprooted and block numerous roads. Near-total power loss is expected with outages that could last from several days to weeks.</p></td>
</tr>
<tr>
<td>3</td>
<td>111MPH - 129MPH</td>
<td><p><strong>Devastating damage will occur: </strong><br />Well-built framed homes may incur major damage or removal of roof decking and gable ends. Many trees will be snapped or uprooted, blocking numerous roads. Electricity and water will be unavailable for several days to weeks after the storm passes.</p></td>
</tr>
<tr>
<td>4</td>
<td>130MPH - 156MPH</td>
<td><p><strong>Catastrophic damage will occur: </strong><br />Well-built framed homes can sustain severe damage with loss of most of the roof structure and/or some exterior walls. Most trees will be snapped or uprooted and power poles downed. Fallen trees and power poles will isolate residential areas. Power outages will last weeks to possibly months. Most of the area will be uninhabitable for weeks or months.</p></td>
</tr>
<tr>
<td>5</td>
<td>More then 157MPH</td>
<td><p><strong>Catastrophic damage will occur: </strong><br />A high percentage of framed homes will be destroyed, with total roof failure and wall collapse. Fallen trees and power poles will isolate residential areas. Power outages will last for weeks to possibly months. Most of the area will be uninhabitable for weeks or months</p></td>
</tr>
</tbody>
</table>
</div>
</body>
</html>