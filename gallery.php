<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="Style.css"/>
	<link rel="stylesheet" type="text/css" href="Style (2).css"/>
	 <link rel="stylesheet" type="text/css" href="footerStyleG.css"/>
    <link rel="icon" href="fav.png" type="image/png"/>
</head>

<style>

.gallery{
	margin-top:0px;
	margin-left:50px;
	/*border:1px solid white;*/
    height:1189px;
	position:absolute;
	overflow: hidden;
	padding:10px 15px;
	left: -41px;
	top: 270px;
}
.imgcontainer{
    display:inline;
    float:left;
    /*border: 1px solid red;*/
    width:350px;
    height:340px;
    padding:10px;
    margin:2px;
}
div.imagecontainer img{
    width: 100%;
    height: auto;
    
}
.imgcontainer:hover{
    box-shadow: 0 20px 20px 0 rgba(0,0,0,0.24),0 20px 50px 0 rgba(0,0,0,0.19);
}
.desc{
    /*border: 1px solid green;*/
    text-align:center;
    color:white;
    margin-top:10px;
    height:85px;
    padding:15px;
}
/*.desc:hover{
    box-shadow: 0 20px 20px 0 rgba(0,0,0,0.24),0 20px 50px 0 rgba(0,0,0,0.19);
}*/
.socialicons{
    margin-top: 395px;
    border:1px solid black;
    height:85px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    background-color: black;
    opacity:0.6;
    box-shadow: 0 0px 5px 6px black;
}
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
<div class="divpageG2">
        <?php include("facebooklink.php"); ?>
    
        <?php include("villalogo.php"); ?>
        
        <?php include("navigationbar.php"); ?>
		
<!-- Property of kenzo -->  
<div class="bck"> 
<br/>
<div class="bck2">
<br>
<center>  
<center>
<div id="text">
	<font color="#FFFF99">VACATION HOME<br/>
A timeless experience where people can stay and forget about time.
	<img src="pics/Grey-curly-line-design-hi.png"/>
	</font>
</div>
</center>
<ul class="caption-style-3">
			<li>
				<img src="garden/g18.jpg" alt="">
				<div class="caption">
				<a href="gardenG1.php">
					<div class="blur"></div>
					<div class="caption-text">
						<h1>Villa's Garden</h1>
						<p>See Photos Here</p>
					</div>
			</a>
				</div>
			</li>
			<li>
				<img src="bahay1/b19.jpg" alt="">
				<div class="caption">
				<a href="bungalow.php">
					<div class="blur"></div>
					<div class="caption-text">
						<h1>Bungalow House</h1>
						<p>See Photos Here</p>
					</div>
				</a>
				</div>
			</li>
			<li>
				<img src="bahay2/r16.jpg" alt="">
				<div class="caption">
				<a href="red1.php">
					<div class="blur"></div>
					<div class="caption-text">
						<h1>2-Storey House</h1>
						<p>See Photos Here</p>
					</div>
				</a>
				</div>
			</li>
			<li>
				<img src="swimming pool/s5.jpg" alt="">
				<div class="caption">
				<a href="pool1.php">
					<div class="blur"></div>
					<div class="caption-text">
						<h1>Covered Pool</h1>
						<p>See Photos Here</p>
					</div>
				  </a>
				</div>
			</li>
			<li>
				<img src="Hall/h5.jpg" alt="">
				<div class="caption">
				<a href="hall1.php">
					<div class="blur"></div>
					<div class="caption-text">
						<h1>Villa Fely's Hall</h1>
						<p>See Photos Here</p>
					</div>
				  </a>
				</div>
			</li>
			<li>
				<img src="guest/12745533_1150027258342400_1467105754222387796_n.jpg" alt="">
				<div class="caption">
				<a href="#">
					<div class="blur"></div>
					<div class="caption-text">
						<h1>Guests Experiences</h1>
						<p>See Photos Here</p>
					</div>
				  </a>
				</div>
			</li>
	</ul>
</center>
</div>
</div>
<?php include("footnavigation.php"); ?>
</div>
</body>
</html>