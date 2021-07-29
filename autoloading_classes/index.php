<?php
spl_autoload_register(function($class_name){
    include "classes/".$class_name.".php";
});
// another way to auload class
/*
function __autoload($class_name){
    include "classes/".$class_name.".php";
}
*/
$ruby = new Ruby();
$java = new Java();
$php = new Php();
?>