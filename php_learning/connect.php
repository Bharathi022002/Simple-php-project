<?php 

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $conn=mysqli_connect('127.0.0.1:3307','root','','student') or die (mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['rollno']) && isset($_POST['email']) && isset($_POST['dept']))
    { 
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];

    $sql="INSERT INTO `register`(`name`,`rollno`,`email`,`dept`) VALUES ('$name','$rollno','$email','$dept')";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "success";
    }
    else{
        echo "error";
    }
}
}
?>