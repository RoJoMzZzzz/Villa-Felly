<?php
include 'config.php';
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

?>



<div class="reserveCont">
<center><label id="please">Please complete all the remaining 
fields to complete your reservation</label></center>
  <div class="formWrapper">
      <form method="POST">
      <label id="yourreserveLbl">Guest Information</label><br /><br />
          <input type="text" name="fname" placeholder="First Name" size="15"class="inputForm2"required="required" value="<?php echo $_SESSION['fname']; ?>"/>
          <input type="text" name="lname" placeholder="Last Name" size="15"class="inputForm2"required="required" value="<?php echo $_SESSION['lname']; ?>"/><br /><br />
          <input type="text" name="address" placeholder="Address" size="37"class="inputForm2" required="required" value="<?php echo $_SESSION['address']; ?>"/><br /><br />
          <input type="email" name="email" placeholder="Email Address" size="37"class="inputForm2"  required="required" value="<?php echo $_SESSION['email']; ?>"/><br /><br />
          <input type="number" name="contact" placeholder="Contact No." class="inputForm2" required="required" value="<?php echo $_SESSION['contact']; ?>"/><br /><br />
      
  </div>     


      <div class="formWrapper2">
      <label id="reservationTag">Guest Reservation</label>
        <table>
          <tr>
            <td><label id="dateLbl">Reservation Date:</label></td>
            <td><input type="date" name="date" class="inputForm3" required="required" min="<?php echo date('Y-m-d')?>"/></td>
          </tr>
          <tr>
            <td><label id="housetypeLbl">House Type:</label></td>
            <td><select name="category"class="inputForm3">
              <option value="Up and Down Rooms">Up and Down Rooms</option>
              <option value="Bungalow House">Bungalow House</option>
            </select></td>
            </tr>
            <tr>
            <td><label id="timeLbl">Time:</label></td>
            <td><select name="time" class="inputForm3">
              <option value="daytime">Daytime(8am - 5pm)</option>
              <option value="overnight">Overnight(7pm - 6am)</option>
             <option value="two sessions">2 Sessions(22 Hours)</option>
            </select></td>
            </tr>
        <tr>
          <td><label id="guestLbl">Number of Guest:</label></td>
          <td><input type="number" name="numPersons" class="inputForm3"required="required" min="1"/></td>
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
      <center>
      <label id="finishLbl">Pag natapos na reservation mo dito 
      mo makikita kung magkano babayaran mo (Paki-english nalang)</label>
      <form class="output_form">
        <label class="outputLbl">Villa Rate</label><br/>
        <input type="text" name="regular rate" class="output"placeholder="Regular Rate" value="<?php echo $rate ?>"><br/><br/>
        <label class="outputLbl">Additional Rate</label><br/>
        <input type="text" name="guest_additional" class="output"placeholder="Additional" value="<?php echo $totAddRate ?>"><br/><br/>
        <label class="outputLbl">Total Rate</label><br/>
        <input type="text" name="total_rate" class="output" placeholder="Total" value="<?php echo $rate+$totAddRate?>">
      </form><br/><br/>
      <label id="finishLbl">Dagdag mo nalang dito  sa baba yung Payment kung magagawa. Lahat to makikita sa (reservation-form_section.php)</label>
      </center>
    </div>
</div>
