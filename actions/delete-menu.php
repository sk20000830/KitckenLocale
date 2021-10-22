<?php

    require "../classes/admin.php";
    
    $Cmenu = $_GET["menu_id"];
    $action = $_GET["action"];

    $admin = new Admin();
    $admin -> delete_menu($Cmenu, $action);
?>