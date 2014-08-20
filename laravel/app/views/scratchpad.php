<html>
  <head></head>
  <body><pre>
  <?php
  function print_x($x) {
	  $i = 1;
	  while($i <=$x) {

	    echo $i++;
	    if ($i < 11) {
	    	echo ",   ";
	    }
	    else if ($i > 10) {
	    	echo ", ";
	    } 
	    if($i%11 == 0) {
	    	echo "<br>";
	    }
	  }
  }

  $foo = array('one', 'two', 'three');
  $bar = array('four', 'five', 'six');



  echo count($foo) . "<br><br>";
  $foobar = array_merge($foo, $bar);
  foreach($foobar as $temp) {
    echo $temp . "<br>";
  }
  echo "<br><br>" . count($foobar);

  echo "<br><br>";
  print_x(30);


  function make_an_array($first_name, $last_name, $phone_number) {
  	$personal_info = array("first_name" => $first_name, "last_name" => $last_name, "phone_number" => $phone_number);
  	return array_values($personal_info);
  }

  var_dump(make_an_array("Kai", "Pehrsson", "559-244-9999"));
  ?>
</pre>
  </body>

 </html>