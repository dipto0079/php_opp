<?php
class employee{
    public $name;
    public $age;
    public $salary;
    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }
    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name :" . $this->name."<br>";
        echo "Employee Age :" . $this->age."<br>";
        echo "Employee Salary :" . $this->salary;
    }
}
class manager extends employee{
    public $ta=1000;
    public $phone=300;
    public $totalSalary;
    function info(){
        $this->totalSalary=$this->salary+$this->ta+$this->phone;
        echo "<h3>Manager Profile</h3>";
        echo "Employee Name :" . $this->name."<br>";
        echo "Employee Age :" . $this->age."<br>";
        echo "Employee Salary :" . $this->totalSalary;
    }

}



$e1=new manager("Ram",25,10000);
$e2=new employee("Joy",25,2000);
$e1->info();
$e2->info();