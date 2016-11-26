<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Background</title>
    <link rel="stylesheet" type="text/css" href="Style.css"/>
    <link rel="stylesheet" type="text/css" href="aboutusStyle.css"/>
    <link rel="stylesheet" type="text/css" href="footerStyle.css"/>
    <link rel="icon" href="fav.png" type="image/png"/>
</head>
<style>
    #aboutus{
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    background-color:rgba(0, 111, 72, 0.7);
    color: #fefefe;
    }
    #Bckgrnd{
    opacity: 0.9;
    color: white;
    background:url("background-hovers.png")no-repeat transparent 10px 10px;
    background-size:30px 30px;
}
</style>
<body>
    <div class="divpage">
        <?php include("facebooklink.php"); ?>
        <?php include("villalogo.php"); ?>
        
        <?php include("navigationbar.php"); ?>
        
        <div class="aboutusCont">
                
            <?php include("felySection.php"); ?>
            
            <div class="backgroundCont"><label id="bckLabel">Background</label>
            <?php include("bckgrndDescSection.php"); ?>
            </div>
        </div>
       <?php include("footnavigation.php"); ?>
    </div>

</body>
</html>