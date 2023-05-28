<?php
$servername = "localhost";
$username = "";
$password = "";
$database = "buenaroa";
$home = "http://localhost/buenaroa/";

//Prepared Hostinger

// $servername = "localhost";
// $username = "u235219407_buena";
// $password = "Buenaroa10";
// $database = "u235219407_buenaroa";
// $home = "https://buenaroa.store/";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
session_start();

?>