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

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container">

            <div class="section-title">
                <h2>Event Planning & Styling</h2>
                <p>Feel free to explore the various styling options available for you to check out.</p>
            </div>

            <div class="row  d-flex align-items-stretch">

                <div class="col-lg-6 faq-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h4>SEMI FULL EVENT STYLING</h4>
                    <form action="backend/event_file/event_one.php" method="post" enctype="multipart/form-data">
                        <p>
                            <input type="file" class="form-control" name="pdfFile" id="customFile" /> <br>
                        <div align="center">
                            <input type="submit" name="submit" class="btn btn-primary" value="Upload File" id="btnView">
                        </div>

                    </form>
                    </p>


                </div>

                <div class="col-lg-6 faq-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h4>FULL STYLING CUSTOMIZED PACKAGE</h4>
                    <form action="backend/event_file/event_two.php" method="post" enctype="multipart/form-data">
                        <p>
                            <input type="file" class="form-control" name="pdfFile" id="customFile" /> <br>
                        <div align="center">
                            <input type="submit" name="submit" class="btn btn-primary" value="Upload File" id="btnView">
                        </div>

                    </form>
                    </p>
                </div>

                <div class="col-lg-6 faq-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h4>A LA CARTE SERVICES</h4>
                   <form action="backend/event_file/event_three.php" method="post" enctype="multipart/form-data">
                        <p>
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