<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Profile</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


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

<div id="loader">
        <div id="status"></div>
    </div>
    
    <!-- navbar -->
    <div id="site-header" >
        <header id="header" class="header-block-top" style="background-color: black;">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                       <img src="images/logo-locale.png" alt="" style="width: 300px;">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="menu.php">Menu</a></li>
                    <?php   if($status == "U"){?>
                                    <li><a href="cart.php" style="font-size: 22px;"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li class="active"><a href="profile.php" style="font-size: 22px;"><i class="fas fa-user"></i></a></li>
                    <?php   }elseif($status == "A"){?>
                                    <li><a href="admin/orders.php" style="font-size: 22px;"><i class="fas fa-cog"></i></a></li>
                    <?php   }else{?>
                                    <li><a href="login.php" style="font-size: 22px;"><i class="fas fa-user"></i></a></li>
                    <?php   }?>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->




    <div class="container" style="margin-left: auto;margin-right: auto; margin-top: 150px; width: 400px;">
        <h1 class="text-center block-title" style="margin-top: 20px; margin-bottom: 40px;">Profile</h1>
        <div style=" background-color: lightgray; padding: 20px;">
            <div class="row">
                <div class="col-md-6">
                    <h4>First Name</h4><div><?=$Udata["first_name"]?></div>
                </div>
                <div class="col-md-6">
                    <h4>Last Name</h4><div><?=$Udata["last_name"]?></div>
                </div>
            </div> 
            <br>
            <h4>Phone Number</h4><div><?=$Udata["contact_number"]?></div><br>
            <h4>E-mail</h4><div><?=$Udata["email"]?></div><br>
            <h4>Adress</h4><div><?=$Udata["adress"]?></div><br>
            <h4>Order Count</h4><div><?=$Udata["order_count"]?> <a href="order-history.php" class="btn btn-secondary"> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Order History <i class="fas fa-arrow-right"></i></a></div>
        </div> 
        <br>
        <p class="text-center text-decoration-none"><a href="password-verify.php" class="text-muted">edit profile</a></p>
        <p class="text-center text-decoration-none"><a href="logout.php" class="text-muted">Logout</a></p>
    </div>




    <a href="#" class="scrollup" style="display: none;">Scroll</a>

<!-- ALL JS FILES -->
<script src="js/all.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>




