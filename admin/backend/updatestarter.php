<?php
include '../../includes/connection.php';


$starter = $_POST['aboutstarter'];



$stmnt = $conn->prepare("UPDATE shopname SET aboutStarter = '". mysqli_real_escape_string($conn, $starter) . "'");
$stmnt->execute();

$stmnt->close();
$conn->close();

$_SESSION['status'] = "Your Business Starter is now updated successfully";
header('Location: ' . $home . 'admin/welcoming.php');



//We mainly focuses in providing Event and Catering Services. 
?>
