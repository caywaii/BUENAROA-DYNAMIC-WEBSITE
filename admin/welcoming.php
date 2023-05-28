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

  }
}
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

  <?php
  include('components/navigation.php')
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <!-- LOGO PICTURE -->
      <form action="backend/imageupl.php" method="post" enctype="multipart/form-data">
        <label class="form-label" for="customFile">Upload Logo</label>
        <input type="file" class="form-control" name="image" id="customFile" style="width:800px;" />
        <div class="col-md" align="center">
          <br>
          <input type="submit" name="register" class="btn btn-primary" value="Update Logo">
        </div>
      </form>


      <!-- BUSINESS BRANDING -->
      <form action="backend/updatebusiness.php" method="post" class="row g-3">
        <?php

        if (isset($_SESSION['status'])) {
          echo "<h5 align='center'>" . $_SESSION['status'] . "</h5>";
          unset($_SESSION['status']);
        }
        ?>
        <!-- Logo Picture -->

        <!-- Name -->
        <div class="col-md-12" align="center">
          <label for="username" class="form-label">Business Name</label>
          <input type="text" class="form-control" value="<?= $business_name ?>" id="username" name="busname" style="width:800px;">
        </div>
        <div class="col-md" align="center">
          <input type="submit" name="register" class="btn btn-primary" value="Update Business Name">
        </div>
      </form>

      <!-- Motto -->
      <form action="backend/updatemotto.php" method="post" class="row g-2">
        <div class="col-md-12" align="center">
          <label for="userpassword" class="form-label">Motto</label>
          <input type="text" class="form-control" value="<?= $business_motto ?>" id="userpassword" name="busmotto" style="width:800px;">
        </div>
        <br>
        <div class="col-md" align="center">
          <input type="submit" name="register" class="btn btn-primary" value="Update Motto">
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
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}} -->

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>