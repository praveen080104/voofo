<?php

$Email = $_POST['email'];
$password = $_POST['password'];
$re_password=$_POST['re_password']

if (!empty($Email) || !empty($password))
{

    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="voofo";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if (myspli_connect_error()){
    die('Connect Error('.mysqli_connect_errno() .')'.mysqli_connect_error());

else{
    $SELECT ="SELECT Email from register where email = ? Limit 1";
    $INSERT ="INSERT Into register(Email,password,re_password)values(?,?,?)"
$stmt = $conn->prepare($Select);
$stmt->bind_param("s",$email);
$stmt->execute();
$stmt->bind_result();
$stmt->store_result();
$rnum =$stmt->num_rows;

if ($rnum==0)
{
    $stmt->close();
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ss",$Email,$password,$re_password);
    $stmt->execute();
    echo "New record inserted successfully";
}
else{
    echo "Email aldready exist"
}
}
$stmt->close();
$conn->close();
}
}
else{
    echo "all field are required";
    die();
}
?>