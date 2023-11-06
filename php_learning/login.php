<?php
Include("config.php");
if(isset($_POST['login'])){
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $qur="select `id` from `google_form` where `rollno`='$rollno'";
    $out=mysqli_query($conn,$qur);
    if(mysqli_num_rows($out)>0)
    {
        ?>
        <script>
            alert("Login successfull");
            window.location.href="view.php";
        </script>
        <?php
    }
    else{
      ?>
        <script>
            alert("Login unsuccessfull");
        </script>
        <?php
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body style="size:500px">
<center>
    <form action="" method="post">
    <h1 style="color: red">LOGIN FORM</h1>
    Name :
    <input type="text" name="name" /><br><br>
    Roll No :
    <input type="text" name="rollno" /><br><br>
    <input type="submit" name="login" value="login"/>
</form>
</center>
</body>
</html>