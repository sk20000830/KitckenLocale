<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Adress</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<?php
    require "classes/user.php";

    session_start();

    $Cid = $_SESSION["user_id"];
    $status = $_SESSION["status"];

    $user = new User();
    $Udata = $user->get_1userdata($Cid);
    
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
                <span class="border border-2 border-dark bg-dark text-light rounded  px-5 py-1 me-1">Input Adress</span>
                <i class="fas fa-caret-right"></i>
                <span class="border border-2 border-dark rounded px-5 py-1 me-1">Order Confirmation</span>
                <i class="fas fa-caret-right"></i>
                <span class="border border-2 border-dark rounded px-5 py-1">Order Completed</span>
            </div>
        </div>

        <div class="container" style="margin-left: auto;margin-right: auto; margin-top: 100px; width: 500px;">
            <h1 class="mt-5 text-center block-title" style="margin-top: 20px; margin-bottom: 40px;">Input your adress</h1>
            <form action="actions/edit-adress.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label for="fname">First Name</label><br>
                        <input type="text" name="fname" id="fname" value="<?=$Udata['first_name']?>" class="form-control" required auto-focus>
                    </div>
                    <div class="col-md-6">
                        <label for="lname">Last Name</label><br>
                        <input type="text" name="lname" id="lname" value="<?=$Udata['last_name']?>" class="form-control" required>
                    </div>
                </div> 
                <label for="contact">Phone Number</label><br>
                <input type="tel" name="contact" id="contact" value="<?=$Udata['contact_number']?>" class="form-control" required>
                <label for="email">E-mail</label><br>
                <input type="email" name="email" id="emali" value="<?=$Udata['email']?>" class="form-control" required>
                <label for="adress">Adress</label><br>
                <input type="text" name="adress" id="adress" value="<?=$Udata['adress']?>" class="form-control" required>
                <br>
                <div class="row mt-3">
                    <div class="col text-end">
                        <a href="cart.php" class="btn btn-secondary w-50">Back</a>
                    </div>
                    <div class="col text-start">
                        <button class="btn btn-warning hvr-underline-from-center w-50">Next</button>
                    </div>
                </div>                    
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>