<?php
$server= "localhost";
$username= "root";
$password = "";
$db = "spa_dr";

$db = mysqli_connect("localhost","root","","spa_dr");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>