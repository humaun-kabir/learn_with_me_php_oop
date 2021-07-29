<?php
    class Person{
        public $name;
        public $age;
        public $id;

        public function __construct($name,$age){
            $this->name = $name;
            $this->age = $age;
        }

        public function personDetails(){
            echo "Person name is {$this->name} and age is {$this->age}";
        }

        public function setId($id){
            $this->id = $id;
        }

        public function __destruct(){
            if(!empty($this->id)){
                echo "saving person";
            }
        }
        
    }

    $personOne = new Person("Humaun","32");
    $personOne->personDetails();
    echo "<br>";
    $personOne->setId(12);
    unset($personOne);
    
?>