<?php
// To find the size of an array;
// 1: count : it will return 1 if array is empty;
// 2: sizeof() : it is alias of count function;
// $arr = [1,2,3,4,5,6];

// print_r(count($arr));
// echo "<br>";
// print_r(sizeof($arr));


//  2: implode : it is used to convert the array into string;
//  print_r(implode(',',$arr));  // it contain two arguement one is for join and second is for array name;


// 3: explode : it is used to convert the string into array;
// $str = implode(',',$arr);
// print_r(explode(' _ ',$str));



// 4:  range() : it is used to print the value till a given range, we can provide the range in numeric as well as alphabetic order;
// echo "<pre>";
// print_r(range(1,20));
// echo "</pre>";
// echo "<br>";
// echo "<pre>";
// print_r(range('a',"t"));
// echo "</pre>";


// 5: Array_slice(): it is used for slicing;
// $arr = [1,2,3,4,5,6];
// echo "<pre>";
// print_r(array_slice($arr,1,4));
// echo "</pre>";

// 6 : array_chunk(): it will divide the array in a sub array according to the provided length;
// $arr = [1,2,3,4,5,6,7,8,9,10];
// echo "<pre>";
// print_r(array_chunk($arr,2));
// echo "</pre>";


// 7 : array_merge(): it is used to merge two or more array;
// $arr1 = [1,2,3,4,5];
// $arr2 = [6,7,8,9];
// echo "<pre>";
// print_r(array_merge($arr1,$arr2));
// echo "</pre>";


// 8: array_combine() : it make the value of one array as key and value of other array as value and create a single associative array;
// $arr = ['name','age','roll_no'];
// $arr1 = ['ajay kumar',21,4];
// echo "<pre>";
// print_r(array_combine($arr,$arr1));
// echo "</pre>";

// 9 :  array_push() : it is used to add the element at the last position in the array;
// $arr = [1,2,3,4,5,6];
// echo "<pre>";
// print_r(array_push($arr,7));
// echo "<br>";
// print_r($arr);
// echo "</pre>";

// 10 : array_pop() : it will remove the last element from the array;
// $arr = [1,2,3,4,5,6];
// print_r(array_pop($arr));
// echo "<br>";
// echo "<pre>";
// print_r($arr);
// echo "</pre>";

// array_key_exists(): it is used to check wheather a particular key is exists or not in array, it return true or false;
// $arr = [1,2,3,4,5,6];
// print_r(array_key_exists(6,$arr));


// array_search(): it will return the key of the value given by the user;

$arr = ["ajay","aman","vivek","pradeep"];
print_r(array_search('vivek',$arr));



?>