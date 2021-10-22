<?php
    include "../classes/user.php";

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $adress = $_POST["adress"];
    $pass = $_POST["pass"];

    $user = new User();

    $user->createUser($fname, $lname, $pass, $contact, $email, $adress);
?>