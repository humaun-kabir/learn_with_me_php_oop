<?php

// polymorphism
//when we start to extend classes and add funtionality to them which wasn't there previously and even override existing methods(functions), this is called polymorphism.


// the basics of polymorphism is inheritance and overriden methods.
class Employee{
	public $name;
	public $age;
	public $salary;

	function __construct($n,$a,$s){
		$this->name = $n;
		$this->age = $a;
		$this->salary = $s;
	}

	function info(){
		echo "<h3>Employee Info</h3>";
		echo "Employee name :" . $this->name . "<br>";
		echo "Employee Age :" . $this->age . "<br>";
		echo "Employee salary :" . $this->salary . "<br>";
	}
}
// polymorphism is inheritance.
class Manager extends Employee{
	public $ta =100;
	public $phone =500;
	public $totalSalary;

// polymorphism is method overriden.
	function info(){
		$this->totalSalary = $this->salary + $this->ta + $this->phone;

		echo "<h3>Manager Info</h3>";
		echo "Manager name" . $this->name . "<br>";
		echo "Manager Age" . $this->age . "<br>";
		echo "Manager salary" . $this->totalSalary . "<br>";

	}

}

$e1 = new Employee("humaun",32,10000);
$m1 = new Manager("tausif",30,12000);

$e1->info();
$m1->info();