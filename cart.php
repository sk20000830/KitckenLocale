<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<?php
    require "classes/user.php";

    session_start();

    $Cid = $_SESSION["user_id"];
    $status = $_SESSION["status"];

    $user = new User();
    $orderData = $user -> get_cartData($Cid);
    $sub = $user -> sum_subtotal($Cid);
    $Dfee = $user -> get_Dfee();
    $total = $user -> sum_total($Cid);
?>

<body>





    <div class="mb-5 pt-5" >
        <div class="container">
            <div class="mx-auto text-center">
                <a href="menu.php" class="btn btn-danger "><i class="fas fa-arrow-left"></i> Go Back to Menu</a>
            </div>
            <div class="text-center fs-5 mt-5">
                <span class="border border-2 border-dark bg-dark text-light rounded px-5 py-1 me-1">Shopping Cart</span>
                <i class="fas fa-caret-right"></i>
                <span class="border border-2 border-dark rounded  px-5 py-1 me-1">Input Adress</span>
                <i class="fas fa-caret-right"></i>
                <span class="border border-2 border-dark rounded px-5 py-1 me-1">Order Confirmation</span>
                <i class="fas fa-caret-right"></i>
                <span class="border border-2 border-dark rounded px-5 py-1">Order Completed</span>
            </div>
            <div class="row mt-5">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10 mx-auto mt-5">         
                    <table class="table table-bordered">
                        <thead class="bg-light">
                            <tr>
                                <th colspan="4" class="fs-3">
                                    <i class="fas fa-shopping-cart"></i><span class="ms-3">SHOPPING CART</span> 
                                </th>            
                            </tr>
                            <tr>
                                <th>product</th>
                                <th>unit price</th>
                                <th>quantity</th>
                                <th>subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($orderData as $data){?>
                                <tr>
                                    <td><?=$data['menu_name']?></td>
                                    <td><?=$data['menu_price']?>$</td>
                                    <td>
                                        <form action="actions/change-num.php" method="post">
                                            <input type="number" name="num" value="<?=$data['quantity']?>" style="width: 50px;">
                                            <input type="hidden" name="price" value="<?=$data['menu_price']?>">
                                            <input type="hidden" name="id" value="<?=$data['cart_id']?>">
                                            <button><i class="fas fa-check"></i></button>
                                        </form>
                                    </td>
                                    <td><?=$data['subtotal']?>$</td>
                                </tr>
                            <?php }?>                             
                        </tbody>
                    </table>

                    <div colspan="4" class="text-center">
                                        <a href="menu.php" class="btn" style="width: 80px;"><i class="fas fa-plus-circle"></i></a>
                    </div>  

                    <table class="table table-borderd mt-4">
                            <tr>
                                <td><h3>subtotal</h3></td>
                                <td></td>
                                <td></td>
                                <td><?=$sub?>$</td>
                            </tr>
                            <tr>
                                <td><h3>delivery fee</h3></td>
                                <td></td>
                                <td></td>
                                <td><?=$Dfee?>$</td>
                            </tr>
                            <tr>
                                <td><h3>total</h3></td>
                                <td></td>
                                <td></td>
                                <td><span class="fs-3"><?=$total?>$</span> (cash)</td>
                            </tr>
                    </table>    
                    <div colspan="4" class="text-center">
                        <?php if(!empty($orderData)){?>
                            <a href="adress.php" class="btn btn-warning" style="width: 100px;">Next</a>
                        <?php }else{?>
                            <a href="cart.php" class="btn btn-warning" style="width: 100px;">Next</a>
                            <p class="text-danger"> Please select products</p>
                        <?php }?>     
                        <p></p>
                    </div>     
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>