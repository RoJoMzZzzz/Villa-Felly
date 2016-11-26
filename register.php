<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Location and Directions</title>
    <link rel="stylesheet" type="text/css" href="Style.css"/>

    <link rel="icon" href="fav.png" type="image/png"/>
</head>

<style>
/*-----------------------------------------------*/
.formdivcont{
    /*background-color: ;*/
    margin-top:150px;
    padding:5px;
}
.formdiv{
    margin: auto;
    width:700px;
    
}
.input{
    text-align:center;
    font-size: 20px;
    margin: 20px;
    font-family: Tahoma;
    border-radius: 10px;
    border:none;
    padding:8px;
    
}
.btns{
    background-color: #2b5272;
    color:white;
    margin:5px;
    border-radius: 10px;
    font-size:15px;
    padding:5px 10px;
}
.btns:hover{
    
}
#clr{
    margin-left:5px;
}
/*------------------------------------------------*/
.login{
    background: rgba(255,255,255,0.2);
    text-align:center;
    color:white;
    font-family:Tahoma;
    font-size: 25px;
    position: absolute;
    width:350px;
    margin-top: 650px;
    padding:5px;
    border-radius: 15px;
}
/*---------------------------------*/
label.overlay {
 position: fixed;
 display: none;
 height: 100%;
 width: 100%;
 left: 0;
 top: 0;
}
input[type=checkbox].smoosh:checked ~ label.overlay {
 display: block;
 z-index: 500;
}
div.overlay-dialogue {
    border-radius: 5px;
 position: fixed;
 display: none;
 width: 500px;
 height:500px;
 top: 0;
 bottom: 0;
 left:0;
 right:0;
 margin-left: auto;
 margin-right:auto;
 margin-top: auto;
 margin-bottom: auto;
 background: whitesmoke;
 padding: 15px;
}
input[type=checkbox].smoosh:checked ~ div.overlay-dialogue {
 display: block;
 z-index: 505;
}
.loginInput{
    text-align:center;
    font-size: 20px;
    margin: 5px;
    font-family: Tahoma;
    border-radius: 10px;
    border:0.5px solid black;
    padding:8px;
}
.signUpInput{
    text-align:center;
    font-size: 30px;
    margin: 5px;
    font-family: Tahoma;
    border-radius: 15px;
    border:0.5px solid black;
    padding:5px;
}
.loginBtn{
    padding:5px;
    
}
/* eye candy */

.smoosh {
 display: none;
 line-height: 0;
 margin: 0 0 0 0;
 padding: 0 0 0 0;
 color:transparent;
 background: transparent;
 border: none;
 outline: none;
 height: 0;
 width: 0;
}
div.overlay-dialogue {
 overflow-y: auto;
 animation: START 0.3s ease-in-out;
}
@keyframes START {
 0% {transform: rotateY(55deg); opacity: 0;}
 100% {transform: rotateY(0deg); opacity: 1;}
}

label.overlay {
 background-color: rgba(0,0,0,.5);
 text-align: center;
 color: rgba(200, 200, 200, 0.5);
 line-height: 120%;
}
label.overlay:hover, label.overlay:active {
 line-height: 120%;
 color: darkgrey;
}
label.overlay:active {
 line-height: 130%;
}
label.overlay:before {
    font-size:25px;
    content: 'Tap here to dismiss';
}

label {
 color: white;
 font-size:25px;
}
label:hover {
 color: blue;
 cursor:pointer;
}
label:active {
 color: orange;
}

</style>
<body>
    <div class="divpage">
    
        <div class="divlogo"><img class="imglogo" src="logo3.png"/></div>
        
        <div class="login">
            <input type="text" name="userName" placeholder="User Name" class="loginInput"/><br />
            <input type="password" name="password" placeholder="Password" class="loginInput"/><br />
            <input type="submit" name="login" value="Log In" class="loginBtn"/><br />Or<br />
                <label for="our-popup">Sign Up</label>
        </div>
        
        <span>
            <input type="checkbox" id="our-popup" class="smoosh" /><!-- invisible; when checked, the popup opens -->
            <label for="our-popup" class="overlay"></label>
   
   <!-- the popup starts here -->
   
            <div class="overlay-dialogue">
                <form>
                    <label for="our-popup"><div class="closebtn"></div></label></br></br>
            <center>
                <input type="text" name="fname" placeholder="First Name" class="signUpInput"/></br>
                <input type="text" name="lname" placeholder="Last Name" class="signUpInput"/></br>
                <input type="submit" name="submit" value="Submit Information" class="btns"/>
                <input type="reset" name="reset" value="clear" class="btns"/>
            </center>
                </form>
            </div>
        </span>
        
        <!--<form>
            <div class="formdivcont">
            <center><font size="30px" face="Monotype Corsiva" color="white">Registration Form</font></center><br />
            <div class="formdiv">
            <center>
            <input type="text" name="fname" placeholder="First Name" class="input"/><br />
            <input type="text" name="lname" placeholder="Last Name" class="input"/><br />
            <input type="text" name="mname" placeholder="Middle Name" class="input"/><br />
            <input type="text" name="address" placeholder="Address" class="input" size="40"/><br />
    <font face="Monotype Corsiva" color="white" size="5px">Birthday:<br /></font>
                <input type="date" name="date" value="Calendar" class="input"/><br />
                <font face="Monotype Corsiva" color="white" size="5px">Gender: <br /></font>
                <select class="input">
                    <option value="Male">Male</option>
                    <option value="Male">Female</option>
                </select><br />
                <input type="search" name="email" class="input" placeholder="Email Address" size="30"/><br />
                <input type="submit" name="submit" value="Register" class="btns"/>
                <input type="reset" name="reset" value="Clear" class="btns" id="clr"/><br />
                
            </center>
            </div>
            </div>
        </form>-->
        
        
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
            
    </div>

</body>
</html>