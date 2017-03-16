<?php

$a = 4;
$b = 2;


function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}
echo add(6, 3);


function subract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}
echo subtract(8, 4);


function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}
echo multiply(2, 2);


function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a / $b;
    }else if ($b === 0){
    	return "Cannot divide by zero\n";
    }else {
        return "ERROR: Both arguments must be numbers\n";
    }
}
echo divide(6, 2);


function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}
echo modulus(6, 4);
// Add code to test your functions here
//defining the variables at the top had no effect. Probs something to do with scope