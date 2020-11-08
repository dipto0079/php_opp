<?php
class abc{
    public function __construct()
    {
        echo "This is construct function\n";
    }
    public function hello(){
        echo"Hello Everyone\n";
    }
    public function __destruct(){
        echo "This is destruct function\n";
    }
}
$test=new abc();

$test->hello();