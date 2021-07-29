<?php
    //abstract class er object toiri kora jai na, derived class toiri kore acces korte hoi.
    //abstract method toiri korte hole tar class obossoi abstract hote hobe.
    //An abstract class is a class that has at least one abstract method.
    // Abstract classes are declared with the abstract keyword,
    // and contain abstract methods
    // Abstract classes can have non abstract methods & properties.
    // We cannot create objects from abstract classes.

    abstract class parentClass{
        public $name;

        abstract protected function calc($a,$b);
    }
        
    class childClass extends parentClass{

        public function calc($c , $d){
            echo "hello";
        }
    }
    $test = new childClass();

    $test->calc(10,20);

?>