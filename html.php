<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Food Funday Restaurant</title>
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<div id="loader">
        <div id="status"></div>
</div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
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
                                    <li><a href="login.php"><i class="fas fa-shopping-cart"></i></a></li>
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




<a href="#" class="scrollup" style="display: none;">Scroll</a>

    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <!-- Colors -->
        <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div>
    </section>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>









<!-- Order -->
<div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
						Reservations			
					</h2>
                        </div>
                        <h4 class="form-title">BOOKING FORM</h4>
                        <p>PLEASE FILL OUT ALL REQUIRED* FIELDS. THANKS!</p>

                        <form id="contact-form" method="post" class="reservations-box" name="contactform" action="mail.php">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="form_name" id="form_name" placeholder="Name" required="required" data-error="Firstname is required.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="email" name="email" id="email" placeholder="E-Mail ID" required="required" data-error="E-mail id is required.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="phone" id="phone" placeholder="contact no.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="no_of_persons" id="no_of_persons" class="selectpicker">
                                        <option selected disabled>No. Of persons</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="date-picker" id="date-picker" placeholder="Date" required="required" data-error="Date is required." />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="time-picker" id="time-picker" placeholder="Time" required="required" data-error="Time is required." />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="preferred_food" id="preferred_food" class="selectpicker">
                                        <option selected disabled>preferred food</option>
                                        <option>Indian</option>
                                        <option>Continental</option>
                                        <option>Mexican</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="occasion" id="occasion" class="selectpicker">
                                        <option selected disabled>Occasion</option>
                                        <option>Wedding</option>
                                        <option>Birthday</option>
                                        <option>Anniversary</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">BOOK MY TABLE </button>
                                </div>
                            </div>
                            <!-- end col -->
                        </form>
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->



<!-- blog -->
<div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
					Our Blog 	
				</h2>
                    <div class="blog-box clearfix">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="images/featured-image-01.jpg" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span>25 NOVEMBER, 2014</span></p>
                                        <h2>LATEST RECIPES JUST IN!</h2>
                                        <h5>BY John Doggett</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="images/featured-image-02.jpg" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span>2 NOVEMBER, 2014</span></p>
                                        <h2>NEW RECRUITS HAVE ARRIVED!</h2>
                                        <h5>BY Jeffrey Spender</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="images/featured-image-03.jpg" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span>4 NOVEMBER, 2014</span></p>
                                        <h2>BAKING TIPS FROM THE PROS</h2>
                                        <h5>BY Monica Reyes</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="images/featured-image-04.jpg" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span>12 NOVEMBER, 2014</span></p>
                                        <h2>ALL YOUR EGGS BELONG TO US</h2>
                                        <h5>BY John Doggett</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                    <!-- end blog-box -->

                    <div class="blog-btn-v">
                        <a class="hvr-underline-from-center" href="#">View the Blog</a>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    end blog-main