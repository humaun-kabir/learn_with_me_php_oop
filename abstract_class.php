<?php
    //abstract class er object toiri kora jai na, derived class toiri kore acces korte hoi.
    //abstract method toiri korte hole tar class obossoi abstract hote hobe.
    //An abstract class is a class that has at least one abstract method.
    // Abstract classes are declared with the abstract keyword,
    // and contain abstract methods
    // Abstract classes can have non abstract methods & properties.
    // We cannot create objects from abstract classes.


    // real life example , personal info - fees dept, library dept main class inherit other class.

    abstract class parentClass{
        public $name;

        abstract protected function calc();
    }
        
    class childClass extends parentClass{

        public function calc(){
            echo "hello";
        }
    }
    $test = new childClass();

    $test->calc();

?>