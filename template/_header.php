<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />


    <!--Custom CSS-->
    <link rel="stylesheet" href="./style.css">

    <?php
        require('functions.php');
    ?>

    <title>Document</title>
</head>

<body>

    <!-- Header Section Starts -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="fontRaleway fontSize14 text-black-50 m-0">22, Mosque Road, Frazer Town, Bangalore, Karnataka,
                560005.
            </p>
            <div class="fontRaleway fontSize14">
                <a href="./login.php" class="px-3 border-right border-left text-dark">Login</a>
                <a href="./cart.php#wishlist" class="px-3 border-right text-dark">Wishlist(<?php echo count($product->getData('wishlist'))?? "0"; ?>)</a>
            </div>
        </div>

        <!-- Primary Header -->
        <nav class="navbar navbar-expand-lg navbar-dark colorSecondaryBg">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">Shoppie</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto fontRubik">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">On Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./blogMain.php">Blogs <i class="fas fa-chevron-down"></i> </a>
                        </li>
                    </ul>
                    <form action="#" class="fontSize14 fontRaleway">
                        <a href="./cart.php" class="py-2 rounded-pill colorPrimaryBg">
                            <span class="fontSize16 px-2 text-white"> <i class="fas fa-shopping-cart"></i> </span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart'))?? "0"; ?></span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>

    </header>
    <!-- Header Section ends -->
    <!-- Main Section Starts -->
    <main id="main">
