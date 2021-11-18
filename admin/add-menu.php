<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>

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
                          class="nav-link">Users
                        </a>
                    </li>    
                    <li class="nav-item mx-3">
                        <a href="menu.php" 
                          class="nav-link active">Menu
                        </a>
                    </li>              
                    <li class="nav-item mx-3">
                       <a href="../index.php" 
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


<div class="container mt-5">
    <h1 class="text-center text-warning">Add Menu</h1>
    <div class="row mt-5">
        <div class="col-6 mx-auto">
            <form action="../actions/add-menu.php" method="post" enctype="multipart/form-data">
                Product name <input type="text" name="Mname" class="form-control" required autofocus>
                Ingredient <input type="text" name="ingredient" class="form-control">
                <div class="row">
                    <div class="col">
                            Category
                            <select name="category" id="" class="form-select" required>
                                <option value="Side">Side Dish</option>
                                <option value="Main">Main Dish</option>
                                <option value="Desert">Desert</option>
                                <option value="Drink">Drink</option>
                            </select>
                    </div>
                    <div class="col">
                            Price <input type="text" name="price" class="form-control" required>                   
                    </div>
                </div>
                Picture <input type="file" name="Mpic" class="form-control" required>
                <br>
                <input type="submit" name="submit" value="ADD" class="btn btn-warning form-control">

            </form>
        </div>
    </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>