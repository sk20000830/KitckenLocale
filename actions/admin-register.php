<?php
    include "../classes/admin.php";

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $adress = $_POST["adress"];
    $pass = $_POST["pass"];

    $admin = new Admin();

    $admin->add_User($fname, $lname, $pass, $contact, $email, $adress);
?>