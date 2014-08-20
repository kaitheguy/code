<?php
	class Person {
	    public $first_name = '';
	    public $last_name = '';
	    public $profession = '';
	    public $speed = 5;

	    public function __construct($first, $last) {
	    	echo "class being created $first $last";
	    	$this->first_name = $first;
	    	$this->last_name = $last;
	    }



	    public function set_first_name($name) {
	    	$this->first_name = $name;
	    }


	    public function set_last_name($name) {
	    	$this->last_name = $name;
	    }

	    public function set_name($first, $last) {
	    	$this->first_name = $first;
	    	$this->last_name = $last;
	    }

	    public function increase_speed($by) {
	    	$this->speed+=$by;
	    	var_dump($this); //dump object info everytime this method is called.
	    }

	    public function decrease_speed($by) {
	    	$this->speed-=$by;
	    	var_dump($this);
	    }

	    public function __destruct() {
	    	echo "<br>Destroying $this->first_name<br>";
	    }
	}



	$kai = new Person("Kai", "Pehrsson");
	$kai->profession = "Programmer with No Grammer";
	//$kai->set_first_name('John'); keep name as kai
	$kai->set_last_name('Pehrsson');
	var_dump($kai);
	$kai->increase_speed(5);
	$kai->increase_speed(5);
	$kai->increase_speed(5);
	$kai->set_name("kAI", "Pehrsson");
	var_dump($kai->speed);
	echo "<br><br><br><br>";
	$kai->decrease_speed(3);
	var_dump($kai);
	$kai->set_name("KAi", "Pehrsson");
	
?>
