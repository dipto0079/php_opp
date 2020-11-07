<?php
trait hello{
    protected function sayhello(){
        echo"Hello from Hello Trait.\n";
    }
}
class base{
    use hello{
        hello::sayhello as public newhello;
    }
}
/*trait hi{
    public function sayhello(){
        echo"Hello from Hi Trait.\n";
    }
}
class base{
    use hello,hi{
        hello::sayhello insteadof hi;
        hi::sayhello as newhello;
    }
}*/
$test=new base();
$test->newhello();
//$test->newhello();