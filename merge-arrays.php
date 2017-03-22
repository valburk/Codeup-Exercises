<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];



function combinearrays($array1, $array2){
	$differences = array_diff($array1, $array2);
	$newz = array_merge($array2, $differences);
	print_r($newz);
}

combinearrays($names, $compare);



// if($array1 != $array2);