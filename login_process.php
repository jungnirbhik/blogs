<?php
session_start();
include("connection.php");

if(isset($_POST['login']));{


$email =$_POST['email'];
$password=$_POST['password'];

if($email && $password){
  
    $query="SELECT * FROM user WHERE email ='{$email}'";
    $final=mysqli_query($conn,$query);
    $numrows=mysqli_num_rows($final);
 }

    $insertquery="insert into user(email,password) values('$email','$password')";
    $result =mysqli_query($conn,$insertquery);
    if($result){

    }

}
?>
