<?php

require "../classes/user.php";

session_start();
$Cid = $_SESSION["user_id"];

$menuID = $_GET["menu_id"];

$user = new User();
$sub = $user -> get_menuPrice($menuID);
$user -> add_toCart($menuID, $sub, $Cid);

?>