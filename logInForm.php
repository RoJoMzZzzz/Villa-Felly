
<div class="logincont">
    <label for="our-popup"><div id="admin"><img src="admin-icon.png" width="45" height="45"/></div></label>
    <form class="loginform" method="POST">
       <center><label id="bookNowLbl">Reserve Now!</label><br /><br />
       
       <input type="text" name="fname" placeholder="First Name" class="inputForm"required="required"/><br /><br />
       <input type="text" name="lname" placeholder="Last Name" class="inputForm"required="required"/><br /><br />
       <input type="text" name="address" placeholder="Address" class="inputForm" required="required"/><br /><br />
       <input type="email" name="email" placeholder="Email Address" class="inputForm"  required="required"/><br /><br />
       <input type="number" name="contact" placeholder="Contact No." class="inputForm" required="required"/><br /><br />
       
       
       
       </center>
            
                <input type="submit" name="submit" value="Submit" class="Btn" id="submit"/>
                <input type="reset" name="reset" value="Clear" class="Btn" id="clear"/>
    </form>
                    
    <center>
        <!--<label for="our-popup"id="signup">Sign Up</label>-->
    </center>
</div>

<?php
if(isset($_POST['submit']))
{   

  
   $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['contact'] = $_POST['contact'];
   
    header('location:reservation.php');
}
?>