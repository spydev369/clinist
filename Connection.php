<?php 
$dbservername = "localhost"; 
$dbusername = "root"; 
$dbpassword = ""; 
$dbname = "project"; 
$con = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname); 
if($con) 
{ 
echo "<div style='color:#000;'> connected</div>"; 
} else { 
echo "<div style='color:#000;'>not connected</div>"; 
} 
?> 
