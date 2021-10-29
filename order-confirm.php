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

    date_default_timezone_set('Asia/Tokyo');

    session_start();
    $Cid = $_SESSION["user_id"];
    $status = $_SESSION["status"];

    $note = $_POST["note"];
    $selectD = $_POST["Dtime"];
    $pretime = $_POST["pretime"];
    $open = $_POST["open"];
    $close = $_POST["close"];
    $Wtime = $_POST["Wtime"];
    
    $insttime = date("H:i", strtotime("$Wtime minute"));
    $Aonehour = date("H:i", strtotime("1 hour"));
    
    $user = new User();
    $Udata = $user->get_1userdata($Cid);
    $Dtime = $user->organize_info($selectD, $pretime, $insttime, $open, $close, $Aonehour);
    $totalQ = $user->sum_quantity($Cid);
    $totalP = $user->sum_total($Cid);
    
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
                <span class="border border-2 border-dark bg-dark text-light rounded px-5 py-1 me-1">Order Confirmation</span>
                <i class="fas fa-caret-right"></i>
                <span class="border border-2 border-dark rounded px-5 py-1">Order Completed</span>
            </div>
        </div>

        <div class="container" style="margin-top: 100px; width: 700px;">
                <h1 class="my-5 text-center"> Order Confirmation</h1>
                <table class="table table-bordered table-secondary border-dark">
                    <tr>
                        <td class="w-25">Name</td>
                        <td class="bg-white"><?=$Udata['first_name']?> <?=$Udata['last_name']?></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td class="bg-white"><?=$Udata['email']?></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td class="bg-white"><?=$Udata['contact_number']?></td>
                    </tr>
                    <tr>
                        <td>Delivery Adress</td>
                        <td class="bg-white"><?=$Udata['adress']?></td>
                    </tr>
                    <tr>
                        <td>Delivery time</td>
                        <td class="bg-white"><?=$Dtime?></td>
                    </tr>
                    <tr>
                        <td>Total Quatity</td>
                        <td class="bg-white"><?=$totalQ?></td>
                    </tr>
                    <tr>
                        <td>Total Price</td>
                        <td class="bg-white"><?=$totalP?>$</td>
                    </tr>
                    <tr>
                        <td>Notes・Requests</td>
                        <td class="bg-white"><?=$note?></td>
                    </tr>
                </table>

            <form action="actions/add-order.php" class="mt-5" method="post">
                <input type="hidden" name="orderD" value="<?=date('Y/m/d H:i')?>">
                <input type="hidden" name="deliveryT" value="<?=$Dtime?>">
                <input type="hidden" name="totalQ" value="<?=$totalQ?>">
                <input type="hidden" name="totalP" value="<?=$totalP?>">
                <input type="hidden" name="note" value="<?=$note?>">
                <input type="hidden" name="userID" value="<?=$Cid?>">
                                     
                <div class="row col-8 mx-auto">
                    <div class="text-center my-4">
                        <a href="delivery-info.php" class="btn btn-secondary w-50"></i>Back</a>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-warning w-50">ORDER</button>
                    </div>
                </div>      
            </form>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>