<?php
include '../../includes/connection.php';


$about = $_POST['about'];



$stmnt = $conn->prepare("UPDATE shopname SET aboutMessage = '$about'");
$stmnt->execute();

$stmnt->close();
$conn->close();

$_SESSION['status'] = "Your Business About is now updated successfully";
header('Location: ' . $home . 'admin/welcoming.php');



//We specialize in reating a truly captivating and unforgettable experiences. They offer services for various occasions, such as wedding and parties, and work closely with clients to bring their dream event to life. With a keen sense of beauty and elegance, we strive to make each event milestone for its clients. Our ultimate goal is to create breathaking moments that leave a lasting impression on both clients and their guests.
?>
