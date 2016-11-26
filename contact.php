<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="Style.css"/>

    <link rel="icon" href="fav.png" type="image/png"/>
</head>

<style>
.formcontainer{
    float: right;
    color:white;
    margin-top:10px;
    margin-right:5px;
    /*border:1px solid red;*/
    
}
.form{
    border-radius:3px;
    -moz-transition-duration: 0.5s;
    -webkit-transition-duration: 0.5s;
    border:0;
    font-family:Arial;
}
.form:hover{
    background-color: #2b5272;
    
}
.btncontainer{
    /*border:1px solid blue;*/
    margin-top: 10px;
}
.btn{
    font-family:Monotype corsiva;
    border-radius: 5px;
    padding:3px 5px;
    background-color: transparent;
    color:white;
    font-size:14px;
    width:80px;
    -moz-transition-duration: 0.4s;
    -webkit-transition-duration: 0.4s;
    border:1px solid #fefefe;
    opacity:0.7;
}
.btn:hover{
    background-color: #2b5272;
    box-shadow: 1px 1px 3px 3px black;
}

</style>
<body>
    <div class="divpage">
    <div class="formcontainer">
    <font face="Monotype Corsiva">Email or Username:</font>&nbsp;&nbsp;&nbsp;<input type="text" name="login" size="15" class="form"/>&nbsp;&nbsp;&nbsp;
    <font face="Monotype Corsiva">Password:</font>&nbsp;&nbsp;&nbsp;<input type="text" name="login" size="15" class="form"/>
    <div class="btncontainer"><center><input class="btn" type="button" name="Login" value="Log In"/>&nbsp;&nbsp;&nbsp;<input class="btn"type="button" name="signup" value="Sign Up"/></center></div>
    </div>
        <div class="divlogo"><img class="imglogo" src="logo2.png"/></div>
        
        <!--start of main navigation bar-->
            <ul class="container">
            
                <li class="nav" id="home"style="width:140px;"><a href="index.php">Home</a></li>
                <li class="nav" id="rates"style="width:140px;"><a href="#">About Us</a>
                <!--start drop-down for About Us-->
                    <div class="dropdown-content">
                        <a href="aboutus.php" class="drop">Background</a>
                        <a href="vision.php" class="drop" id="weekends">Mission and Vision</a>
                    </div>
                <!--end drop-down for rates-->
                </li>
                <li class="nav" id="common"style="width: 190px;"><a href="rates.php">Rates and Amenities</a>
                <!--start drop-down for amenities-->
                    <div class="dropdown-content">
                        <a href="#" class="drop">Common Amenities</a>
                        <a href="#" class="drop">Bungalo House</a>
                        <a href="#" class="drop" id="updown">Up and Down Rooms</a>
                    </div>
                <!--end drop-down for rates-->
                </li>
                 <li class="nav"><a href="gallery.php"style="width: 100px;">Gallery</a></li>
                <li class="nav"><a href="directions.php"style="width: 190px;">Location and Directions</a></li>
                <li class="nav"style="border-right: 0px;"><a href="contact.php"style="width: 100px;"class="active">Contact Us</a></li>
            </ul>
            
            <!--end of navigation bar-->
            <ul class="footcont">
            <center>
                <li class="footnav"><a href="index.php">Home</a></li>
                <li class="footnav"><a href="aboutus.php">About Us</a></li>
                <li class="footnav"><a href="rates.php">Rates and Amenities</a></li>
                <li class="footnav"><a href="gallery.php">Gallery</a></li>
                <li class="footnav"><a href="directions.php">Location and Direction</a></li>
                <li class="footnav" style="border-right: 0;"><a href="contact.php">Contact Us</a></li>
            </center>
            </ul>
        
    </div>

</body>
</html>