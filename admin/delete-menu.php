<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php
        require "../classes/admin.php";

        $Cmenu = $_GET["menu_id"];
        $admin = new Admin();
        $menu = $admin -> get_1menuData($Cmenu);
    ?>
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


<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-6 mx-auto alert alert-danger">
            <p class="text-center fs-3">Are you sure you want to delete <br> "<?=$menu['menu_name']?>" <br> from the menu?</p>
            <div class="row text-center mt-5">
                <div class="col">
                    <a href="menu.php" class="btn btn-primary w-50">No</a>
                </div>
                <div class="col">
                    <a href="../actions/delete-menu.php?action=delete&menu_id=<?=$Cmenu?>" class="btn btn-danger w-50">Yes</a>
                </div>
            </div>
        </div>
    </div>
</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>