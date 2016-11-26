<?php

include 'config.php';

$updown = "Up and Down Rooms";
$bungalow = "Bungalow House";

$query1 = mysqli_query($conn, "SELECT * FROM tb_room WHERE room_type='$updown'");

    while($row = mysqli_fetch_assoc($query1)){
    
    if($row['time']=="daytime"&&$row['araw']=="offseason")
        $rdo = $row['rate'];
    else if($row['time']=="daytime"&&$row['araw']=="weekend")
        $rdw = $row['rate'];
    else if($row['time']=="overnight"&&$row['araw']=="offseason")
        $rno = $row['rate'];
    else if($row['time']=="overnight"&&$row['araw']=="weekend")
        $rnw = $row['rate'];
    else if($row['time']=="two sessions"&&$row['araw']=="offseason")
        $rbo = $row['rate'];
    else if($row['time']=="two sessions"&&$row['araw']=="weekend")
        $rbw = $row['rate'];
    }
    
$query2 = mysqli_query($conn, "SELECT * FROM tb_room WHERE room_type='$bungalow'");

    while($row = mysqli_fetch_assoc($query2)){
    
    if($row['time']=="daytime"&&$row['araw']=="offseason")
        $rdo2 = $row['rate'];
    else if($row['time']=="daytime"&&$row['araw']=="weekend")
        $rdw2 = $row['rate'];
    else if($row['time']=="overnight"&&$row['araw']=="offseason")
        $rno2 = $row['rate'];
    else if($row['time']=="overnight"&&$row['araw']=="weekend")
        $rnw2 = $row['rate'];
    else if($row['time']=="two sessions"&&$row['araw']=="offseason")
        $rbo2 = $row['rate'];
    else if($row['time']=="two sessions"&&$row['araw']=="weekend")
        $rbw2 = $row['rate'];
    }
    
$day = "daytime";
$night = "overnight";
$both = "two sessions";

$query3 = mysqli_query($conn, "SELECT * FROM tdadditional WHERE time='$day'");
while($row = mysqli_fetch_assoc($query3)){
    $rate_day = $row['rate'];
}

$query4 = mysqli_query($conn, "SELECT * FROM tdadditional WHERE time='$night'");
while($row = mysqli_fetch_assoc($query4)){
    $rate_night = $row['rate'];
}

$query5 = mysqli_query($conn, "SELECT * FROM tdadditional WHERE time='$both'");
while($row = mysqli_fetch_assoc($query5)){
    $rate_both = $row['rate'];
}
?>