<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbbase = "ap_21_3";
$table = "users";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbbase) or die ("Connection Failed");
?>