<?php
 session_start();
   include("connection.php");
   if(isset($_POST['login']));{
  
  $username =$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $repassword=$_POST['repassword'];



 if($username && $email && $password && $repassword  ){


  
    
    

    


    $insertquery="INSERT into user (username,email,password,repassword) values('$username','$email','$password',$repassword)";
    $result =mysqli_query($conn,$insertquery);
    if($result){
        echo"this is input";

    }
}
}
?>
