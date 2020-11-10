<?php
class cloneMethod{
    public $name;
    public $course;
    public function __construct($n){
        $this->name=$n;
    }
    public function setCoures(course $c){
        $this->course=$c;
    }
    public function __clone(){
        $this->course = clone $this->course;
    }
}
class  course{
    public $cname;
    public function __construct($cn){
        $this->cname=$cn;
    }

}
$cloneMethod1=new cloneMethod('Dipto');
$course1= new course('PHP');
$cloneMethod1->setCoures($course1);

$cloneMethod2= clone $cloneMethod1;
$cloneMethod2->name='Roy';
$cloneMethod2->course->cname='Python';

print_r($cloneMethod1);
print_r($cloneMethod2);