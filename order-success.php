<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<?php
require "classes/user.php";

$Oid = $_GET["order_id"];

$user = new User();
$Ddata = $user->get_deliveryTime($Oid);
?>

<body>
    <div class="mb-5 pt-5" >
        <div class="container">
            <div class="mx-auto text-center">
                <a href="menu.php" class="btn btn-danger "><i class="fas fa-arrow-left"></i> Go Back to Menu</a>
            </div>
            <div class="text-center fs-5 mt-5">
                <span class="border border-2 border-dark rounded px-5 py-1 me-1">Shopping Cart</span>
                <i class="fas fa-caret-right"></i>
                <span class="border border-2 border-dark rounded  px-5 py-1 me-1">Input Adress</span>
                <i class="fas fa-caret-right"></i>
                <span class="border border-2 border-dark rounded px-5 py-1 me-1">Order Confirmation</span>
                <i class="fas fa-caret-right"></i>
                <span class="border border-2 border-dark bg-dark text-light rounded px-5 py-1">Order Completed</span>
            </div>
            <div class="mt-5 mx-auto text-center">
                <h1>Thank you very much !!!</h1>
                <h5 class="mt-5">Esitimate Arriving Time: <span class="text-danger"><?=$Ddata['delivery_time']?></span></h5>
                <h5 class="mt-5">Total Price: <span class="text-danger"><?=$Ddata['total_price']?>$</span></h5>
                <a href="index.php" class="btn btn-warning mt-5">GO BACK TO HOME</a>
            </div>
        </div>

        
