<!doctype html>
<html lang=''>
<head>
<style>
.intern
{
	padding:20px;
	margin:10px;
	background-color:grey;
}
button
{
	background-color:green;
	align:right;
	height:50px;
	width:100px;
}
</style>
<link rel="stylesheet" type="text/css" href="styles.css">
   <title>SELECTO</title>
</head>
<body>

<div id='cssmenu'>
<ul>
   <li class='active'><span>SELECTO</span></a></li>
   <li><a href='profile.html'><span>Profile</span></a></li>
   <li><a href='internship.html'><span>Internships</span></a></li>
   <li class='last'><a href='about.html'><span>About Us</span></a></li>
   <li class='last'><a href='login.html'><span>Sign Out</span></a></li>
</ul>
</div>
<br><br><br><br><br>
<h1 align="left">Internships Available</h1>
<br><br><br>
</body>
<?php
$connection = mysql_connect('localhost', 'root', ''); 
mysql_select_db('mydata');

$query = "SELECT * FROM internship";
$result = mysql_query($query); 
while($row = mysql_fetch_array($result)){  
echo '<div class="intern">';
echo  $row['course'] . "<br><br>" . $row['compay'] . "<br><p>Stipend:Rs." . $row['stipend'] ."<br>Duration:".$row['duration']."month<br>Start-date:" .$row['start date']."</p><br><br>";  
echo '</div>';
}
mysql_close();
?>
<html>
