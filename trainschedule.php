<!DOCTYPE html>
<?php 
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
?>
<html>
<head>
<LINK REL="STYLESHEET" HREF="STYLE.CSS">
<style type="text/css">
#Passengers	{
			margin:auto;
			margin-top: 250px;
			width: 30%;
			height: 80%;
			padding: auto;
			padding-top: 50px;
			padding-left: 50px;
			background-color: rgba(0,0,0,0.3);
      border-radius: 25px;
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 80%;

		}
html { 
		  background: url(img/bg1.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}

#Passengers td, #Passengers th {
  border: 1px solid #ddd;
  padding: 15px;
}

#Passengers tr:nth-child(even){background-color: #f2f2f2;}

#Passengers tr:hover {background-color: #ddd;}

#Passengers th {
  padding-top: 50x;
  padding-bottom: 12px;
  text-align: <center></center>;
  background-color: #4bebe3;
  color: white;
}
</style>
</head>
<body>
<?php
		include ('header.php');
	?>
<table id="Passengers">
  <tr>
    <th>Train name</th>
    <th>Departure</th>
    <th>Arrival</th>
    <th>Platform</th>
  </tr>
  <tr>
    <td>Rajdhani Express</td>
    <td>22:15</td>
    <td>03:30</td>
    <td>2</td>
  </tr>
  <tr>
    <td>Duronto Express</td>
    <td>12:05</td>
    <td>06:00</td>
    <td>4</td>
  </tr>
  <tr>
    <td>Geetanjali Express</td>
    <td>03:45</td>
    <td>10:00</td>
    <td>1</td>
  </tr>
  <tr>
    <td>Garibh Rath</td>
    <td>18:20</td>
    <td>01:40</td>
    <td>6</td>
  </tr>
  <tr>
    <td>Mysore Express</td>
    <td>04:25</td>
    <td>07:30</td>
    <td>2</td>
  </tr>
 

</table>

</body>
</html>