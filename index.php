<meta http-equiv="refresh" content="5; URL=localhost:8888">

<?php


class Human
{	
	// protected
	// private
	public $first_name = "Joe";
	public $last_name;


	public function getFirstName(){
		return ($this->first_name . "!");
	}

	public function setFirstName($value){
		$this->first_name = $value;
	}

	public function getLastName(){
		return ($this->last_name);
	}

	public function setLastName($value){
		$this->last_name = $value;
	}

	public function getName(){
		return ($this->first_name . " " . $this->last_name);
	}

	public function setName($fname, $lname){
		$this->first_name = $fname;
		$this->last_name = $lname;
	}

	public function getAge(){
		return ($this->age);
	}

	public function setAge($years){
		$this->age =$years;
	} 


}

$adam = new Human;
//var_dump($test);
// echo($adam->first_name);
// echo(" ");

// echo($adam->getFirstName());
// echo(" ");

echo($adam->setFirstName("Ādams"));
echo($adam->setLastName("Ādamsons"));

echo($adam->getName());
echo(" ");


$ieva = new Human;
$ieva->setName("Ieva", "Ādamsone");
echo($ieva->getName());
$ieva->setAge("23");
echo($ieva->getAge());


// echo($var);

?>




