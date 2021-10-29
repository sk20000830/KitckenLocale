<?php

    require "../classes/user.php";

    $orderD = $_POST["orderD"];
    $deliveryT = $_POST["deliveryT"];
    $totalQ = $_POST["totalQ"];
    $totalP = $_POST["totalP"];
    $note = $_POST["note"];
    $Cid = $_POST["userID"];

    $user = new User();
    $user->add_order($orderD, $deliveryT, $totalQ, $totalP, $note, $Cid);
?>