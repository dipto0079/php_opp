<?php
class  student{
    private $name;
    public function hello(){
        echo $this->name;
    }
    public function __get($property){
        echo "Your are trying to access No existing or privte property ($property)\n";
    }
    public function __set($property, $value ){
        if($property_exists($this,$property)){
            $this->$property=$value;
        }else{
            echo "Property dose not exist:$property";
        }
    }
}
$test=new student();
$test->Names("Dipto");
$test->hello();