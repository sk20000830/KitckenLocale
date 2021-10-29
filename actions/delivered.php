<?php
    require "../classes/admin.php";

    $Oid = $_POST["Oid"];

    $admin = new Admin();
    $admin->update_orderStatus($Oid);
?>