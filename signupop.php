<?php include ('config.php');
//session_start(); 
?>
<span>
    <input type="checkbox" id="our-popup" class="smoosh" /><!-- invisible; when checked, the popup opens -->
    <label for="our-popup" class="overlay"></label>
   
   <!-- the popup starts here -->
   
    <div class="overlay-dialogue">
    <form method="POST">
        <label for="our-popup"></label><br/><br/>
        <center>
            <label id="adminLbl">WELCOME ADMIN!</label><br />
            <input type="text" name="username" placeholder="Adminname" class="signUpInput" required/><br/>
            <input type="password" name="password" placeholder="Password" class="signUpInput" required/><br />
            <input type="submit" name="login" value="Log In" class="logInBtn"/><br />
            </center>
    </form>
    </div>
</span>

<?php
if(isset($_POST['login'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = mysqli_query($conn, "SELECT * FROM tbadmin WHERE username='$username'");
    

    $numrows = mysqli_num_rows($query);
    //if($query->num_rows){
    if($numrows!=0){
        while($row = mysqli_fetch_assoc($query)){
            $dbusername = $row['username'];
            $dbpassword = $row['password'];
        }
        
        if($username==$dbusername&&$password==$dbpassword){
            
            echo '<script>window.open("Admin-rates.php", "_self")</script>';
        }
        else {
            echo '<script type="text/javascript">
            alert("Incorrect input!! ");
        </script>';
        }
        
    }
    else {
        echo '<script type="text/javascript">
            alert("Incorrect input!! ");    
        </script>';
        //die("That user doesn't exists!");
        
        }
    
 }
?>