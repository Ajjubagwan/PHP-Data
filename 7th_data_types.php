<?php
// string;
// interger
// double
// boolean
// object
// array
// Null



// string : sequence of character;
$name = "ajay kumar";
$friend = "rajeev";
echo "$name is friend of $friend <br>";

// integer
$income = 200000;
echo "per month income in 2024 is $income <br>";


// double/float

$salary = 12.5;
echo $salary."<br>";

// boolean;

// we should use var_dump function in case of boolean because it return type and value;
$b = true;
$f = false;

echo var_dump($b);
echo "<br>";
echo var_dump($f);

echo "<br>";

// Array : used to store heterogenous type of data;

$friends = array("Shri Ram","Shri Laxman","Shri Bharat","Shri Shatrughan","Shri Hanuman ji");
echo var_dump($friends);
echo "<br>";
echo $friends[0]; 
echo "<br>";
echo $friends[1]; 
echo "<br>";
echo $friends[2]; 
echo "<br>";
echo $friends[3]; 
echo "<br>";
echo $friends[4]; 




?>