<?php
class Cars{

    // Properties or variables or attributes
    public $wheel_count = 4;
    public $door_count = 4;



    function carDetail(){
        echo "Hello ";
    }

}

$bmw = new Cars();
$mercedes = new Cars();

echo $bmw->wheel_count;
echo "<br>";
echo $bmw->door_count;
?>