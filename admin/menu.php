<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php
        require "../classes/admin.php";

        $admin = new Admin();
        $menuData = $admin -> get_menuData();
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


<!-- menu list -->
<div class="container">
    <div class="w-25 text-center mx-auto mt-5">
        <a href="add-menu.php" class="btn btn-warning form-control"><i class="fas fa-plus-circle"></i> Add Menu</a>
    </div>
    <div class="row mt-5">
        <div class="col-10 mx-auto">
            <table class="table table-striped table-bordered mt-4">
                <thead>
                    <tr>
                        <th>
                        #
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Ingredient
                        </th>
                        <th>
                            Category
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Picture
                        </th>           
                        <th>

                        </th>
                    </tr>                
                </thead>
                <tbody>               
                <?php foreach($menuData as $data){?> 
                    <tr>
                        <td><?=$data['menu_id']?></td>
                        <td><?=$data['menu_name']?></td>
                        <td><?=$data['ingredient']?></td>
                        <td><?=$data['category']?></td>
                        <td><?=$data['menu_price']?></td>
                        <td><?=$data['menu_pic']?></td>
                        <td class="text-center">
                            <a href='edit-menu.php?menu_id=<?=$data['menu_id']?>' class='btn btn-info text-white mb-2'>Update</a>                
                            <a href='delete-menu.php?action=delete&menu_id=<?=$data['menu_id']?>' class='btn btn-danger text-white'>Delete</a>
                        </td>
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