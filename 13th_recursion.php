<?php
function factorial($val){
    if($val<=0){
        return 1;
    }
    else{
        return($val * factorial($val-1));
    }
}
$x = 5;
$fact = factorial($x);
echo "The factorial of ".$x." is ".$fact;
?>