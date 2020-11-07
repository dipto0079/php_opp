<?php
class abc{
    public function  first(){
        echo "This is first function\n";
        return $this;
    }
    public function  second(){
        echo "This is second function\n";
        return $this;
    }
    public function  third(){
        echo "This is third function\n";
    }
}
$test = new abc();
$test->first()->second()->third();