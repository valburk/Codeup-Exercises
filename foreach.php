<?php

// $things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach ($things as $item) {
//     if (is_array($item)){
//     	echo("This is an array \n");
//     	print_r($item);
//     }elseif (is_bool($item)){
//     	echo "$item is a boolean\n";
//     }elseif (is_float($item)){
//     	echo "$item is a float\n";
//     }elseif (is_int($item)){
//     	echo "$item is an interger\n";
//     }elseif (is_null($item)){
//     	echo "$item is null\n";
//     }elseif (is_string($item)){
//     	echo "$item is a string\n";
//     }


// }

// $things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach ($things as $item) {
//     if (is_scalar($item)){
//     	echo("$item \n");
  
// 	}
// }


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $item) {
    if (is_array($item)){
    	echo "an array containing: (";
    	foreach ($item as $itemarray) {
    		echo "$itemarray,";
    	}
 		echo ") \n";
  
	}elseif (!is_array($item)){
		echo "$item\n";
	}
}
