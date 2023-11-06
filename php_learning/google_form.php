<?php
Include("config.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];
    $gender=$_POST['gender'];
    $profile = $_FILES["profile"]["name"];
    // $target_dir = "image/";
    // $target_file = $target_dir . basename($_FILES["profile"]["name"]);
    $qur="select `id` from `google_form` where `rollno`='$rollno' or `email`='$email'";
    $out=mysqli_query($conn,$qur);
    if(mysqli_num_rows($out)>0)
    {
        ?>
        <script>
            alert("Duplicate details not allowed");
        </script>
        <?php
    }
    else{
    $sql="INSERT INTO `google_form`(`name`, `rollno`, `email`, `dept`, `gender`,`profile`) VALUES ('$name','$rollno','$email','$dept','$gender','$profile')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        ?>
        <script>
            alert("Registration successfull");
            window.location.href="login.php";
        </script>
        <?php
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
</head>
<body style="size:500px">
<center>
    <form action="" method="post" enctype="multipart/form-data">
    <h1 style="color: red">REGISTRATION FORM</h1>
    Name :
    <input type="text" name="name" /><br><br>
    Roll No :
    <input type="text" name="rollno" /><br><br>
    Email :
    <input type="email" name="email" /><br><br>
    Dept :
    <input type="text" name="dept" /><br><br>
    Gender :
    <input type="radio" name="gender" value="Male"/>Male
    <input type="radio" name="gender" value="Female"/>Female <br><br>
    Profile : 
    <input type="file" name="profile" /><br><br>
    <input type="submit" name="submit" value="submit"/>
</form>
</center>
</body>
</html>