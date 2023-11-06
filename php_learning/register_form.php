<!DOCTYPE html>
<body>
    <?php
    Include("connect.php");
    $nameerr=$rollnoerr=$emailerr=$depterr="";
    $name=$rollno=$email=$dept="";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['name'])){
            $nameerr="please enter valid name";
        }
        else{
            $name=$_POST['name'];
        }
        if(empty($_POST['rollno'])){
            $rollnoerr="please enter valid roll no";
        }
        else{
            $rollno=$_POST['rollno'];
        }
        if(empty($_POST['email'])){
            $emailerr="please enter valid email";
        }
        else{
            $email=$_POST['email'];
        }
        if(empty($_POST['dept'])){
            $depterr="please enter valid dept";
        }
        else{
            $dept=$_POST['dept'];
        }
    }
    ?>
    <h1>Registration Form</h1>
    <form action ="" method="post">
        Name : <input type="text" name="name" /><span><?php echo $nameerr; ?></span>
        Roll No : <input type="text" name="rollno" /><span><?php echo $rollnoerr; ?></span>
        Email : <input type="email" name="email" /><span><?php echo $emailerr; ?></span>
        Dept : <input type="text" name="dept" /><span><?php echo $depterr; ?></span>
        <input type="submit" name="submit"/>
    </form>
    <?php
    echo "<br> <br>";
    echo "<h1>Registration form details</h1>";
    echo "Name : $name <br>";
    echo "Roll No : $rollno <br>";
    echo "Email : $email <br>";
    echo "Dept : $dept <br>";
    ?>
</body>
</html>