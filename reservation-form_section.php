
<?php

$rate = null;
$totAddRate = null;
$date = null;
$category = null;
$time = null;
$num = null;
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$contact = $_SESSION['contact'];
$address = $_SESSION['address'];
$email = $_SESSION['email'];


//session_start();
include 'config.php';
if(isset($_POST['reserve'])){


    $date = $_POST['date'];
    $category = $_POST['category'];
    $time = $_POST['time'];
    $num = $_POST['numPersons'];
    $status = "occupied";
    
     
    $fname = $_POST['fname'];   
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    
       
    //$search = mysqli_query("SELECT * FROM tbavailability WHERE date='$date'");
    $res_search = mysqli_query($conn, "SELECT * FROM tbavailability WHERE date='$date'");
    $numrows = mysqli_num_rows($res_search);
    if($numrows!=0){
        while($row = mysqli_fetch_assoc($res_search)){
                $dbdate = $row['date'];
                $dbtime = $row['time'];
                $dbcategory = $row['room_type'];
                $dbstatus = $row['status'];
        }
            
        if($date==$dbdate&&$category==$dbcategory&&$status==$dbstatus){
                echo '<script>alert("Already Taken")</script>';
        }
            
        else {
                $insert_res = "INSERT INTO tbreservation (fname, lname, address, email, contact, reservation_date, category, time, num_guests) 
                    VALUES('$fname','$lname','$address','$email','$contact','$date','$category','$time','$num')";
                $result = mysqli_query($conn, $insert_res) or die(mysqli_error());
                
                
                if($time=="two sessions"){
                    $insert1 = "INSERT INTO tbavailability (room_type, status, date, time)
                    VALUES('$category','$status','$date','$time')";
                    $insert2 = "INSERT INTO tbavailability (room_type, status, date, time)
                    VALUES('$category','$status','$date','$time')";
                    $result1 = mysqli_query($conn, $insert1) or die(mysqli_error());
                    $result2 = mysqli_query($conn, $insert2) or die(mysqli_error());
                    
                } 
                    
                else if($dbstatus!=$status){
                    $insert3 = "INSERT INTO tbavailability (room_type, status, date, time)
                    VALUES('$category','$status','$date','$time')";
                    $result3 = mysqli_query($conn, $insert3) or die(mysqli_error());  
                    
                }
                
                $_SESSION['s_date'] = $date;
                $_SESSION['s_room'] = $category;
                $_SESSION['s_time'] = $time;
                $_SESSION['s_num'] = $num; 
                  
                //echo "<script>window.open('payment.php', '_SELF')</script>";
                //echo "success";
                //mysqli_close($conn);
                
            }
        }
     else {
            
            $query = "INSERT INTO tbreservation (fname, lname, address, email, contact, reservation_date, category, time, num_guests) 
                    VALUES('$fname','$lname','$address','$email','$contact','$date','$category','$time','$num')";
            $result_query = mysqli_query($conn, $query) or die(mysqli_error());
            
            if($time=="two sessions"){
                    $insert_1 = "INSERT INTO tbavailability (room_type, status, date, time)
                    VALUES('$category','$status','$date','$time')";
                    $insert_2 = "INSERT INTO tbavailability (room_type, status, date, time)
                    VALUES('$category','$status','$date','$time')";
                    $result_1 = mysqli_query($conn, $insert_1) or die(mysqli_error());
                    $result_2 = mysqli_query($conn, $insert_2) or die(mysqli_error());
                    
                    } 
                    
                else {
                    $insert_3 = "INSERT INTO tbavailability  (room_type, status, date, time)
                    VALUES('$category','$status','$date','$time')";
                    $result_3 = mysqli_query($conn, $insert_3) or die(mysqli_error());  
                    
                    }
                
                $_SESSION['s_date'] = $date;
                $_SESSION['s_room'] = $category;
                $_SESSION['s_time'] = $time;
                $_SESSION['s_num'] = $num;
                //echo "<script>window.open('payment.php', '_SELF')</script>";
                //mysqli_close($conn);
            
        }

//session_start();
$date = $_SESSION['s_date'];
$room = $_SESSION['s_room'];
$time = $_SESSION['s_time'];
$num = $_SESSION['s_num'];

$_SESSION['payment'] = 1;


$check_date = date('w', strtotime($_SESSION['s_date']));
if ($check_date > 0&&$check_date < 5) {
        $araw = "offseason";
}
else {
        $araw = "weekend";
}


$select = mysqli_query($conn, "SELECT * FROM tb_room WHERE room_type='$room' and araw='$araw' and time='$time'");


while($row = $select->fetch_assoc()){
        $rate = $row['rate'];
    }
    
//echo "$araw";
//echo "<br />$rate";

$query1 = mysqli_query($conn, "SELECT * FROM tdadditional WHERE time='$time'");
while($row = mysqli_fetch_array($query1)) {
    $addrate = $row['rate'];
}

//$add = 0;
//$totAddRate = 0;

if($num > 25) {
    $add = $num-25;
    $totAddRate = $addrate * $add;
}
else {
    $add = 0;
    $totAddRate = 0;
}


  }
        
