 <?php
$sql = "SELECT * FROM shopname";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    //Declared Variables
    $image = $row['image'];

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
              <!-- <li class="dropdown"><a href="#"><span>Event Styling</span> <i class="bi bi-chevron-right"></i></a>  -->
              <li class="dropdown"><a href="event.php"><span>Event Planning and Styling</span></a>
                <!-- <ul>
                  <li><a href="#">Balloon Arrangement</a></li>
                  <li><a href="#">Flower Arrangement</a></li>
                  <li><a href="#">Back Drop</a></li>
                  <li><a href="#">Machines</a></li>
                </ul> -->
              </li>
              <li class="dropdown"><a href="catering.php"><span>Catering Services</span></a>
                <!-- <ul>
                  <li><a href="#">Appetizers</a></li>
                  <li><a href="#">Lunch</a></li>
                  <li><a href="#">Snacks</a></li>
                  <li><a href="#">Drinks</a></li>
                  <li><a href="#">Dessert</a></li>
                </ul>  -->
              </li>

              <li><a href="sound.php">Sound System and Lights Rental</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto"  href="index.php#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
