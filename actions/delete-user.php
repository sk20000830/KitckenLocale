<?php

    require "../classes/admin.php";
    
    $userID = $_GET["user_id"];
    $action = $_GET["action"];

    $admin = new Admin();
    $admin -> delete_user($userID, $action);
?>