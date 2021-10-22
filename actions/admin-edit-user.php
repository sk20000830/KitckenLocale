<?php
    include "../classes/admin.php";

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $adress = $_POST["adress"];
    $count = $_POST["count"];
    $userID = $_POST["userID"];

    $admin = new Admin();
    $admin->update_User($fname, $lname, $contact, $email, $adress, $count, $userID);
?>