<?php
class User{

	protected $name;
	protected $age;
	//private $salary;

	public function __construct($name, $sal){
		$this->name = $name;
		$this->salary = $sal;
	}


	public function getName(){
		return $this->name; 
	}
	public function setName($name){
	    $this->name = $name; 
	}
	public function getAge(){
		
		return $this->age;
	}
	public function setAge($age){
		
		$this->age = $age;
	}


}

class Worker extends User{
	private $salary;

	function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}
	
	public function getSalary(){
		return $this->salary;
	}
	public function setSalary($salary){
		$this->salary = $salary;
	}
}


class Student extends User{
	private $stipend;

	function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}
	
	public function getStipend(){
		return $this->stipend;
	}
	public function setStipend($stip){
		$this->stipend = $stip;
	}
}



$worker_1 = new Worker("Ivan", 30);
//$worker_1->setName()  ;
//$worker_1->setAge(20);
$worker_1->setSalary(3000) ;

$worker_2 = new Worker("Kolya", 25);
//$worker_2->setName() ;
//$worker_2->setAge(30);
$worker_2->setSalary(5000); 

$student = new Student('James', 19);
$student->setStipend(800);
/*
$driver = new Driver(15, 'B', 7200, 'Petya', '43');
$driver->setSalary(10000);
$driver->setAge(10);*/


 echo "<pre>";
 print_r($worker_1);
 print_r($worker_2);
 print_r($student);
 print_r($driver);


echo "The summ of their salaries is: " . ($worker_1->getSalary() + $worker_2->getSalary());


?>
