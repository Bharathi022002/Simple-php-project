<?php
Include("config.php");
$sql="SELECT * FROM `google_form`";
$res=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View page</title>
</head>
<body>
   <center>
   <h1 style="color: red">VIEW FORM</h1>
     <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll No</th>
            <th>Email</th>
            <th>Dept</th>
            <th>Gender</th>
            <th>Profile</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
          if(mysqli_num_rows($res)>0)
          {
            while($data=mysqli_fetch_assoc($res))
            {
                ?>
                <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['rollno']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['dept']; ?></td>
                <td><?php echo $data['gender']; ?></td>
                <?php
                 $image_src = "image/".$data['profile'];
                 ?>
                <td><img src='<?php echo $image_src;  ?>' ></td>
                <td><a href="update.php?id=<?php echo $data['id']; ?>">
                    <input type="submit" value="Update" /></a></td>
                <td><a href="delete.php?id=<?php echo $data['id']; ?>">
                    <input type="submit" value="Delete" /></a></td>
                </tr>
                <?php
            }
          }
        ?>
     </table>
   </center>

</body>
</html>