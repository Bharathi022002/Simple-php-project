<?php
Include("config.php");
$user_id=$_GET['id'];

if(isset($_GET['id'])){ 
$sql="DELETE FROM `google_form` WHERE `id` = '$user_id' ";
$res=mysqli_query($conn,$sql);
if($res){
    ?>
    <script>
        alert("Deleted successfully");
        window.location.href="view.php";
    </script>
    <?php
}
}
?>