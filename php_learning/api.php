<!-- json api is used -->
<?php
Include "config.php";
$res=array();
$a="select * from `google_form`";
$b=mysqli_query($conn,$a);
if(mysqli_num_rows($b)>0){
    $c=0;
    while($d=mysqli_fetch_assoc($b)){
       $res[$c]['id']=$d['id'];
       $res[$c]['name']=$d['name'];
       $res[$c]['rollno']=$d['rollno'];
       $res[$c]['dept']=$d['dept'];
       $c++;
    }
    echo json_encode($res);
}
else{
    echo "failed";
}
?>