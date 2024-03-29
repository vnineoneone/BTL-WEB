<?php
session_start();
include_once "admin/config/config.php";
include_once "controllers/UserController.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sea Furniture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="vendor/owlcarousel/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>

    <script src="https://kit.fontawesome.com/8c2b9d94d1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

</head>

<body>

    <div class="">
        <?php
        if (count($_GET)) {
        ?>
            <div class="main1">
                <?php include("pages/header.php") ?>
                <?php include "pages/banner_link.php" ?>
            </div>
        <?php
        } else {
        ?>
            <div class="main">
                <?php include("pages/header.php"); ?>
                <div class="background"></div>
            </div>
        <?php
        }
        ?>
        <div class="container-md content">
            <?php include("pages/main.php"); ?>
        </div>
        <div class="footer">
            <?php include("pages/footer.php") ?>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>