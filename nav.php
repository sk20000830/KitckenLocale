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
                                        <img src="images/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="menu.php">Menu</a></li>
                                    <li><a href="about.php">About us</a></li>
                    <?php   if($_SESSION["role"] == "U"){?>
                                    <li><a href="cart.php" style="font-size: 22px;"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="profile.php" style="font-size: 22px;"><i class="fas fa-user"></i></a></li>
                    <?php   }elseif($_SESSION["role"] == "A"){?>
                                    <li><a href="edit.php" style="font-size: 22px;"><i class="fas fa-cog"></i></a></li>
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