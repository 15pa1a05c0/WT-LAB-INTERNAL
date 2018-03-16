<?php
$server="localhost";
$username="root";
$pass="";
$db="property";
$conn=mysqli_connect($server,$username,$pass,$db);
if(!$conn){
   echo "failed to connect";
}
?>
