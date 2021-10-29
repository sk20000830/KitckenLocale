<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
        session_start();
        $status = $_SESSION["status"];

        require "../classes/admin.php";

        $admin = new Admin();
        $admin->check_status($status);
            
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
                          class="nav-link">Orders
                        </a>
                    </li>
                    <li class="nav-item mx-3">
                        <a href="users.php" 
                          class="nav-link active">Users
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


<div class="container" style="margin-left: auto;margin-right: auto; margin-top: 100px; width: 500px;">
        <h1 class="mt-5 text-center block-title" style="margin-top: 20px; margin-bottom: 40px;">Add User</h1>
        <form action="../actions/admin-register.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <label for="fname">First Name</label><br>
                    <input type="text" name="fname" id="fname" class="form-control" required autofocus>
                </div>
                <div class="col-md-6">
                    <label for="lname">Last Name</label><br>
                    <input type="text" name="lname" id="lname" class="form-control" required>
                </div>
            </div> 
                    <label for="contact">Phone Number</label><br>
                    <input type="tel" name="contact" id="contact" class="form-control" required>
                    <label for="email">E-mail</label><br>
                    <input type="email" name="email" id="email" class="form-control" required>
                    <label for="adress">Adress</label><br>
                    <input type="text" name="adress" id="adress" class="form-control" required>
                    <label for="passward">Password</label><br>
                    <input type="password" name="pass" id="passward" class="form-control" required>
                    <br>
                    <button class="form-control btn btn-warning hvr-underline-from-center">REGISTER</button>
                <!-- <input class="orange-btn form-control hvr-underline-from-center" type="submit" name="login" value="Login"> -->
        </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>