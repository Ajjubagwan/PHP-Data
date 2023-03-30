<?php
// // 1 :  simple function;

// function welcome(){
//     echo "welcome to simple function";
// }
// welcome();


// 2 : parameterized function;

// function add($value1,$value2){
//     $sum = $value1 + $value2;
//     return $sum;

// }
// echo add(10,20);


// function with default argument;
$y = 40;
function default_argu($value1=10,$value2=20){
    $sum = $value1 + $value2;
    return $sum;
}
echo default_argu($y);

?>