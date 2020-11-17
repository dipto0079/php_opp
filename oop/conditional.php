<?php
/*class Myclass{

}
if (class_exists('Myclass')){
    echo "This class is exist.";
}else{
    echo "This class is  not exist.";
}*/
/*interface MyInterface{

}
class Myclass{

}
if (interface_exists('MyInterface')){
    echo "This MyInterface is exist.";
}else{
    echo "This MyInterface is not exist.";
}*/

/*class Myclass{
    public function MyMethod(){

    }
}
$obj= new Myclass();
if (method_exists('$obj','MyMethod')){
    echo "This Method is exist.";
}else{
    echo "This Method is not exist.";
}*/

/*trait MyTrait{
    public function MyMethod(){

    }
}
if (trait_exists('MyTrait')){
    echo "This Trait is exist.";
    class MyClass{
        use MyTrait;
    }
}else{
    echo "This Trait is not exist.";
}*/

/*class MyClass{

}
$obj = new MyClass();
if (is_a($obj,'MyClass')){
    echo "This Object is of Class MyClass.";

}else{
    echo "This Object is not of Class MyClass.";
}*/

class parentClass{

}
class childClass extends parentClass{

}
$obj = new childClass();
if (is_subclass_of($obj,'parentClass')){
    echo "This obj is a object of subclass of parentClass.";

}else{
    echo "This obj is not a object of subclass of parentClass.";
}