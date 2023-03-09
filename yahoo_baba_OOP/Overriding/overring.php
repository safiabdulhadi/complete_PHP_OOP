<?php

class Base{

    public $name = 'Parent Class';

    public function calc($a,$b){
        return $a * $b;
    }
}
class derived extends Base {
    public $name = 'Child class';
    public function calc($a,$b){
        return $a * $b;
    }
}



$test = new derived();

echo $test->calc(4,4);


?>