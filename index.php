<?php
class person{
    public $name,$age;
    function show(){
        echo $this->name ."-".$this->age;
    }
}
$p1=new person();
$p1->name="Dipto";
$p1->age=25;
$p1->show();