<?php include 'config.php' ?>

	<html>
	<head>
		<meta http-equiv="content-type" content="text/html" />
		<meta name="author" content="gencyolcu" />
		<link rel="stylesheet" type="text/css" href="Admin-style.css">
		<link rel="icon" href="fav.png" type="image/png"/>
		<title>ADMIN</title>
	</head>
	<style>
		.modify_reserve{
			width:100%;
			box-sizing:border-box;
			-ms-box-sizing:border-box;
			-moz-box-sizing:border-box;
			-webkit-box-sizing:border-box;
			text-align:center;
		}
		.modify_btn2{
			margin-top: 6px;
			background-color: #39991b;
			color:white;
			border:none;
			border-radius: 5px;
			padding:3px;
		}
		td{
			/*text-align:center;*/
			/*border:1px solid black;*/
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
				<input type="submit" name="id" class="search_Btn" value="Search">
				<input type="text" name="id" class="search_reservation" placeholder="Search by Id">
			</form>
		</ul>




	</div>
	<div class="img-wrapper">
		<img src="admin-icon2.png">
	</div>
<div id="welcome">Welcome Admin</div>
		<!-- dito -->


	
	
		<center>
<?php

	if(isset($_POST['id'])){ 

	$id = $_POST['id'];

		$query = mysqli_query($conn, "SELECT * FROM tbreservation WHERE id='$id'");
		$numrows = mysqli_num_rows($query);
		?>
		
		
			
<?php



		if($numrows!=0){

		while($row = mysqli_fetch_array($query)) { 
			$comp = $row['fname']." ".$row['lname'];
			?>
<br />
<table class="reserve_tbl">
			<tr>
				<th id="reserve_tbl_title" colspan="6"><font size="12">GUEST INFORMATION</font></th>
			</tr>
			<tr class="reserve_row">
				<td class="reserve_cell"><strong>ID</td>
				<td class="reserve_cell"><strong>Guest Name</td>
				<td class="reserve_cell"><strong>Category</td>
				<td class="reserve_cell"><strong>Time</td>
				<td class="reserve_cell"><strong>Reservation Date</td>
				<td class="reserve_cell"><strong>Number of Guest</strong></td>
			</tr>
	<tr>
		<td class="reserve_cell"><?php echo $row['id'] ?></td>
		<td class="reserve_cell"><?php echo $comp ?></td>
		<td class="reserve_cell"><?php echo $row['category'] ?></td>
		<td class="reserve_cell"><?php echo $row['time'] ?></td>
		<td class="reserve_cell"><?php echo $row['reservation_date'] ?></td>
		<td class="reserve_cell"><?php echo $row['num_guests'] ?></td>
	</tr>
</table>

	<div style="position:absolute; top:200; left:550">
	<form method="POST" action="modify-handler.php">
		<table cellspacing="5" cellpadding="5" width="100%">
		<tr>
			<td>ID:</td><td><input type="text" name="rid" value="<?php echo $row['id'];?>" readonly></input></td>
		</tr>
		<tr>
			<td>Guest Name:</td>
			<td><input type="text" name="name" value="<?php echo $comp;?>" readonly></input></td>
		</tr>
		<tr>
			<td>Category: </td>
            <td><select name="category">
            <?php 
            	if($row['category']=="Bungalow House"){ ?>
            		<option value="Bungalow House">Bungalow House</option> 
                    <option value="Up and Down Rooms">Up and Down Rooms</option>
            <?php	}
            	else { ?>

                    <option value="Up and Down Rooms">Up and Down Rooms</option>
                    <option value="Bungalow House">Bungalow House</option> 
            <?php		}
            ?>
                       
                </select></td>
		</tr>
		<tr>
			<td>Time: </td>
            <td><select name="time">
            <?php 
            	if($row['time']=="daytime"){ ?>
            		<option value="daytime">8am - 5pm (Daytime)</option> 
                    <option value="overnight">7pm - 6am (Overnight)</option> 
                    <option value="two sessions">two Sessions</option>  
            <?php	}
            	else if($row['time']=="overnight"){ ?>
                    <option value="overnight">7pm - 6am (Overnight)</option> 
                    <option value="daytime">8am - 5pm (Daytime)</option> 
                    <option value="two sessions">two Sessions</option>  
            <?php		
        		} else { ?>
        			<option value="two sessions">two Sessions</option> 
        			<option value="daytime">8am - 5pm (Daytime)</option> 
                    <option value="overnight">7pm - 6am (Overnight)</option>
        	<?php	} 
            ?>
            </select></td>
		</tr>

		<tr>
			<td>Number of Guests:</td>
			<td><input type="number" name="num_guests" value="<?php echo $row['num_guests']?>" min="1"></input></td>
		</tr>

		<tr>
			<td>Reservation Date:</td>
			<td><input type="date" name="res_date" value="<?php echo $row['reservation_date']?>"></input></td>
		</tr>
		
		
		</table>
		<br /><br />
		<input type="submit" name="modify" value="Modify Reservation"></input>
		<br /><br />
		<input type="submit" name="cancel" value="Cancel Reservation"></input>
		<br /><br />
		<input type="submit" name="approve" value="Approve Reservation">

	</form>

	</div>
	<?php
		}
	
	//inside if
		


	?>

	

	<?php


	} else {
			echo "<h1>No Record Found</h1>";
		} 
	}


?>
</center>

	
	</body>
	</html>


