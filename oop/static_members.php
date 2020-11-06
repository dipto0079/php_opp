<?php
class base{
    public static $name ="Dipto";

    /*/public function __construct($n){
        self::$name=$n;
    }*/
}

class derived extends base{
    public static function show(){
    echo parent::$name;
}
}

//echo base::$name;
//base::show();

$test=new derived();
$test->show();