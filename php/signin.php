<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];

$con = new mysqli('localhost','root','','voofo');
if ($con){
    //echo "Connection successful";
    $sql="select * from `register` where '$email','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
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