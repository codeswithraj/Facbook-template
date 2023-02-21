<?php
$url="localhost";
$server="root";
$password="";
$dbname="fb";
$conn=Mysqli_connect($url,$server,$password,$dbname);
if(!$conn){
    die("Database Is not connected".mysqli_error($conn));
}
?>