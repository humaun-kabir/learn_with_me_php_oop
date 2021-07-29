<?php
    class Person{
        public $name;
        public $age;

        public function __construct($name,$age){
            $this->name = $name;
            $this->age = $age;
        }

        public function personDetails(){
            echo "Person name is {$this->name} and age is {$this->age}";
        }
    }

    $personOne = new Person("Humaun","32");
    $personOne->personDetails();
?>