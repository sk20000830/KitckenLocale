<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Menu</title>
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

    $user = new User();
    $main = $user -> get_MmenuData();
    $side = $user -> get_SmenuData();
    $desert = $user -> get_DEmenuData();
    $drink = $user -> get_DRmenuData();

    session_start();

    $Cid = $_SESSION["user_id"];
    $status = $_SESSION["status"];
    $Pname = $user->get_productName();


?>

<body>

<div id="loader">
        <div id="status"></div>
</div>
   <!-- navbar -->
   <div id="site-header">
        <header id="header" class="header-block-top">
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
                                    <li><a href="home.php">Home</a></li>
                                    <li class="active"><a href="menu.php">Menu</a></li>
                    <?php   if($status == "U"){?>
                                    <li><a href="cart.php" style="font-size: 22px;"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="profile.php" style="font-size: 22px;"><i class="fas fa-user"></i></a></li>
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


    <div class="team-main parallax pad-top-100" style="height: 400px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						MENU	
					</h2>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end team-main -->


    <!-- menu -->


    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                    <div class="tab-menu">
                        <div class="slider slider-nav">
                            <div class="tab-title-menu">
                                <h2>SIDE DISHES</h2>
                                <p> <i class="flaticon-canape"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>MAIN DISHES</h2>
                                <p> <i class="flaticon-dinner"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DESERTS</h2>
                                <p> <i class="flaticon-desert"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DRINKS</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                        </div>       
                        <div class="slider slider-single">
                            <!-- side dishes -->
                            <div>
                                <?php foreach($side as $menuD){?>
                                    <a href="actions/add-to-cart.php?menu_id=<?=$menuD['menu_id']?>">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                            <div class="offer-item" style="height: 100px;">
                                                <img src="images/menu_pictures/<?=$menuD['menu_pic']?>" alt="" class="img-responsive">
                                                <div>
                                                    <h3><?=$menuD["menu_name"]?></h3>
                                                    <p>
                                                        <?=$menuD["ingredient"]?>
                                                    </p>
                                                </div>
                                                <span class="offer-price"> <?=$menuD["menu_price"]?>$</span>
                                            </div>
                                        </div>
                                    </a>
                                <?php }?>
                            </div>
                                <!-- end col -->
                            <!-- main dishes -->
                            <div>
                                <?php foreach($main as $menuD){?>
                                    <a href="actions/add-to-cart.php?menu_id=<?=$menuD['menu_id']?>">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                            <div class="offer-item" style="height: 100px;">
                                                <img src="images/menu_pictures/<?=$menuD['menu_pic']?>" alt="" class="img-responsive">
                                                <div>
                                                    <h3><?=$menuD["menu_name"]?></h3>
                                                    <p>
                                                        <?=$menuD["ingredient"]?>
                                                    </p>
                                                </div>
                                                <span class="offer-price"> <?=$menuD["menu_price"]?>$</span>
                                            </div>
                                        </div>
                                    </a>
                                <?php }?>
                                <!-- end col -->
                            </div>
                            <!-- desert -->
                            <div>
                                <?php foreach($desert as $menuD){?>
                                    <a href="actions/add-to-cart.php?menu_id=<?=$menuD['menu_id']?>">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                            <div class="offer-item" style="height: 100px;">
                                                <img src="images/menu_pictures/<?=$menuD['menu_pic']?>" alt="" class="img-responsive">
                                                <div>
                                                    <h3><?=$menuD["menu_name"]?></h3>
                                                    <p>
                                                        <?=$menuD["ingredient"]?>
                                                    </p>
                                                </div>
                                                <span class="offer-price"> <?=$menuD["menu_price"]?>$</span>
                                            </div>
                                        </div>
                                    </a>
                                <?php }?>
                                <!-- end col -->
                            </div>
                            <!-- drink -->
                            <div>
                                <?php foreach($drink as $menuD){?>
                                    <a href="actions/add-to-cart.php?menu_id=<?=$menuD['menu_id']?>">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                            <div class="offer-item" style="height: 100px;">
                                                <img src="images/menu_pictures/<?=$menuD['menu_pic']?>" alt="" class="img-responsive">
                                                <div>
                                                    <h3><?=$menuD["menu_name"]?></h3>
                                                    <p>
                                                        <?=$menuD["ingredient"]?>
                                                    </p>
                                                </div>
                                                <span class="offer-price"> <?=$menuD["menu_price"]?>$</span>
                                            </div>
                                        </div>
                                    </a>
                                <?php }?>
                                <!-- end col -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->
    

    <div id="footer" class="footer-main">
        <div class="footer-news pad-top-100 pad-bottom-70 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="ft-title color-white text-center"> Newsletter </h2>
                        </div>
                        <form>
                            <input type="email" placeholder="Enter your e-mail id">
                            <a href="#" class="orange-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
                        </form>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-news -->
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="images/logo-locale.png" alt="" style="width: 400px;">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>About Us</h3>
                                <p>Like all great stories, we have a beginning: It’s the 1980s and Amadeus arrives in America. After a series of misadventures,
                             he opens a deli in Soho NYC. </p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <h3>New Menu</h3>
                                <ul>
                                    <?php for($counter = 0; $counter < 4; $counter++){?>
                                                <li><a href="menu.php"><?=$Pname[$counter]?></a></li>
                                    <?php }?>
                                </ul>
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>6 E Esplanade, St Albans VIC 3021, New York City</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
									+91 80005 89080 
								</span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>support@kitchenlocale.com</span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Opening Hours</h3>

                                <ul>
                                    <li>
                                        <p>Monday - Thursday </p>
                                        <span> 10:00 AM - 22:00 PM</span>
                                    </li>
                                    <li>
                                        <p>Friday - Saturday </p>
                                        <span>  10:00 AM - 22:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2021 Kitcken Locale</h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->




<a href="#" class="scrollup" style="display: none;">Scroll</a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>