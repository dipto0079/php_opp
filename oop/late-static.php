<?php
class base{
    protected static $name = "Dipto";
    public function show(){
        echo static::$name;
        echo self::$name;
    }
}
class derived extends base{
    protected static $name="Roy";
}
$test=new derived();
$test->show();