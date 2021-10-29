<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<?php
    session_start();
    $status = $_SESSION["status"];
    

    require "../classes/user.php";
    require "../classes/admin.php";

    $Oid = $_GET["order_id"];

    $admin = new Admin();
    $Odata = $admin->get_1orderData($Oid);
    $orderItems = $admin->get_orderItems($Oid);
    $sub = $admin->sum_subtotal($Oid);
    $admin->check_status($status);

    $user = new User();
    $Dfee = $user -> get_Dfee();

    
?>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
             <!-- trigger button-->
             <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu" >
                   <span class="navbar-toggler-icon"></span>
             </button>
 
             <!-- collapse div-->
             <div class="collapse navbar-collapse" id="menu">
                 <!--menu-->
                 <ul class="navbar-nav fs-4 ms-3">
                     <li class="nav-item text-white fs-1 me-5">
                        <i class="fas fa-cog"></i>
                     </li>
                     <li class="nav-item mx-3">
                        <a href="orders.php" 
                          class="nav-link active">Orders
                        </a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="users.php" 
                          class="nav-link">Users
                        </a>
                    </li>    
                    <li class="nav-item mx-3">
                        <a href="menu.php" 
                          class="nav-link">Menu
                        </a>
                    </li>                                             
                    <li class="nav-item mx-3">
                       <a href="../home.php" 
                          class="nav-link">Browse
                        </a>
                    </li>
                    <li class="nav-item mx-3">
                       <a href="../logout.php" 
                          class="nav-link">Logout
                        </a>
                    </li>
                 </ul>
             </div>
        </div>
    </nav>  


        <div class="container" style="margin-top: 100px; width: 600px;">
            <h1 class="my-5 text-center"> Order Details</h1>
            <table class="table table-bordered table-secondary border-dark">
                <tbody>
                    <tr>
                        <td class="w-25">Name</td>
                        <td class="bg-white"><?=$Odata['first_name']?> <?=$Odata['last_name']?></td>
                    </tr>
                    <tr>
                        <td>Order date</td>
                        <td class="bg-white"><?=$Odata['order_date']?></td>
                    </tr>
                    <tr>
                        <td>Delivery time</td>
                        <td class="bg-white"><?=$Odata['delivery_time']?></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td class="bg-white"><?=$Odata['email']?></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td class="bg-white"><?=$Odata['contact_number']?></td>
                    </tr>
                    <tr>
                        <td>Delivery Adress</td>
                        <td class="bg-white"><?=$Odata['adress']?></td>
                    </tr>
                    <tr>
                        <td>Order Count</td>
                        <td class="bg-white"><?=$Odata['order_count']?></td>
                    </tr>
                </tbody>
            </table>    
            <br>  
            <h3>product</h3>
            <hr>
            <table class="table">                           
                <?php foreach($orderItems as $data){?>
                    <tr>
                        <td>・<?=$data['menu_name']?></td>
                        <td>× <?=$data['quantity']?></td>
                        <td class="text-end"><?=$data["menu_price"] * $data["quantity"]?>$</td>
                    </tr>
                <?php }?>    
            </table>      
            <table class="table my-5">
                <tbody>                   
                    <tr>
                        <td><h3>subtotal</h3></td>
                        <td></td>
                        <td class="text-end"><?=$sub?>$</td>
                    </tr>
                    <tr>
                        <td><h3>delivery fee</h3></td>
                        <td></td>
                        <td class="text-end"><?=$Dfee?>$</td>
                    </tr>
                    <tr>
                        <td><h3>total</h3></td>
                        <td></td>
                        <td class="text-end"><span class="fs-3"><?=$Odata["total_price"]?>$</span></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center col-5 mx-auto">
                <?php if($Odata["order_status"] == "Not Delivered"){?>
                    <form action="../actions/delivered.php" method="post">
                        <input type="hidden" name="Oid" value="<?=$Odata['order_id']?>">
                        <button class="btn btn-success w-50">Delivered <i class="fas fa-check"></i></button><br>
                        <a href="orders.php" class="btn btn-secondary w-50 my-5">Back</a>
                    </form>
                <?php }elseif($Odata["order_status"] == "Delivered"){?>
                        <button class="btn btn-danger bg-white text-danger w-50">Delivered <i class="fas fa-check"></i></button><br>
                        <a href="orders.php" class="btn btn-secondary w-50 my-5">Back</a>
                <?php }?>
            </div>
        </div>
        <br><br>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>