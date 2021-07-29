<?php
    //magic methods

/*
__get($property)
__set($property,$value)
__call($method, $arg_array)
*/

class Student{
    public $name;

    public function describe(){
        echo "I am a student <br>";

    }

    public function __get($pm){
        echo "$pm does not exist <br>";
    }

    public function __set($pm, $value){
        echo "We set $pm->$value <br>";
    }

    public function __call($pm, $value){
        echo 'there is no <b>'. $pm. '</b>method and argument'. implode(',',$value);
    }
}

$st = new Student();
$st->describe();

//undefine value assign, hasan is a undefine property,print by __get method
$st->hasan;
//undefine value assign by __set method
$st->age = 15;
//when undefine method assign then __call magic method works.
$st->notExistMethod('2','8','5');

?>