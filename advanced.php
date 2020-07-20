<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
PHP| Day 5 | Advanced Classwork
Since everything starts from the Database, choose your favourite project from MySQL (make sure that it is in 3rd NF and you tested few queries on it). Based on the Project Idea expressed through the entities  and relationships in your MySQL project, create an Object Oriented PHP App which contains the following concepts:

Create a Class with its own specific properties and methods
Define the methods' functionality
Provide adequate return from the Methods (output some static data from the methods)
Create constructor
Create a friendly GUI, to present your static data
Example (only one panel is enough for today's classwork)



<?php

class Database {



public $db_host = "localhost";

public $db_name = "hospital"; // you must write your db name

public $db_user = "root";

public $db_pw = "";

public $connection = '';



// public function chooseDB($dbHost, $dbName, $dbUser, $dbPw){

// 	$this->connection = mysqli_connect($dbHost, $dbUser, $dbPw, $dbName);

// }





public function connect() {

//the @ sign will remove any warnings from mysqli!

$this->connection = @mysqli_connect($this->db_host,$this->db_user,$this->db_pw,$this->db_name);

}





}


	?>

</body>
</html>