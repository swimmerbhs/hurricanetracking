<?php
include 'database_connector.php'; //include database connection information0

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/hurricane.ico">
<link href="css/index.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href="/css/index.css" rel="stylesheet" type="text/css" />
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<style type='text/css'>
body{ background-color: black; }
/*This will work for chrome */
                    .col-md-8
                    {
                        width:875px;
                    }
/*This will work for firefox*/
                    @-moz-document url-prefix() {
                        .col-md-8{
                        width:887px;
                    }
                    }
                @media (min-width: 979px) {
  ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;
  }
}
              </style>
</script>
<script>
var x=new google.maps.LatLng(25.754281, -80.383565);
function initialize()
{
var mapProp = {
  center:x,
  zoom:6,
  mapTypeId:google.maps.MapTypeId.HYBRID
  };
  
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:x,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Hurricane Home 2014</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">Hurricane Tracking</a>
    </div>
<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
         <li><a href="cat.php">Category Information</a></li> 
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Current
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="Ana.php">Ana</a></li>
            <li><a href="Bill.php">Bill</a></li>
            <!--<li><a href="Claudette.php">Claudette</a></li>
            <!--<li><a href="Danny.php">Danny</a></li>
            <!--<li><a href="Erika.php">Erika</a></li>
            <!--<li><a href="Fred.php">Fred</a></li>-->
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Historical
          <span class="caret"></span></a>
 <ul class="dropdown-menu">
          <li>2014</li>
            <li class="divider"></li>
            <li><a href="Arthur.php">Arthur</a></li>
            <li><a href="Bertha.php">Bertha</a></li>
            <li><a href="Cristobal.php">Cristobal</a></li>
            <li><a href="Dolly.php">Dolly</a></li>
            <li><a href="Edouard.php">Edouard</a></li>
            <li><a href="Fay.php">Fay</a></li>
	    <li><a href="Gonzalo.php">Gonzalo</a></li>
            <li><a href="Hanna.php">Hanna</a></li>
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
    <li class="active">2014 Hurricane Season</li>
</ol>
<div class="container.fluid" style="background-color:black">
 <div class="results col-md-8">
<table class="table table-hover">
<tr align=center>
	  <th>Catagory</th>
	  <th>Name</th>
	  <th>Date</th>
	  <th>Update Time</th>
          <th>Latitude</th>
	  <th>Longitude</th>
           <th>Wind Speed</th>
	  <th>Direction</th>
	  <th>Movement</th>
	  <th>Pressure</th>
    </tr>
<?php
$result=mysqli_query($con, "select * from Spots14  LIMIT 30, 30 ");	 
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
 ?>
<tr>
<td><? echo $cat; ?></td>
<td><? echo $name; ?></td>
<td><? echo $date; ?></td>
<td><? echo $time; ?></td>
<td><? echo $lat; ?></td>
<td><? echo $long; ?></td>
<td><? echo $wind; ?></td>
<td><? echo $direct; ?></td>
<td><? echo $speed; ?></td>
<td><? echo $pressure; ?></td>
</tr>

<?php
}
?>
</table>
<nav>
  <ul class="pagination pagination-sm">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="index.php">1</a></li>
    <li><a href="index2.php">2</a></li>
    <li><a href="index3.php">3</a></li>
    <li><a href="index.4.php">4</a></li>
    <li><a href="index5.php">5</a></li>
    <li><a href="index6.php">6</a></li>
    <li><a href="index7.php">7</a></li>
    <li><a href="index.8.php">8</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
<div class="col-md-4">
<script type="text/javascript">
document.write('\x3Cscript type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');
</script>
<script type="text/javascript">
(
function() {
 var params = {rssmikle_url: "http://www.nhc.noaa.gov/nhc_at1.xml",rssmikle_frame_width: "450",rssmikle_frame_height: "90",frame_height_by_article: "0",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "on",autoscroll: "off",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "off",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "on",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %k:%M:%S",item_description_style: "text+tn",item_thumbnail: "full",item_thumbnail_selection: "auto",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script>
<div id="googleMap" style="width:450px;height:380px;"></div>
</div>
</div>
</body>
</html>