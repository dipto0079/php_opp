<?php
class invokeMethod{
    public $a,$b;
    public function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    /*public function sum(){
        echo $this->a + $this->b;
    }*/
    public function __invoke(){
        echo $this->a * $this->b;
    }
}
$obj =new invokeMethod(20,50);

//$obj ->sum();
$obj();