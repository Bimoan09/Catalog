<?php

function spiralArray($array) 
{
    printSpiralHelper($array, 0, count($array[0])-1, 0, count($array) -1); // array, 0, 0, 0, 1
}
function printSpiralHelper($array, $x1, $x2, $y1, $y2) {

    if ($x2 == $x1 && $y2 == $y1) {
        echo $array[$y1][$x1];
        return;
    }
    
    else if ($x2 < $x1 || $y2 < $y1) 
        return;
    

    $i = $x1;
    for (; $i <= $x2; $i++) {
        echo $array[$y1][$i];
    }
    
 
    $j = $y1+1;
    for (; $j <= $y2; $j++ ) {
        echo $array[$j][$i];
    }
    
    $i1 = $i-1;
    for (; $i1 >= $x1; $i1--) {
        echo $array[$j][$i1];
    }
    
  
    $k = $y2-1;
    for (; $k > $y1; $k--) {
        echo $array[$k][$y1];
    } 
    
    printSpiralHelper($array, $x1+1, $x2-1, $y1+1, $y2-1);   
}
}


?>



