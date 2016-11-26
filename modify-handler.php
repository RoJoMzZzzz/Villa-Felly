<?php include 'config.php';

$rid = $_POST['rid'];	
$category = $_POST['category'];
$time = $_POST['time'];
$num_guests = $_POST['num_guests'];
$date = $_POST['res_date'];

if(isset($_POST['modify'])){

	$search = mysqli_query($conn, "SELECT * FROM tbavailability WHERE date ='$date' AND room_type='$category' AND time='$time'");

	$numrows = mysqli_num_rows($search);

	if($numrows!=0){

	?>  <script type="text/javascript">alert("Already taken!!")</script>

	<?php
		header('location:Admin-modify.php');
	} 
	else {			
		$up = mysqli_query($conn, "UPDATE tbreservation SET category='$category', time='$time', num_guests='$num_guests', reservation_date='$date' WHERE id='$rid'");
		header('location:Admin-reservation.php');
				
	}
			

}
elseif (isset($_POST['cancel'])) {
	
	$query = mysqli_query($conn, "DELETE from tbreservation WHERE id='$rid'");

	$query1 = mysqli_query($conn, "DELETE from tbavailability WHERE date='$date' AND rate_type='$category' AND time='$time'");

	?> <script type="text/javascript">alert("Record Deleted!!")</script>
<?php
		//echo "Record DELETED!!! ";
		header('location:Admin-modify.php');
	}

elseif (isset($_POST['approve'])) {
	$query = mysqli_query($conn, "UPDATE tbreservation SET status='approved' WHERE id='$rid'");
	echo "SUCCESFULLY APPROVED RESERVATION";
	header("location:Admin-modify.php");
}

?>