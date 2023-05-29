<?php
include '../../includes/connection.php';


$facebook = $_POST['facebook'];
$insta = $_POST['insta'];


$stmnt = $conn->prepare("UPDATE shopname SET facebookLink = '". mysqli_real_escape_string($conn, $facebook) . "', InstagramLink = '". mysqli_real_escape_string($conn, $insta) . "'");
$stmnt->execute();

$stmnt->close();
$conn->close();

$_SESSION['status'] = "Your Business Motto is now updated successfully";
header('Location: ' . $home . 'admin/welcoming.php');
//Turning DREAMS into REALITY
?>
