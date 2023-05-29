<?php
//SELECTING QUERIES
include '../includes/connection.php';
include '../includes/auth.php';

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
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('components/header.php');
  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php"><img src="../<?= $image ?>"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="welcoming.php">Home</a></li>
          <li><a class="nav-link scrollto" href="welcoming.php#about">About</a></li>
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
          <li><a class="nav-link scrollto" href="index.php#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <?php

      if (isset($_SESSION['status'])) {
        echo "<h5 align='center' style='color:green;'>" . $_SESSION['status'] . "</h5>";
        unset($_SESSION['status']);
      }
      ?>
      <!-- BUSINESS BRANDING -->
      <form action="backend/updatebusiness.php" method="post" class="row g-3">
        <div class="col-md-12" align="center">
          <input type="text" class="form-control" value="<?= $business_name ?>" id="username" name="busname" style="text-align:center;  font-weight:bold;">
        </div>
        <div class="col-md" align="center">
          <input type="submit" name="register" class="btn btn-primary" value="Update Business Name">
        </div>
      </form>
      <br>
      <!-- Motto -->
      <form action="backend/updatemotto.php" method="post">
        <div class="row g-2">
          <div class="col-md-10" align="center">
            <input type="text" class="form-control" value="<?= $business_motto ?>" id="userpassword" name="busmotto" style="text-align:center;">
          </div>
          <br>
          <div class="col-md-2" align="center">
            <input type="submit" name="register" class="btn btn-primary" value="Update Motto">
          </div>
        </div>
      </form>
      <br>
      <!-- LOGO PICTURE -->
      <form action="backend/imageupl.php" method="post" enctype="multipart/form-data" class="row g-3">
        <!-- Logo Picture -->
        <div class="row g-2">
          <div class="col-md-10" align="center">
            <input type="file" class="form-control" name="image" id="customFile" />
          </div>
          <br>
          <div class="col-md-2" align="center">
            <input type="submit" name="register" class="btn btn-primary" value="Update Logo">
          </div>
        </div>

      </form>


    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>About Us</h2>
            <form action="backend/updatestarter.php" method="post" class="row g-3">
              <!-- Name -->
              <div class="col-md-12">
                <label for="username" class="form-label">Starter for About</label>
                <textarea type="text" class="form-control" value="<?= $business_starter ?>" id="username" name="aboutstarter" style="height:100px;"><?= $business_starter ?></textarea>
              </div>
              <div class="col-md">
                <input type="submit" name="register" class="btn btn-primary" value="Update Business About Starter">
              </div>
            </form>
            <br>

          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <form action="backend/updateabout.php" method="post" class="row g-3">
              <!-- Name -->
              <div class="col-md-12">
                <label for="username" class="form-label">About Business</label>
                <textarea type="text" class="form-control" value="<?= $business_about ?>" id="username" name="about" style="height:300px;"><?= $business_about ?></textarea>
              </div>
              <div class="col-md">
                <input type="submit" name="register" class="btn btn-primary" value="Update Business About">
              </div>
            </form>

          </div>
        </div>

      </div>
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title">
          <h2>Gallery</h2>
          <form action="backend/galleryupl.php" method="post" enctype="multipart/form-data" class="row g-3">
            <!-- Logo Picture -->
            <div class="row g-3">
              <div class="col-md-5" align="center">
                <input type="file" class="form-control" name="image" id="customFile" />
              </div>
              <div class="col-md-5">
                <select class="form-select" required name="gallery" id="amount" aria-label="Default select example">
                  <option value="" readonly>Identify</option>
                  <option value="Event Styling">Event Styling</option>
                  <option value="Catering & Food">Catering & Food</option>
                  <option value="Lights and Sound">Lights and Sound</option>
                </select>
              </div>
              <br>
              <div class="col-md-2" align="center">
                <input type="submit" name="register" class="btn btn-primary" value="Upload Photo">
              </div>
            </div>

          </form>

          <p>Upload photo you want to show in the Gallery</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".Event-Styling">Event Styling</li>
              <li data-filter=".Catering-Food">Catering & Food</li>
              <li data-filter=".Lights-Sound">Lights and Sound</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          <?php
          if ($resultGall->num_rows > 0) :
            while ($rowGall = $resultGall->fetch_assoc()) :
          ?>
              <div class="col-lg-4 col-md-6 portfolio-item <?= $rowGall['imageIdentifier'] ?>">
                <img src="../<?= $rowGall['imagePath'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 3</h4>
                  <p>Card</p>
                  <a href="../assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
          <?php
            endwhile;
          endif;
          ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>

          <!-- UPDATE CONTACT -->
          <div class="row mt-5 justify-content-center">
            <div class="col-lg-10">
              <form action="backend/updatecontact.php" method="post" role="form" class="php-email-form">
                <!-- @csrf -->
                <!-- CONTACT EMAIL -->
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="email" name="email_one" class="form-control" id="name" placeholder="Your Main Email" value="<?= $mainEmail ?>">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email_two" id="email" placeholder="Your Alternative Email" value="<?= $altEmail ?>">
                  </div>
                </div>
                <!-- CONTACT NUMBER -->
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="contact_one" class="form-control" id="name" placeholder="Your Main Contact" value="<?= $mainContact ?>">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="contact_two" id="email" placeholder="Your Alternative Contact" value="<?= $altContact ?>">
                  </div>
                </div>
                <!-- STREET AND PLACE -->
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="street" class="form-control" id="name" placeholder="Street" value="<?= $street ?>">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="city" id="email" placeholder="Barangay, City, Province" value="<?= $city ?>">
                  </div>
                </div>
                <br><br>
                <div class="col-md">
                  <input type="submit" name="register" class="btn btn-primary" value="Update Business Contact">
                </div>
              </form>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- End Contact Section -->

    <!-- ======= Footer Section ======= -->
    <section id="footeri2" class="about">
      <div class="container">
        <div class="section-title">
          <h2>SOCIAL LINKS</h2>
          <p>Paste link here!</p>

          <!-- UPDATE FOOTER -->
          <div class="row mt-5 justify-content-center">
            <div class="col-lg-10">
              <form action="backend/updatesocial.php" method="post" role="form" class="php-email-form">
                <!-- @csrf -->
                <!-- SOCIAL LINKS -->
                <div class="row">
                  <div class="col-md-5 form-group">
                    <input type="text" name="facebook" class="form-control" id="name" placeholder="Facebook Link" value="<?= $fbLink ?>">
                  </div>
                  <div class="col-md-5 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="insta" id="email" placeholder="Instagram Link" value="<?= $instaLink ?>">
                  </div>
                  <div class="col-md-2 form-group mt-3 mt-md-0">
                    <input type="submit" name="register" class="btn btn-primary" value="Update Business About">
                  </div>
                </div>
                <!-- CONTACT NUMBER
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="contact_one" class="form-control" id="name" placeholder="Your Main Contact" value="<?= $mainContact ?>">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="contact_two" id="email" placeholder="Your Alternative Contact" value="<?= $altContact ?>">
                  </div>
                </div> -->
                <!-- STREET AND PLACE -->
                <!-- <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="street" class="form-control" id="name" placeholder="Street" value="<?= $street ?>">
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="city" id="email" placeholder="Barangay, City, Province" value="<?= $city ?>">
                  </div>
                </div>
                <br><br>
                <div class="col-md">
                  <input type="submit" name="register" class="btn btn-primary" value="Update Business About">
                </div> -->
              </form>
            </div>

          </div>

        </div>

      </div>
    </section>

  </main>



  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}} -->

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>