<html>
    <body>
        <?php
        function myfunc($num1){
            echo "myfunc : $num1";
            echo "<br>";
        }
        myfunc(5);
        ?>

        <?php
        class class1{
            public $name;
            public $color;
            function get_name($name,$color){
                $this->name=$name;
                $this->color=$color;
            }
            function put_name(){
                echo "My name is {$this->name} and color is {$this->color}";
            }
        }
        class class2 extends class1{
            function disp_name(){
                echo "I will display name.";
            }
        }
        $var1=new class2();
        $var1->disp_name();
        $var1->get_name("bharathi","red");
        $var1->put_name();
        ?>


    </body>
</html>
