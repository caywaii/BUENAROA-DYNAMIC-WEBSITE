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
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('components/header.php');
  ?>
</head>

<body>

  <?php
  include('components/navigation.php')
  ?>

  <!-- UPDATE TITLE -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="hero-container">

      <form action="backend/updatebusiness.php" method="post" class="row g-3">
        <?php

        if (isset($_SESSION['status'])) {
          echo "<h5 align='center'>" . $_SESSION['status'] . "</h5>";
          unset($_SESSION['status']);
        }
        ?>
        <!-- Name -->
        <div class="col-md-12" align="center">
          <label for="username" class="form-label">Business Name</label>
          <input type="text" class="form-control" value="<?= $business_name ?>" id="username" name="busname" style="width:800px;">
        </div>

        <br>
        <!-- Motto -->
        <div class="col-md-12" align="center">
          <label for="userpassword" class="form-label">Motto</label>
          <input type="text" class="form-control" value="<?= $business_motto ?>" id="userpassword" name="busmotto" style="width:800px;">
        </div>
        <br>
        <div class="col-md" align="center">
          <input type="submit" name="register" class="btn btn-primary" value="Update Business Branding">
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
                <textarea type="text" class="form-control" value="<?= $business_starter ?>" id="username" name="aboutstarter" style="width:500px; height:100px;"></textarea>
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
                <textarea type="text" class="form-control" value="<?= $business_about ?>" id="username" name="about" style="width:500px; height:300px;"></textarea>
              </div>
              <div class="col-md">
                <input type="submit" name="register" class="btn btn-primary" value="Update Business About">
              </div>
            </form>

          </div>
        </div>

      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <!-- {{-- <p>Magnam dolores commodi suscipituia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>
      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div> --}} -->
          <!-- <div class="container">
            <div class="row mt-5 justify-content-center">

              <div class="col-lg-10">

                <div class="info-wrap">
                  <div class="row">
                    <div class="col-lg-4 info">
                      <i class="bi bi-geo-alt"></i>
                      <h4>Location:</h4>
                      <p><?= $street ?><br><?= $city ?></p>
                    </div>

                    <div class="col-lg-4 info mt-4 mt-lg-0">
                      <i class="bi bi-envelope"></i>
                      <h4>Email:</h4>
                      <p><?= $mainEmail ?><br><?= $altEmail ?></p>
                    </div>

                    <div class="col-lg-4 info mt-4 mt-lg-0">
                      <i class="bi bi-phone"></i>
                      <h4>Call:</h4>
                      <p><?= $mainContact ?><br><?= $altContact ?></p>
                    </div>
                  </div>
                </div>

              </div>

            </div> -->
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
                  <input type="submit" name="register" class="btn btn-primary" value="Update Business About">
                </div>
              </form>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- End Contact Section -->

  </main>



  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}} -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>