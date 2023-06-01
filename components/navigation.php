<?php
//SELECTING QUERIES
include 'includes/connection.php';


$sql = "SELECT * FROM shopname";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    //Declared Variables
    $business_name = $row['businessName'];
    $business_motto = $row['businessMotto'];
    $business_starter = $row['aboutStarter'];
    $business_about = $row['aboutMessage'];
    $mainEmail = $row['mainEmail'];
    $altEmail = $row['altEmail'];
    $mainContact = $row['mainContact'];
    $altContact = $row['altContact'];
    $street = $row['street'];
    $city = $row['city'];
    $image = $row['image'];
    $fbLink = $row['facebookLink'];
    $instaLink = $row['InstagramLink'];
  }
}

$sqlGallery = "SELECT * FROM gallery";
$resultGall = $conn->query($sqlGallery);

$sqlFiles = "SELECT * FROM file";
$resultFiles = $conn->query($sqlFiles);
if ($resultFiles->num_rows > 0) {
  while ($rowFiles = $resultFiles->fetch_assoc()) {

    //Declared Variables
    $catering_one = $rowFiles['catering_one'];
  }
}

?>
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php"><img src="<?=$image?>"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li class="dropdown"><a href="#"><span><b>Inclusion</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="event.php">Event Planning & Styling</a></li>
              <li><a href="catering.php">Catering Services</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto"  href="index.php#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
