<?php 
include 'connect.php';

   $username=$_POST['uname'];
   $password=$_POST['psw'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM customer WHERE username='$username' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['username']=$row['username'];
    header("Location: home.html");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }
$conn->close();
?>