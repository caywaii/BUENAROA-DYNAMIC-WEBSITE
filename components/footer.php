<?php 

$sql = "SELECT * FROM shopname";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {


    $fbLink = $row['facebookLink'];
    $instaLink = $row['InstagramLink'];
  }
}
?>
<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">

  <div class="container">

    <div class="row  justify-content-center">
      <div class="col-lg-6">
        <h3>Follow Us:</h3>
        <!-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p> -->
      </div>
    </div>

    <div class="social-links">
      <a href="<?= $fbLink ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="<?= $instaLink ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
    </div>

  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>Buenaroa</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vlava-free-bootstrap-one-page-template/ -->
    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>