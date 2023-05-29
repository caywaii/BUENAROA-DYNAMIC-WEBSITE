<?php
include '../../includes/connection.php';


$mainEmail = $_POST['email_one'];
$altEmail = $_POST['email_two'];
$mainContact = $_POST['contact_one'];
$altContact = $_POST['contact_two'];
$street = $_POST['street'];
$city = $_POST['city'];



$stmnt = $conn->prepare("UPDATE shopname SET mainEmail = '$mainEmail', altEmail = '$altEmail', mainContact = '$mainContact', altContact = '$altContact', street = '$street', city ='$city'");
$stmnt->execute();

$stmnt->close();
$conn->close();

$_SESSION['status'] = "Your Contact/s is now updated successfully";
header('Location: ' . $home . 'admin/welcoming.php');
?>