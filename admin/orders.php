<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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
                       <a href="../login.php" 
                          class="nav-link">Logout
                        </a>
                    </li>
                 </ul>
             </div>
        </div>
</nav>

<div class="container mt-5">
    <?php
        require "../classes/admin.php";
        $admin = new Admin();
        $Dtime = $admin -> display_delivery();
        $Dstatus = $admin -> get_Dstatus();
        $orderdata = $admin -> get_orderData();
        
    ?>
    <form action="../actions/edit-orders.php" method="post" class="w-50 mx-auto pe-3 text-center">
                delivery time:
                <input type="number" name="Dtime" class="" value="<?=$Dtime['delivery_time']?>">
                <input type="submit" name="submit" class="btn btn-secondary" value="Apply"><br>
                
    </form>
    <p class="w-50 mx-auto mt-3 text-center "> operation status: <span class="fs-4 ms-2"><?=$Dstatus?></span> </p>


    <div class="row mt-5">
        <div class="col-10 mx-auto">
            <table class="table table-striped table-bordered mt-4">
                <thead>
                    <tr>
                        <th>
                        #
                        </th>
                        <th>
                            Order time
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            adress
                        </th>
                        <th>
                            order count
                        </th>
                        <th>
                            contact number
                        </th>
                        <th>
                            total price
                        </th>
                        <th>

                        </th>
                    </tr>
                    
                </thead>
                <tbody>
                    <?php foreach($orderdata as $order){?>
                    <tr>
                        <td><?=$order['order_id']?></td>
                        <td><?=$order['order_time']?></td>
                        <td><?=$order['user_name']?></td>
                        <td><?=$order['adress']?></td>
                        <td><?=$order['order_count']?></td>
                        <td><?=$order['contact_number']?></td>
                        <td><?=$order['total_price']?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>