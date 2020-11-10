<?php
class student{
    public $course="PHP";
    private $first_name;
    private $last_name;
    public function steName($fname,$lname){
        $this->first_name=$fname;
        $this->last_name=$lname;
    }
    public function __sleep(){
        require array('first_name','last_name');
    }
}
$obj =new student();
$obj->setName("Dip","roy");
$srl=serialize($obj);
echo $srl;
