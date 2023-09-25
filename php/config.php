<?php

$conn=mysqli('localhost','root','','voofo');

?>
<?php
@include 'config.php'
if(isset($_POST['submit'])){

    $email=mysqli_real_escape_string($conn, $POST['email']);
    $password=md5($_POST['password']);
    $re_password=md5($_POST['re_password']);

    $select="SELECT * FROM voofo WHERE email="$email" && password="$password"";

    $result=mysqli_query($conn,$select);
    if (mysqli_num_rows($result)>0){
        $error[] = 'Email-id already exist!';
    }
    else{
        if($password!=$re_password){
            $error='password not matched'
        }
        else{
            $insert="INSERT register(Email,password) VALUES('$email','$password')":
            mysqli_query($conn,$insert);
            header('location:index.html');
        }
    }
};
?>
<?php
                if(isset($error as $error)){
                    foreach($error as $error){
                    echo '<span class="error-msg>'.$error.'<span>'
                }
                }
                ?>