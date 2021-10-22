<?php

    require "../classes/admin.php";

    $Dtime = $_POST["Dtime"];

    $admin = new Admin();
    $admin -> manage_delivery($Dtime);
?>