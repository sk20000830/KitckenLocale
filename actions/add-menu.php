<?php

    require "../classes/admin.php";

    $Mname = $_POST["Mname"];
    $ingredient = $_POST["ingredient"];
    $category = $_POST["category"];
    $price = $_POST["price"];
    $Mpic = $_FILES["Mpic"]["name"];
    $MpicTmp = $_FILES["Mpic"]["tmp_name"];

    $target_dir = "../images/menu_pictures/";
    $target_file = $target_dir .basename($Mpic);

    $admin = new Admin();
    $admin -> addmenu($Mname, $category, $ingredient, $price, $Mpic, $MpicTmp, $target_file);
?>