<?php include './admin/koneksi/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Nicky - portofolio</title>
    <link rel="icon" type="image/x-icon" href="asset/pf/assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="asset/pf/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <?php include 'inc/nav.php' ?>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <?php include 'content/profil.php' ?>
        <hr class="m-0" />
        <!-- Experience-->
        <?php include 'content/pengalaman.php' ?>
        <hr class="m-0" />
        <!-- Education-->
        <?php include 'content/pendidikan.php' ?>
        <hr class="m-0" />
        <!-- Skills-->
        <?php include 'content/skill.php' ?>
        <hr class="m-0" />
        <!-- Interests-->
        <?php include 'content/interest.php' ?>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="asset/pf/js/scripts.js"></script>
</body>

</html>