<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// Create a simple Class called Vehicles. This Class should have the properties: name, model, makeYear, color, fuelType. Use a constructor. Create a method which will return the name and the model of this vehicle. 

// Instantiate 3 new objects from this Class. 

// Once you have done creating these objects, create a new Class called Ships. This Class will extend the Vehicles Class. Add new properties and methods to this Class.

// Instantiate 3 new objects from this Class. 


class Vehicles 
{
public $name;
public $model;
public $makeYear;
public $color;
public $fueltype;

function __construct($name_arg, $model_arg, $makeYear_arg=null, $color_arg=null, $fueltype_arg=null) {
		$this->name = $name_arg;
      $this->model  = $model_arg;
  $this ->makeYear  = $makeYear_arg;
 $this ->color  = $color_arg;
$this ->fuelype  = $fueltype_arg;

}
 
 public function Givemeyournameandcar()
 {

$giveme = "name is " . $this->name . " and I drive a beautiful " . $this->model;
return $giveme;

 }

}

$Anna = new Vehicles("Anna", "Polo");
$Bruno = new Vehicles("Bruno", 508);
$Anton = new Vehicles("Anton", "Volvo");
$returnname = $Bruno->Givemeyournameandcar(). "<hr> " . $Anna->Givemeyournameandcar() ."<br>". $Anton->Givemeyournameandcar(). "<hr>";

echo $returnname;

class Ships extends Vehicles {
public $price;
public $harbor;

function __construct($name_arg, $model_arg, $harbor_arg, $price_arg=null) {
	parent::__construct($name_arg, $model_arg);
	// $this ->giveme =$name_arg. $model_arg;
	$this ->price = $price_arg;
	$this ->harbor = $harbor_arg; 
}
	public function Showme()
	{
	return $showme = $this->Givemeyournameandcar() . " and this not a car but a ship stationed at " . $this->harbor; 
}


}

$ship1 = new Ships("Bruno", "Submarine", "Cherbourg");
$returnship = $ship1->Showme();
echo $returnship; 
$ship2 = new Ships("Yellow", "submarine", "Brest");
$returnship = $ship2->Showme();
print "<hr>" . $returnship; 
$ship2 = new Ships("Blue", "Tanker", "Hawaii");
$returnship = $ship2->Showme();
print "<hr>" . $returnship; 



?>

<?php
// class Employee {
// public $salary = "3500";
// }


// class Driver extends Employee {
// public $name = "John";
// public $position = "driver";
// public  function showDetails() {
//   return 
//     'My name is '  . $this->name .
//     ' and my position in the company is ' . $this ->position .
//     ', my monthly salary is ' . $this->salary . ' Euros' ;
// }
// }
// $driverObj = new Driver();
// $result = $driverObj->showDetails();
// echo $result;

?> 
</body>
</html>