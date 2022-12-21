<?php

class Car{
    public $name;
    public $color;

    function sayHello(){
       echo "Hello from  Car Class " .  PHP_EOL;

    }
}

$car1 = new Car(); // The object creation is here
$car1->name = "Ferrari"; // This is basically assigning the property value most not put $ sign before name
$car1->color = "Red";
$car1->sayHello();
echo "$car1->name is $car1->color Color .";


$car2 = new Car(); // The object creation is here
$car2->name = "BMW"; // This is basically assigning the property value most not put $ sign before name
$car2->color = "Blue";
$car2->sayHello();
echo "$car2->name is $car2->color Color .";

?>