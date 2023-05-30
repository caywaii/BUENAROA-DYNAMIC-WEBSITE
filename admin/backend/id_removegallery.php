<?php
include '../../includes/connection.php';


$gallery_id = $_GET['gallery_id'];



$stmnt = $conn->prepare("DELETE FROM gallery WHERE gallery_id='$gallery_id'");
$stmnt->execute();

$stmnt->close();
$conn->close();

$_SESSION['status'] = "Gallery is Deleted";
header('Location: ' . $home . 'admin/welcoming.php');




?>
