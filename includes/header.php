<?php 
    $path = $_SESSION['path'];
    $page = $_SESSION['page'];
    $link = ($path === '' ? "assets/" : "../assets/");
    $linkpage = ($path === '' ? "" : "../");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Official Website of ITCD Corporation">
    <meta name="keywords" content="Website, Tracking, Fleet Management">
    <meta name="author" content="ITCD Dev Team">

    <title>ITCD Corporation</title>
    <link rel="shortcut icon" type="image/png" sizes="32x32" href=<?= $link."img/logo.png" ?> />
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href=<?= $link."css/fontawesome-all.min.css?v=5.2.0" ?> />

    <link rel="stylesheet" type="text/css" href=<?= $link."css/bootstrap.min.css?v=4.0.0" ?> />
    <link rel="stylesheet" type="text/css" href=<?= $link."css/owl.carousel.min.css?v=2.0.0" ?> />
    <link rel="stylesheet" type="text/css" href=<?= $link."css/owl.theme.default.min.css?v=2.0.0" ?> />
    <link rel="stylesheet" type="text/css" href=<?= $link."css/animate.css?v=3.7.0" ?> />
    <link rel="stylesheet" type="text/css" href=<?= $link."css/main.css?v=1.2.0" ?> />

    <?php if ($path === '') {?>
        <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1533195059" />
        <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
    <?php } ?>
    <noscript>
        <div class="noscript text-center">
            <div class="center-div">
                <img src="<?= $link."img/noscript.png" ?>" alt="no image" style="width:250px;height:auto;"/>
                <br><br><br>
                <h1 class="text-center">Please Allow Javascript To Run. Thank You!</h1>
            </div>
        </div>
    </noscript>
</head>

<body> 
    <?php require 'menu.php'; ?>