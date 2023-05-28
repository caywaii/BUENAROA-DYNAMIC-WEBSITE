<?php
include '../../includes/connection.php';


$name = $_POST['busname'];
$motto = $_POST['busmotto'];



$stmnt = $conn->prepare("UPDATE shopname SET businessName = '$name', businessMotto = '$motto'");
$stmnt->execute();

$stmnt->close();
$conn->close();

$_SESSION['status'] = "Your Business Name is now updated successfully";
header('Location: ' . $home . 'admin/welcoming.php');
?>