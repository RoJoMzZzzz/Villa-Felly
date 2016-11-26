<?php

include "config.php";

$sql = "SELECT * FROM tbreservation";

if(isset ($_POST['search'])){


	$search_term = mysql_real_escape_string($_POST['search_box']);

	if($search_term!="all"){

	$sql .= " WHERE fname = '{$search_term}'";

	$sql .= " OR lname = '{$search_term}'";

	}


}

$query = mysqli_query($conn, $sql) or die(mysqli_error());

?>

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
		td{
			text-align:center;
			border:1px solid black;
		}
	</style>
	<body>
	<div class="nav_Wrapper">
		<ul class="navigation">
			<li class="list"><a href="Admin-rates.php">Rates</a></li>
			<li class="list"><a href="Admin-reservation.php">Reservation</a></li>
			<li class="list"><a href="Admin-guest-info.php">Guest Info</a></li>
			<li class="list"><a href="Admin-modify.php">Modify Reservation</a></li>
			<li class="list"><a href="out.php">Log-out</a></li>
			<form method="POST">
				<input type="submit" name="search" class="search_Btn" value="Search">
				<input type="text" name="search_box" class="search_reservation" placeholder="Search">


			</form>
		</ul>
	</div>
	<div class="img-wrapper">
		<img src="admin-icon2.png">
	</div>
	<div id="welcome">Welcome Admin</div>
		<table class="guest_tbl">
			<tr>
				<th id="guest_tbl_title" colspan="4">Guest Information</th>
			</tr>
			<tr class="guest_row">
				
				<td class="guest_cell">Guest Name</td>
				<td class="guest_cell">Address</td>
				<td class="guest_cell">Category</td>
				<td class="guest_cell">Time</td>
			</tr>

			<?php while ($row = mysqli_fetch_array($query)) { ?>

			<tr>
				<td><?php echo $row['fname']." ".$row['lname']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['contact']; ?></td>
			</tr>

			<?php } ?>


		</table>
	</body>
	</html>

