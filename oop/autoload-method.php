<?php
//require "class/first.php";
//require "class/second.php";
function __autoload($class){
    require "class/". $class . ".php";
}

$test =new second();