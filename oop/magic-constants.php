<?php
//echo "Line Number :" .__LINE__;
//echo "The Full path of file is  :" . __FILE__;
//echo "The Full path of this Directory is  :" . __DIR__;
/*function MyFunction(){
    echo "The FUNCTION name is  :" . __FUNCTION__;
}
MyFunction();*/

/*class Myclass{
    public function getClassName(){
        return  __CLASS__;
    }
}
$obj = new Myclass();
echo $obj->getClassName();*/

/*class Myclass{
    public function getClassName(){
        return  __METHOD__;
    }
}
$obj = new Myclass();
echo $obj->getClassName();*/

/*namespace MyNamespace;
class Myclass{
    public function getNamespace(){
        return  __NAMESPACE__;
    }
}
$obj = new Myclass();
echo $obj->getNamespace();*/

/*namespace MyNamespace;
class Myclass{
    public function getNamespace(){
        return  __CLASS__;
    }
}
$obj = new Myclass();
echo $obj->getNamespace();*/

trait MyTrait{
    public function getTraitName(){
        return __TRAIT__;
    }
}
class Myclass{
    use MyTrait;
}
$obj = new Myclass();
echo $obj->getTraitName();