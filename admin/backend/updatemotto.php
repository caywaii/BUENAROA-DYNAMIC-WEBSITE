<?php
include '../../includes/connection.php';


$motto = $_POST['busmotto'];



$stmnt = $conn->prepare("UPDATE shopname SET businessMotto = '". mysqli_real_escape_string($conn, $motto) . "'");
$stmnt->execute();

$stmnt->close();
$conn->close();

$_SESSION['status'] = "Your Business Motto is now updated successfully";
header('Location: ' . $home . 'admin/welcoming.php');
//Turning DREAMS into REALITY
?>
