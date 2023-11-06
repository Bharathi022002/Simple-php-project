<html>
    <body>
        <?php
        $var1=3;
        if($var1>1){
            echo "<h1>Greater than 1</h1>";
        }
        else{
            echo "<h1>Less than 1</h1>";
        }
        ?>

        <?php
        $var2=1;
        while($var2 <=5){
            echo "Number is $var2 <br>";
            $var2++;
        }
        ?>

        <?php
        for($var3=6;$var3<=10;$var3++){
            echo "value is $var3 <br>";
        }
        ?>

        <?php 
        $var4=3;
        switch($var4){
            default:
            echo "no level <br>";
            case 1:
                echo "level 1 <br>";
                break;
            case 2:
                echo "level 2 <br>";
                
            
        }
        ?>
    </body>
</html>