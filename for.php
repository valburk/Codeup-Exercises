<?php

$min = trim(fgets(STDIN));
if (!is_numeric($min)){
	 echo "Enter a number";
	 exit(1);
}

$max = trim(fgets(STDIN));
if (!is_numeric($max)){
	 echo "Enter a number";
	 exit(1);
}
$inc = trim(fgets(STDIN));
if (!is_numeric($inc)){
	 $inc = 1;
}


for ($i = $min; $i <= $max; $i += $inc) {
    echo "$i\n";
}