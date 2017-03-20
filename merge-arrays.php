<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$sames = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


$result = array_search('Tina', $names);

// // var_dump($result);
// if ($result == false){
// 	echo "cant be found";
// }else{
// 	var_dump($result);
// }
// function looking($array, $name){
// 	if(array_search($name, $array) !== FALSE){
// 		echo "Found it!";

// 	}else{
// 		echo "Can't find that";
// 	}
	

// }

// looking($names, 'Tina');


// function sames($array, $name){
// 	if(sizeof(array_diff($array, $name)) > 0){
// 		echo "Many diffs";
// 		print_r(array_diff($array, $name));

// 	}else{
// 		echo "Same!";
// 	}
	

// }
// sames($names, $sames);


// function sames($array1, $array2,){
// 	$c = 0;
// 	foreach($array1 as $name){
// 		array_search($name, $array2)
// 	}
// }
// sames($names, $sames);


function combinearrays($array1, $array2){
	$differences = array_diff($array1, $array2);
	$newz = array_merge($array2, $differences);
	print_r($newz);
}

combinearrays($names, $compare);



// if($array1 != $array2);