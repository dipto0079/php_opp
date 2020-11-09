<?php
class abc{
    public $name="Dipto";
    private $course="PHP";
    public function __isset($property)
    {
        echo isset($this->property);
    }
}
$test=new abc();
echo $test->isset($this->name);
https://youtu.be/rIHAy63HfpI?list=PL0b6OzIxLPbwoi6Urr4LZTz2AMMCtzqDt