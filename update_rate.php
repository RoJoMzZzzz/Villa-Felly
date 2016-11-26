<?php

    include 'config.php';

if(isset($_POST['update'])) {
    
    $category = $_POST['category'];
    $time = $_POST['time'];
    $rate = $_POST['rate'];
    $araw = $_POST['araw'];
    
    if($rate) {
    
    $query = mysqli_query($conn, "UPDATE tb_room SET rate='$rate' 
    WHERE room_type='$category' and time='$time' and araw='$araw'");
    echo "UPDATED!";
    header('location:Admin-rates.php');
    //mysql_close();
    }

}

else if (isset($_POST['update-add'])){
    
    $time = $_POST['time'];
    $rate = $_POST['rate-add'];
    
    if($rate) {
    
    $query = mysqli_query($conn, "UPDATE tdadditional SET rate='$rate' WHERE time='$time'");
    header('location:Admin-rates.php');
    
    }
    
}   


?>