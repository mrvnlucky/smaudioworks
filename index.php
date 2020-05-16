<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <title>SM Audioworks</title>
</head>

<body>
    <?php require('config.php'); ?>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">
            <img src="" widht="30" height="30" alt="">
            SM Audioworks
        </a> <!-- .navbar-brand -->

        <!-- Navbar Hamburger Menu Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> <!-- .navbar-toggler -->

        <!-- Navbar Menus -->
        <div class="navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="#" class="nav-link">Home<span class="sr-only">(current)</span></a>
                </li> <!-- .nav-item -->
                <li class="nav-item">
                    <a href="#" class="nav-link">Promos</a>
                </li> <!-- .nav-item -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" arialabelledby="navbarDropdown">
                        <?php
                        $query = "SELECT * FROM itemtypes";
                        $itemtype = mysqli_query($conn, $query) or die("database error: " . mysqli_error($conn));
                        while ($itemtype = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href="#" class="dropdown-item"><?php echo $itemtype['itemtype_name']; ?></a>
                        <?php } ?>
                    </div> <!-- .dropdown-menu -->
                </li> <!-- .nav-item -->
            </ul> <!-- .navbar-nav -->

            <!-- Sign Up and Login Button -->
            <form class="form-inline">
                <button class="btn btn-success" type="button">Sign Up</button>
                <button class="btn btn-outline-secondary" type="button">Login</button>
            </form> <!-- .form-inline -->
        </div> <!-- #navbarSupportedContent -->
    </nav> <!-- .navbar -->

    <!-- Carousel -->
    <div class="container">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
            </ol> <!-- .carousel-indicators -->

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/eqw.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/micw.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/speakerw.jpg" alt="Third slide">
                </div>
            </div> <!-- .carousel-inner -->

            <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a> <!-- .carousel-control-prev -->

            <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> <!-- .carousel-control-next -->

        </div> <!-- #carouselIndicators -->
    </div> <!-- .container -->

    <br>
    <br>

    <!-- Cards -->
    <div class="container">
        <div class="row">
            <?php
            $query = "SELECT * FROM items";
            $result = mysqli_query($conn, $query) or die("database error: " . mysqli_error($conn));
            while ($item = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $item['item_img']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['item_name']; ?></h5>
                            <p class="card-text"><?php echo $item['item_desc']; ?></p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div> <!-- .col-sm-3 -->
            <?php } ?>
        </div> <!-- .row -->
    </div> <!-- .container -->

</body>