<?php

    require "../classes/user.php";

    $Wtime = $_POST["Wtime"];

    date_default_timezone_set('Asia/Tokyo');
    $getT = new DateTime();
    $dt = $getT->modify("+$Wtime minute");

    $selectD = $_POST["Dtime"];
    $pretime = $_POST["Otime"];
    $insttime = $dt->format("H:i");

    $user = new User();
    $user->organize_info($selectD, $pretime, $insttime);
?>