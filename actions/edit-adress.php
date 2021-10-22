<?php
    include "../classes/user.php";

    session_start();

    $Cid = $_SESSION["user_id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $adress = $_POST["adress"];
    $npass = $_POST["npass"];
    $cpass = $_POST["cpass"];

    $user = new User();

        $user->update_adress($fname, $lname, $contact, $email, $adress, $Cid);
    
   
    
?>