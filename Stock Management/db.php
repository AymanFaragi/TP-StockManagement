<?php
$host="localhost";
$user="root";
$pass="AY1228_fa";
$db="stock";
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>