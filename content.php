<?php

switch ($_GET['page']) {
    case 'home':
        include "views/home.php";
        break;

    case 'catatan-perjalanan':
        include "views/travel_log.php";
        break;

    case 'tambah-catatan':
        include "views/insert_travel_log.php";
        break;

    default:
        # code...
        break;
}