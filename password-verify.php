<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>password verify</title>
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
    


    <div class="container" style="margin-left: auto;margin-right: auto; margin-top: 100px; width: 335px;">
        <h1 class="text-center block-title" style="margin-top: 20px; margin-bottom: 40px;"></h1>
        <form action="actions/password-verify.php" method="post">
                <label for="email">E-mail</label><br>
                <?=$Udata['email']?><br>
                <input type="hidden" name="email" id="email" value="<?=$Udata['email']?>">
                <br>
                <label for="passward">Password</label><br>
                <input type="password" name="pass" id="passward" class="form-control" required auto-focus>
                <?php if($_GET["message"] == 'incorrect'){
                            echo "<p class='text-danger'>Incorrect password</p>";
                }?>
                <br>
                <button class="form-control btn btn-warning hvr-underline-from-center">VERIFY</button>
                <!-- <input class="orange-btn form-control hvr-underline-from-center" type="submit" name="login" value="Login"> -->
        </form>
        <br>
        <p class="text-center text-decoration-none"><a href="profile.php" class="text-muted">Cancel</a></p>
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


