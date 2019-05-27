<?php

session_start();
include 'dbh.php';
$msg = $_POST['msg'];
$name = $_SESSION['name'];
//$date =gmdate('Y-m-d H:i:s');
$dateTime = new DateTime();
$dateTime->setTimeZone(new DateTimeZone('Asia/Colombo')); 
//echo $dateTime->format('Y-m-d H:i:s');
//echo $date;
$sql = "INSERT INTO posts(msg,name,date) VALUES('".$msg."', '".$name."', '".$dateTime->format('Y-m-d H:i:s')."')";

$result = $conn->query($sql);
if(!$result){
    echo 'error';
} else {

     header("Location:home.php");
}
//header("Location:home.php");
?>