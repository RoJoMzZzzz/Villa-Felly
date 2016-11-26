<?php    
    session_start();
    if(!isset($_SESSION['fname'])){
      $_SESSION['fname'] = null;
      $_SESSION['lname'] = null;
      $_SESSION['address'] = null;
      $_SESSION['contact'] = null;
      $_SESSION['email'] = null;
    }
    if(!isset($_SESSION['s_date'])){
        $_SESSION['s_date'] = null;
        $_SESSION['s_time'] = null;
        $_SESSION['s_room'] = null;
        $_SESSION['s_num'] = null;
    }
?>
<!DOCTYPE HTML>
<html>
<head>

	<title>Reservation</title>
    <link rel="icon" href="fav.png" type="image/png"/>
    <link rel="stylesheet" type="text/css" href="Style.css"/>
    <link rel="stylesheet" type="text/css" href="reserveStyle.css"/>
    <link rel="stylesheet" type="text/css" href="popStyle.css"/>`
    <link rel="stylesheet" type="text/css" href="footerStyle.css"/>
    
</head>
<body>
    <div class="divpage">
        <?php include("facebooklink.php"); ?>
   
        <?php include("villalogo.php"); ?>

        <?php include("navigationbar.php"); ?>

        <?php 


        include("reservation-form_section.php"); ?>
        
          
<span>
            <input type="checkbox" id="our-popup" class="smoosh" /><!-- invisible; when checked, the popup opens -->
            <label for="our-popup" class="overlay"></label>
   
   <!-- the popup starts here -->
   
            <div class="overlay-dialogue" style="width:500px;height:400px;">
            <label for="our-popup"></label><br/><br/>
            <center>
                <label id="adminLbl">Terms and Conditions</label><br />
                <p>1. No Down Payment, No Reservation<br /><br />
                2. Reservation Fee of minimum 30% should be done five 
                days before youe target date to finalize reservation<br /><br />
                3. Non Refundable. Non-Apperance on schedule date will be forfeited<br /><br />
                4. Reservation fee can be made through BDO OFELIA R. CABAUTAN BDO Account No. 001540091013<br />
                </p>
            </center>
            </div>
</span>

        <?php include("footnavigation.php"); ?>
        
    </div>
       

</body>
</html>