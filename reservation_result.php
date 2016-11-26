
<?php
session_start();
include 'config.php';
if(isset($_POST['reserve'])){

    if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
echo "Correct Code Entered";
//Do you stuff


    
    
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
                echo '<script>alert("taken na!!!")</script>';
                //echo "dasdasdadas";
                header('location:reservation.php');
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
                  
                header('location:payment.php');
                //echo "success";
                mysqli_close();
                
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
                header('location:payment.php');
                mysqli_close();
            
        }

        }
    else
    {
        echo "<script>alert('Incorrect captcha code...')</script>";
    } 
    
    }
    
    ?>