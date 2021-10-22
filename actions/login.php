<?php
    include "../classes/user.php";

    //getting/gathering of data entered by user in register form

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    //object for class User
    $user = new User();

    //calling of inner method in the class
    $user->login($email, $pass);
?>