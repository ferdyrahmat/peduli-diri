<?php
session_start();

if (isset($_SESSION['IsLogged'])) {
    header("location: home");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PeduliDiri</title>
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/css/animate.min.css">
    <link rel="stylesheet" href="http://localhost/peduli-diri-native/assets/css/style.css">
    <link rel="shortcut icon" href="http://localhost/peduli-diri-native/assets/images/favicon.png" />
</head>

<body>
    <?php

    switch ($_GET['page']) {
        case 'masuk':
            include "login.php";
            break;

        case 'daftar':
            include "register.php";
            break;

        default:
            # code...
            break;
    }

    ?>

    <script src="http://localhost/peduli-diri-native/assets/vendors/base/vendor.bundle.base.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/js/off-canvas.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/js/hoverable-collapse.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/js/template.js"></script>
    <script src="http://localhost/peduli-diri-native/assets/js/bootstrap.min.js"></script>

    <?php

    if ($_GET['page'] == 'masuk') {
    ?>
        <script src="assets/js/login.js"></script>
    <?php
    } else if ($_GET['page'] == 'daftar') {
    ?>
        <script src="assets/js/register.js"></script>
    <?php
    }
    ?>

</body>

</html>