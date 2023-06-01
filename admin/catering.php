<?php
include '../includes/connection.php';
include '../includes/auth.php';
$sql = "SELECT * FROM shopname";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    //Declared Variables
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
</head>

<body>
   <!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.php"><img src="../<?=$image?>"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="welcoming.php">Home</a></li>
          <li><a class="nav-link scrollto" href="welcoming.php#about">About</a></li>
          <li class="dropdown"><a href="#"><span><b>Inclusion</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="event.php">Event Planning & Styling</a></li>
              <li><a href="catering.php">Catering Services</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto"  href="welcoming.php#portfolio">Gallery</a></li>
          <li><a class="nav-link scrollto" href="welcoming.php#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="backend/logout.php" id="logout">Log Out</a></li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container">
            <?php

            if (isset($_SESSION['status'])) {
                echo "<h5 align='center' style='color:green;'>" . $_SESSION['status'] . "</h5>";
                unset($_SESSION['status']);
            }
            ?>
            <div class="section-title">
                <h2>Catering Services</h2>
            </div>

            <div class="row  d-flex align-items-stretch">

                <div class="col-lg-6 faq-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h4>FOOD MENU 2023</h4>
                    <p>
                        Buenaroa provides a wide range of food options that its client can relish. Additionally, if you desire, you can also test the food before making a decision.
                        <br><br>
                    <form action="backend/event_file/catering_one.php" method="post" enctype="multipart/form-data">
                        <input type="file" class="form-control" name="pdfFile" id="customFile" /> <br>
                        <div align="center">
                            <input type="submit" name="submit" class="btn btn-primary" value="Upload File" id="btnView">
                        </div>

                    </form>
                    </p>


                </div>


                <div class="col-lg-6 faq-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h4>PER PLATE QUOTATION 2023</h4>
                    <p>
                        Here are the pricing details per person for the food options ensuring a clear understanding of the costs involved.
                        <br><br>
                    <form action="backend/event_file/catering_two.php" method="post" enctype="multipart/form-data">
                        <input type="file" class="form-control" name="pdfFile" id="customFile" /> <br>
                        <div align="center">
                            <input type="submit" name="submit" class="btn btn-primary" value="Upload File" id="btnView">
                        </div>

                    </form>
                    </p>


                </div>


                <!-- <div class="col-lg-6 faq-item">
                    <i class="bx bx-help-circle"></i>
                    <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
                    </p>
                </div>

                <div class="col-lg-6 faq-item">
                    <i class="bx bx-help-circle"></i>
                    <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                    </p>
                </div>

                <div class="col-lg-6 faq-item">
                    <i class="bx bx-help-circle"></i>
                    <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                </div>

                <div class="col-lg-6 faq-item">
                    <i class="bx bx-help-circle"></i>
                    <h4>Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?</h4>
                    <p>
                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                    </p>
                </div> -->

            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <?php
    include('components/js.php');
    ?>
</body>

</html>