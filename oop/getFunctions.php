<?php
/*class myclass{
    function name(){
        echo "Class Name :" . get_class($this) ."\n";
    }
}
$obj = new myclass();
$obj->name();
echo "class Name is  :" . get_class($obj);*/

/*class abc{

}
class xyz extends abc{
    function name(){
        echo "parent Class Name :" . get_parent_class($this) ."\n";
    }
}
$obj = new xyz();
$obj->name();
echo "class Name is  :" . get_parent_class('xyz');*/

/*class myClass{
    function __construct(){
        print_r(get_class_methods($this));
    }
    function myfunc1(){

    }
    private function myfunc2(){

    }
}
$obj =new myClass();
$class_methods= get_class_methods('myClass');
print_r($class_methods);
/*foreach ($class_methods as $method){
    echo $method . "\n";
}*/
class myClass{
    public $var1;
    public $var2="hello";
    public $var3= 100;
    private $var4;
    function __construct(){
        print_r(get_class_vars(__CLASS__));
    }
}
$obj = new myClass();
$class_vars= get_class_vars(get_class($obj));
print_r($class_vars);