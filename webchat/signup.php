<?php

include 'dbh.php';
$username = $_POST['username'];
$email = $_POST['email'];
$Password = $_POST['Password'];


$sql = "INSERT INTO signup(username, email, password) VALUES ('".$username."','".$email."', '".$Password."' )";
 $result = $conn->query($sql);
if(!$result){
    echo 'please enter valid details';
}else{
    
    echo 'Signin Success';
    header("Location:index.php");
}
   


//header("Location:index.php");


?>