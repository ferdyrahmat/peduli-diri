<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PeduliDiri</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-bar-rating/fontawesome-stars-o.css">
    <link rel="stylesheet" href="assets/vendors/jquery-bar-rating/fontawesome-stars.css">
    <link rel="stylesheet" href="assets/vendors/jquery.skeleton.loader/dist/jquery.skeleton.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/DataTables/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- Navbar -->
        <?php include "layout/navbar_layout.php"; ?>
        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            <?php include "layout/sidebar_layout.php"; ?>
            <!-- Content -->
            <div class="main-panel">
                <?php include "content.php"; ?>
                <!-- Footer -->
                <?php include "layout/footer_layout.php"; ?>
            </div>
        </div>
    </div>

    <script src="assets/vendors/base/vendor.bundle.base.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/vendors/jquery.skeleton.loader/dist/jquery.scheletrone.js"></script>
    <script src="assets/vendors/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/DataTables/js/dataTables.bootstrap4.min.js"></script>

    <?php
    if ($_GET['page'] == 'home') { ?>
        <script src="assets/js/home.js"></script>
    <?php
    } else if ($_GET['page'] == 'catatan-perjalanan') { ?>
        <script src="assets/js/travel-log.js"></script>
    <?php
    }
    ?>
</body>

</html>