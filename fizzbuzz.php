<?php 

$i = 0;
for ($i = 0; $i <= 100; $i++){

	if($i % 3 === 0 && $i % 5 === 0){
		echo "FizzBuzz\n";
		continue;
	}elseif($i % 3 === 0) {
		echo "Fizz\n";
		continue;
	}elseif ($i % 5 === 0){
		echo "Buzz\n";
		continue;
	} 
	echo "$i\n";
}
	?>