<?php
trait hello{
    public function sayhello(){
        echo "Hello Everyone\n";
    }
    public function sayhi(){
        echo "Hi Everyone\n";
    }
}
trait bye{
    public function saybye(){
        echo "Bye Bye Everyone";
    }
}
class base{
    use hello,bye;
}
class base2{
    use bye;
}
$test=new base();

$test->sayhello();
$test->saybye();
$test->sayhi();