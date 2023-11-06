<html>
    <body>
        <?php
        class class1{
            public $name;
            public $color;
            function __construct($name,$color){
                $this->name=$name;
                $this->color=$color;
            }
            function put_name(){
                echo "name is {$this->name} and color is {$this->color}";
            }
        }
        class class2 extends class1{
            public $weight;
            function __construct($name,$color,$weight){
                $this->name=$name;
                $this->color=$color;
                $this->weight=$weight;
            }
            function put_name(){
                echo "name is {$this->name} , color is {$this->color} and weight is {$this->weight}.";
            }
        }
        $c1=new class2("bharathi","black",45);
        $c1->put_name();
        ?>
    </body>
</html>
