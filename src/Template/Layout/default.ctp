<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <?= $this->Html->css('vendors.css') ?>
    <?= $this->Html->css('main.css') ?>

    <!-- Favicon -->
    
    <?= $this->Html->meta(['link' => 'img/favicon/96x96.png', 'rel' => 'icon', 'type' => 'image/png', 'sizes' => '96x96']); ?>
    <?= $this->Html->meta(['link' => 'img/favicon/32x32.png', 'rel' => 'icon', 'type' => 'image/png', 'sizes' => '32x32']); ?>
    <?= $this->Html->meta(['link' => 'img/favicon/-16x16.png', 'rel' => 'icon', 'type' => 'image/png', 'sizes' => '16x16']); ?>
    <?= $this->Html->meta(['link' => 'img/favicon/57x57.png', 'rel' => 'apple-touch-icon', 'type' => 'image/png', 'sizes' => '57x57']); ?>
    <?= $this->Html->meta(['link' => 'img/favicon/60x60.png', 'rel' => 'apple-touch-icon', 'type' => 'image/png', 'sizes' => '60x60']); ?>
    <?= $this->Html->meta(['link' => 'img/favicon/72x72.png', 'rel' => 'apple-touch-icon', 'type' => 'image/png', 'sizes' => '72x72']); ?>
    <?= $this->Html->meta(['link' => 'img/favicon/76x76.png', 'rel' => 'apple-touch-icon', 'type' => 'image/png', 'sizes' => '76x76']); ?>
    <?= $this->Html->meta(['link' => 'img/favicon/114x114.png', 'rel' => 'apple-touch-icon', 'type' => 'image/png', 'sizes' => '114x114']); ?>
    <?= $this->Html->meta(['link' => 'img/favicon/120x120.png', 'rel' => 'apple-touch-icon', 'type' => 'image/png', 'sizes' => '120x120']); ?>
    <?= $this->Html->meta(['link' => 'img/favicon/144x144.png', 'rel' => 'apple-touch-icon', 'type' => 'image/png', 'sizes' => '144x144']); ?>
    <?= $this->Html->meta(['link' => 'img/favicon/152x152.png', 'rel' => 'apple-touch-icon', 'type' => 'image/png', 'sizes' => '152x152']); ?>
    <?= $this->Html->meta(['link' => 'img/favicon/180x180.png', 'rel' => 'apple-touch-icon', 'type' => 'image/png', 'sizes' => '180x180']); ?>
    <?= $this->Html->meta(['link' => 'img/favicon/192x192.png', 'rel' => 'icon', 'type' => 'image/png', 'sizes' => '192x192']); ?>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Lup.</title>
</head>

<body class="preloader-visible" data-barba="wrapper">

    <!-- preloader start -->
    <div class="preloader js-preloader">
        <div class="preloader__bg"></div>

        <div class="preloader__progress">
            <div class="preloader__progress__inner"></div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- cursor start -->
    <div class="cursor js-cursor">
        <div class="cursor__wrapper">
            <div class="cursor__follower js-follower"></div>
            <div class="cursor__label js-label"></div>
            <div class="cursor__icon js-icon"></div>
        </div>
    </div>
    <!-- cursor end -->


    <!-- barba container start -->
    <div class="barba-container" data-barba="container">

        <!-- to-top-button start -->
        <div data-cursor class="backButton js-backButton">
            <span class="backButton__bg"></span>
            <div class="backButton__icon__wrap">
                <i class="backButton__button js-top-button" data-feather="arrow-up"></i>
            </div>
        </div>
        <!-- to-top-button end -->


        <main class="bg-dark-1">


             <?= $this->cell('Header'); ?>

            <?= $this->fetch('content'); ?>

            <?= $this->cell('Footer'); ?>


        </main>

    </div>
    <!-- barba container end -->


    <!-- JavaScript -->
    <?= $this->Html->script('vendors.js') ?>
    <?= $this->Html->script('main.js') ?>
</body>

</html>