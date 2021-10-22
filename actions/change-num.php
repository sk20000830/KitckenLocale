<?php

    require "../classes/user.php";

    $num = $_POST["num"];
    $sub = $_POST["price"] * $_POST["num"];
    $Sid = $_POST["id"];

    $user = new User();
    $user -> change_num($num, $sub, $Sid);
?>