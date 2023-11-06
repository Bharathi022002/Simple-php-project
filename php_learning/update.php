<?php
Include("config.php");
$user_id=$_GET['id'];
if(isset($_POST['update'])){
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];
    $gender=$_POST['gender'];

    $sql="UPDATE `google_form` SET `name`='$name',`rollno`='$rollno',`email`='$email',`dept`='$dept',`gender`='$gender' WHERE `id`='$user_id' ";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        ?>
        <script>
            alert("Updation successfull");
            window.location.href="view.php";
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
    <title>Update form</title>
</head>
<body style="size:500px">
<center>
    <form action="" method="post">
    <h1 style="color: red">UPDATE FORM</h1>
    <?php
    $s="select * from `google_form` where `id`='$user_id' ";
    $r=mysqli_query($conn,$s);
    while($d=mysqli_fetch_assoc($r))
    { 
    ?>
    Name :
    <input type="text" name="name" value="<?php echo $d['name']; ?>" /><br><br>
    Roll No :
    <input type="text" name="rollno" value="<?php echo $d['rollno']; ?>"/><br><br>
    Email :
    <input type="email" name="email" value="<?php echo $d['email']; ?>"/><br><br>
    Dept :
    <input type="text" name="dept" value="<?php echo $d['dept']; ?>"/><br><br>
    Gender :
    <input type="radio" name="gender" value="Male" value="<?php if($d['gender']=='Male') echo "checked"; ?>"/>Male
    <input type="radio" name="gender" value="Female" value="<?php if($d['gender']=='Female') echo "checked"; ?>"/>Female <br><br>
    <input type="submit" name="update" value="update"/>
    <?php
    }
    ?>
</form>
</center>
</body>
</html>