?>





<div class="reserveCont">
<center><label id="please">Please complete all the remaining 
fields to complete your reservation</label></center>
  <div class="formWrapper">
      <form method="POST">
      <label id="yourreserveLbl">Guest Information</label><br /><br />
          <input type="text" name="fname" placeholder="First Name" size="15"class="inputForm2"required="required" value="<?php echo $fname; ?>"/>
          <input type="text" name="lname" placeholder="Last Name" size="15"class="inputForm2"required="required" value="<?php echo $lname; ?>"/><br /><br />
          <input type="text" name="address" placeholder="Address" size="37"class="inputForm2" required="required" value="<?php echo $address; ?>"/><br /><br />
          <input type="email" name="email" placeholder="Email Address" size="37"class="inputForm2"  required="required" value="<?php echo $email; ?>"/><br /><br />
          <input type="number" name="contact" placeholder="Contact No." class="inputForm2" required="required" value="<?php echo $contact; ?>"/><br /><br />
      
  </div>     


      <div class="formWrapper2">
      <label id="reservationTag">Guest Reservation</label>
        <table>
          <tr>
            <td><label id="dateLbl">Reservation Date:</label></td>
            <td><input type="date" name="date" class="inputForm3" required="required" min="<?php echo date('Y-m-d')?>" value="<?php echo $date ?>"/></td>
          </tr>
          <tr>
            <td><label id="housetypeLbl">House Type:</label></td>
            <td><select name="category"class="inputForm3">
            <option value="<?php echo $category ?>" selected><?php echo $category ?></option>
              <option value="Up and Down Rooms">Up and Down Rooms</option>
              <option value="Bungalow House">Bungalow House</option>
            </select></td>
            </tr>
            <tr>
            <td><label id="timeLbl">Time:</label></td>
            <td><select name="time" class="inputForm3">
            <option value="<?php echo $time ?>" selected><?php echo $time ?></option>
              <option value="daytime">Daytime(8am - 5pm)</option>
              <option value="overnight">Overnight(7pm - 6am)</option>
             <option value="two sessions">2 Sessions(22 Hours)</option>
            </select></td>
            </tr>
        <tr>
          <td><label id="guestLbl">Number of Guest:</label></td>
          <td><input type="number" name="numPersons" class="inputForm3"required="required" min="1" value="<?php echo $num ?>" /></td>
        </tr>
        

          
        
          <tr>
            <td><input type="checkbox" name="iagree"required="required" /><font size="4" color="white">&nbsp;i agree in the</font></td>
            <td><label for="our-popup" id="termsncond">terms and conditions</label></td>
         </tr> 
          </table>
          <center>
          <input type="submit" name="reserve" value="Submit" class="reserveBtn"/></label>
          <input type="reset" name="clear" value="Clear" class="reserveBtn"/>
          </center>
        </form>
    </div>
    <div class="formWrapper3">
      <center><br/><br/><br/><br/><br/>
      <label id="finishLbl"><font size="15">RATE</font></label>
      <form class="output_form">
        <label class="outputLbl">Villa Rate</label><br/>
        <input type="text" name="regular rate" class="output"placeholder="Regular Rate" value="<?php echo $rate ?>"><br/><br/>
        <label class="outputLbl">Additional Rate</label><br/>
        <input type="text" name="guest_additional" class="output"placeholder="Additional"  value="<?php echo $totAddRate ?>"><br/><br/>
        <label class="outputLbl">Total Rate</label><br/>
        <input type="text" name="total_rate" class="output" placeholder="Total"  value="<?php echo ($rate+$totAddRate) ?>">
      </form><br/><br/>
      
      </center>
    </div>
</div>


<?php

session_unset();
?>