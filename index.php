<?php
session_start();
session_unset();
?>


<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Home</title>
    
    <link rel="stylesheet" type="text/css" href="Style.css"/>
    <link rel="stylesheet" type="text/css" href="logInSlider.css"/>
    <link rel="stylesheet" type="text/css" href="popStyle.css"/>
    <link rel="stylesheet" type="text/css" href="homeGallery.css"/>
    <link rel="stylesheet" type="text/css" href="footerStyle.css"/>
    <link rel="icon" href="fav.png" type="image/png"/>
    
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
</head>
<style>
#home{
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    background-color:rgba(0, 111, 72, 0.7);
    color: #fefefe;
    }
</style>
<body>
    <div class="divpage">
        <?php include("facebooklink.php"); ?>
   
        <?php include("villalogo.php"); ?>

        <?php include("navigationbar.php"); ?>
        

            <div class="sliderformCont">
            
            <?php
            include("logInForm.php");
             include("signupop.php"); ?>
               <div class="sliderCont">
                    <?php include("slider.php");?>
                </div>

            </div>


        <?php include("homegallery.php"); ?>
        <?php include("popImgs.php"); ?>

        <?php include("footnavigation.php"); ?>
        
    </div>
       

</body>
</html>