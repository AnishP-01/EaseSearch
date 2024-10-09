<?php
include 'connect.php';
$username=$_POST['uname'];
$email=$_POST['eid'];
$mobileno=$_POST['mno'];
$password=md5($_POST['psw']);
// $password=md5($password);
echo $username;
 $checkEmail="SELECT * From customer where email='$email'";
 $result=$conn->query($checkEmail);
 if($result->num_rows>0){
    echo "Email Address Already Exists !";
 }
 else{
    $insertQuery="INSERT INTO customer(username,email,mobileno,password)
                   VALUES ('$username','$email','$mobileno','$password')";
        if($conn->query($insertQuery)==TRUE){
            header("location: home.html");
        }
        else{
            echo "Error:".$conn->error;
        }
}

?>