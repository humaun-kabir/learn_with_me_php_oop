<?php
    include "student.php";

    if(class_exists("student")){
        $st = new Student();
        if(method_exists($st,'describe')){
            $st->describe();
        }else{
            echo "method not found";
        }
        
    }else{
        echo "class not found";
    }

?>