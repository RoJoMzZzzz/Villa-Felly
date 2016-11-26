<?php include ("rates-handler.php"); ?>

	<!DOCTYPE HTML>
	<html>
	<head>
		<meta http-equiv="content-type" content="text/html" />
		<meta name="author" content="gencyolcu" />
		<link rel="stylesheet" type="text/css" href="Admin-style.css">
		<link rel="icon" href="fav.png" type="image/png"/>
		<title>ADMIN</title>
	</head>
	<style>
		#rates{
			background-color:rgba(114,232,83,0.2);
		}
	</style>
	<body>
	
	<div class="nav_Wrapper">
		<ul class="navigation">
			<li class="list" id="rates"><a href="Admin-rates.php">Rates</a></li>
			<li class="list"><a href="Admin-reservation.php">Reservation</a></li>
			<li class="list"><a href="Admin-guest-info.php">Guest Info</a></li>
			<li class="list"><a href="Admin-modify.php">Modify Reservation</a></li>
			<li class="list"><a href="out.php">Log-out</a></li>
			<!--<form>
				<input type="submit" name="search_Btn" class="search_Btn" value="Search">
				<input type="text" name="search_lang" class="search_reservation" placeholder="Search">
			</form>-->
		</ul>
	</div>
	
<table class="up_down_Tbl">
			<tr>
				<th colspan="3" class="title">Up and Down Rates</th>
			</tr>
			<tr class="row">
				<td class="cell">Time</td>
				<td class="cell">Off Season Rates</td>
				<td class="cell">Holiday/Weekends Rates</td>
			</tr>
			<tr class="row">
				<td class="cell">Daytime(8am - 5pm)</td>
				<td class="cell"><?php echo "Php ".$rdo ?></td>
				<td class="cell"><?php echo "Php ".$rdw ?></td>
			</tr>
			<tr class="row">
				<td class="cell">Overnight(7pm - 6am)</td>
				<td class="cell"><?php echo "Php ".$rno ?></td>
				<td class="cell"><?php echo "Php ".$rnw ?></td>
			</tr>
			<tr class="row">
				<td class="cell">2 Sessions(22 Hours)</td>
				<td class="cell"><?php echo "Php ".$rbo ?></td>
				<td class="cell"><?php echo "Php ".$rbw ?></td>
			</tr>
		</table>

		<table class="bungalow_Tbl">
			<tr class="row">
				<th colspan="3" class="title">Bungalow House</th>
			</tr>
			<tr class="row">
				<td class="cell">Time</td>
				<td class="cell">Off Season Rates</td>
				<td class="cell">Holiday/Weekends Rates</td>
			</tr>
			<tr class="row">
				<td class="cell">Daytime(8am - 5pm)</td>
				<td class="cell"><?php echo "Php ".$rdo2 ?></td>
				<td class="cell"><?php echo "Php ".$rdw2 ?></td>
			</tr>
			<tr class="row">
				<td class="cell">Overnight(7pm - 6am)</td>
				<td class="cell"><?php echo "Php ".$rno2 ?></td>
				<td class="cell"><?php echo "Php ".$rnw2 ?></td>
			</tr>
			<tr class="row">
				<td class="cell">2 Sessions(22 Hours)</td>
				<td class="cell"><?php echo "Php ".$rbo2 ?></td>
				<td class="cell"><?php echo "Php ".$rbw2 ?></td>
			</tr>
		</table>
		
		<table class="Additional_Tbl">
			<tr class="row">
				<th colspan="3" class="title">Additional Person</th>
			</tr>
			<tr class="row">
				<td class="cell">Daytime(8am - 5pm)</td>
				<td class="cell"><?php echo "Php ".$rate_day ?></td>
			</tr>
			<tr class="row">
				<td class="cell">Overnight(7pm - 6am)</td>
				<td class="cell"><?php echo "Php ".$rate_night ?></td>
			</tr>
			<tr class="row">
				<td class="cell">2 Sessions(22 Hours)</td>
				<td class="cell"><?php echo "Php ".$rate_both ?></td>
			</tr>
			
		</table>



	<div class="img-wrapper">
		<img src="admin-icon2.png">
	</div>
<div id="welcome">Welcome Admin</div>
		<div class="update">
			<center>
			<label id="update_rates_Lbl">Update Rates</label>
			</center>
		</div>
	<div class="form_wrapper">
		<form method="POST" action="update_rate.php">
		<center>
		Category:<br/>
			<select class="to_modify" name="category">
				<option value="Up and Down Rooms">Up and Down House</option>
				<option value="Bungalow House">Bungalow House</option>
			</select>
		Time:<br/>
			<select class="to_modify" name="time">
				<option value="daytime">Daytime</option>
				<option value="overnight">Overnight</option>
				<option value="two sessions">2 Sessions</option>
			</select>
		Day:<br/>
			<select class="to_modify" name="araw">
				<option value="offseason">Off Season</option>
				<option value="weekend">Weekends / Holiday</option>
			</select>
		Rate:<br/>
			<input type="number" name="rate" class="to_modify">
			<input type="submit" name="update" value="Update Now"class="modify_btn">
		</center>
		</form>
	</div>
	<div class="update">
			<center>
			<label id="update_rates_Lbl">Additional Persons</label>
			</center>
	</div>
	<div class="form_wrapper">
		<form>
		<center>
			Time:
			<select class="to_modify" name="time">
				<option value="daytime">Daytime</option>
				<option value="overnight">Overnight</option>
				<option value="two sessions">2 Sessions</option>
			</select>
			Rate:
			<input type="number" name="rate-add" 
			class="to_modify">
			<input type="submit" name="update-add"
			value="Update Now" class="modify_btn">
			</center>
		</form>
	</div>
	
	</body>
	</html>

