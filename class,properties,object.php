<?php
    class Info{

        public $name;
        public $age;

        public function personName(){
            echo "Person name is ".$this->name ."<br>";
        }

        public function personAge($value){
           echo "Person age is ". $this->age = $value;
        }
    }

    $personOne = new Info();

    $personOne->name= "tausif";
    $personOne->personName();

    $personOne->personAge("20");

?>