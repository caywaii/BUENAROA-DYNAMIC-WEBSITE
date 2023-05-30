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
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h1>CATERING SERVICES</h1>
            <a href="#about" class="btn-get-started scrollto">View Gallery</a>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">
            <form action="backend/galleryupl.php" method="post" class="row g-3">
                <!-- Logo Picture -->
                <div class="row g-3">
                    <div class="col-md-5" align="center">
                        <input type="text" class="form-control" name="insert" id="insert" placeholder="Insert Food/Drink"/>
                    </div>
                    <div class="col-md-5">
                        <select class="form-select" required name="gallery" id="amount" aria-label="Default select example">
                            <option value="" readonly>Identify</option>
                            <option value="Soup">Soup</option>
                            <option value="Pasta">Pasta/Noodles</option>
                            <option value="Vegetables">Vegetables</option>
                            <option value="MixedSeafood">Mixed Seafoods</option>
                            <option value="Chicken">Chicken</option>
                            <option value="Pork">Pork</option>
                            <option value="Beef">Beef</option>
                            <option value="Dessert">Dessert</option>
                            <option value="Drinks">Drinks</option>
                            <option value="AddOns">Add Ons</option>

                        </select>
                    </div>
                    <br>
                    <div class="col-md-2" align="center">
                        <input type="submit" name="register" class="btn btn-primary" value="Upload Photo">
                    </div>
                </div>

            </form>
           
    <?php
    include('components/js.php');
    ?>
</body>

</html>