<?php
class school{
    public function getName(student $names){
        echo "<ul>";
        foreach ($names->Names() as $name){
            echo "<li>". $name . "</li>";
        }
        echo "</ul>";
    }
}
class student{
    public function Names(){
        return ["Ram","Kamal","Gopal"];
    }
}
class library{

}
$lib= new library();
$stu = new student();
$sch= new school();


$sch->getName($stu);


/*function wow(hello $c){
    $c->sayhello();
}*/
