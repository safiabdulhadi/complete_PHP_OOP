<?php

class Person{
    private $name;
    private $birth;
    private $address;

    public function __construct( $name, $birth, $address){
        $this->name = $name;
        $this->birth = $birth;
        $this->address = $address;
    }
    public function get(){
        echo "{$this->name} : {$this->birth} : {$this->address}";
    }
}


$ahmad = new Person("Ahamd", "01/03/1995", "Lille France");

$ahmad->get();
?>