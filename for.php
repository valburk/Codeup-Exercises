<?php

// if($argc == 3) {

// 	if(is_numeric($argv[1]) && is_numeric($argv[2])) {
		
// 		$min = $argv[1];
// 		$max = $argv[2];
// 	} else {
// 		// prompt the user for a numeric minimum until they provide a numeric minimum
// 		do {
// 			fwrite(STDOUT, "Minimum");
// 			$min = trim(fgets(STDIN));
// 		} while(!is_numeric($min));

// 		// prompt for a maximum that is numeric
// 		do {
// 			fwrite(STDOUT, "Maximum");
// 			$max = trim(fgets(STDIN));
// 		} while(!is_numeric($max));
// 	}

// } else {
// // 	$min = 1;
// // 	$max = fgets(STDIN);
// }




$min = trim(fgets(STDIN));
$max = trim(fgets(STDIN));

for ($i = $min; $i <= $max; $i++) {
    echo "$i\n";
}