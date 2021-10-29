<?php

require "../classes/user.php";

session_start();
$Cid = $_SESSION["user_id"];
$status = $_SESSION["status"];

$menuID = $_GET["menu_id"];

if($status == "U")
{
    $user = new User();
    $sub = $user -> get_menuPrice($menuID);
    $user -> add_toCart($menuID, $sub, $Cid);
}
else
{
    header("Location: ../login.php");
}


?>