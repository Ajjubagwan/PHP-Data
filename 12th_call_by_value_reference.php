<?php
// function swap($a,$b){
//     $c=$a;
//     $a=$b;
//     $b=$c;

// }
// $x = 10;
// $y = 20;
// echo "before swaping the value of a is :".$x."and"."value of b is ".$x;
// echo "<br>";

// // calling by value;
// echo swap($x,$y);
// echo "After swaping the value of a is :".$x."and"."value of b is ".$y;




// calling by reference : & is used to call a function by reference;

function swap(&$a,&$b){
    $c=$a;
    $a=$b;
    $b=$c;

}
$x = 10;
$y = 20;
echo "before swaping the value of a is :".$x."and"."value of b is ".$x;
echo "<br>";

// calling by value;
echo swap($x,$y);
echo "After swaping the value of a is :".$x."and"."value of b is ".$y;
?>