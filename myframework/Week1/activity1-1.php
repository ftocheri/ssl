<?php

class myClass {

	// function for users
	public function users() {
		//set name and age variables
		$name = "Forrest";
		$age = 25;

		// create arrays using associative and non-associative methods
		$personindex = array("Forrest", 25);
		$person = array("name"=>$name, "age"=>$age);

		// echo out name and age using double quotes
		echo "My name is $name and my age is $age.";

		echo "</br>";

		// echo out name and age using single quotes
		echo 'My name is '.$name.' and my age is '.$age.'.';

		echo "</br>";

		// echo out name using our non-associative array
		echo "My name is $personindex[0] and my age is $personindex[1].";

		echo "</br>";

		// echo out name using our associative array
		echo 'My name is '.$person["name"].' and my age is '.$person["age"].'.';

		echo "</br>";

		// set the age to null
		$age = null;
		// echo out the age while null
		// nothing will print, but no error is thrown
		echo $age.' <- age as null.(does not exist)';

		echo "</br>";

		// unset our name variable
		unset($name);
		// attempt to echo our name, error is thrown
		echo $name;
		echo "</br>";
		echo "</br>";
	}

	// function to set grades with if/else statement
	public function grades() {
		// base value of grade
		$grade = 89;

		// check for each level of grades
		// will set the grade to a letter based on the number given
		if($grade < 60 && $grade >= 0) {
			$grade = "F";
		}
		elseif($grade > 59 && $grade < 70) {
			$grade = "D";
		}
		elseif($grade > 69 && $grade < 80) {
			$grade = "C";
		}
		elseif($grade > 79 && $grade < 90) {
			$grade = "B";
		}
		elseif($grade > 89 && $grade < 101) {
			$grade = "A";
		}
		// if the grade falls ourside of our requirements,
		// an error message will be shown
		else {
			$grade = "Error: Grade does not exist";
		}

		// echo out the grade
		echo 'My grade is: '.$grade;
		echo "</br>";
		echo "</br>";
	}

	// method with color array
	// used to test foreach statement
	public function colors() {
		// set our array with associative values with integers
		$color = array(0=>"Red", 1=>"Pink", 2=>"Blue", 3=>"Aqua", 4=>"Green", 5=>"Olive", 6=>"Purple", 7=>"Orchid", 8=>"Orange", 9=>"Salmon");

		// foreach statement that will echo out the number and value
		// will display the value in the color given
		foreach($color as $key => $value) {
			echo "<span style='color:$value'>$key = $value</span>";
			echo "</br>";
		}
	}

}


// instantiate our class
$myclass = new myClass();
// call each method of our class
$myclass->users();
$myclass->grades();
$myclass->colors();
?>