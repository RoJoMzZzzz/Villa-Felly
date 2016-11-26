<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Rates and Amenities</title>
    <link rel="stylesheet" type="text/css" href="Style.css"/>
    <link rel="stylesheet" type="text/css" href="sideBar.css"/>
    <link rel="stylesheet" type="text/css" href="Amenities-pop.css">
    <link rel="stylesheet" type="text/css" href="footerStyle.css"/>
    <link rel="stylesheet" type="text/css" href="Amenities-style.css"/>
    <link rel="icon" href="fav.png" type="image/png"/>
</head>
<style>
#rates{
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

        <div class="priceCont">
        
        <?php include("termsnCondiSection.php"); ?>
        <div class="amenitiesCont">
        
            <div class="amenWrapper1">
                <label for="our-popAmenities1"><div class="amen" id="one">
                    <img src="kitchen.jpg" class="amenImges"/><div class="underTag">Kitchen</div>
                </div></label>
                <label for="our-popAmenities2"><div class="amen" id="two">
                    <img src="refrigerator.jpg" class="amenImges"/><div class="underTag">Refrigerator</div>
                </div></label>
                <label for="our-popAmenities3"><div class="amen" id="three">
                    <img src="gazebo.jpg" class="amenImges"/><div class="underTag">Gazebo</div>
                </div></label>
            </div>
            
            <div class="amenWrapper2">

                <label for="our-popAmenities4"><div class="amen" id="one">
                    <img src="cooking.jpg" class="amenImges"/><div class="underTag">2 Burner Stove</div>
                </div></label>
                 <label for="our-popAmenities5"><div class="amen" id="two">
                    <img src="videoke.jpg" class="amenImges"/><div class="underTag">Videoke</div>
                </div></label>
                 <label for="our-popAmenities6"><div class="amen" id="three">
                    <img src="shower.jpg" class="amenImges"/><div class="underTag">Shower Area</div>
                </div></label>
            </div>
            
            <div class="amenWrapper3">
                <label for="our-popAmenities7"><div class="amen" id="one">
                    <img src="swimming-pool.jpg" class="amenImges"/><div class="underTag">Swimming Pool</div>
                </div></label>
                <label for="our-popAmenities8"><div class="amen" id="two">
                    <img src="comfort.jpg" class="amenImges"/><div class="underTag">Comfort Rooms</div>
                </div></label>
                <label for="our-popAmenities9"><div class="amen" id="three">
                    <img src="grill.jpg" class="amenImges"/><div class="underTag">Grill</div
                ></div></label>
            </div>
            
        </div>
        <?php include("pop-amenities.php"); ?>
        </div>

<?php include("footnavigation.php"); ?>
        
        
    </div>



</body>
</html>