<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $outlet=$_POST['outlet'];
    $nof=$_POST['nof'];
    $date=$_POST['date'];
    $time=$_POST['time'];
$con = new mysqli('localhost','root','','voofo');
if ($con){
    //echo "Connection successful";
    $sql="insert into `bbn`(outlet,nof,date,time)values('$outlet','$nof','$date','$time')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Table booked successfully";
    }
    else{
        die(mysqli_error($con));
    }
}
else{
    die(mysqli_error($con));
}
}
?>