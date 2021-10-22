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

    if(!empty($_POST["npass"]) && !empty($_POST["cpass"]))
    {
        $user->update_User($fname, $lname, $npass, $cpass, $contact, $email, $adress, $Cid);
    }
    else
    {
        $user->update_User_NoPass($fname, $lname, $contact, $email, $adress, $Cid);
    }
   
    
?>