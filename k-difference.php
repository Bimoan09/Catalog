<?php

  
function find_pairs($a, $k)
{
    $num = array_flip($a);
    $count = 0;
    foreach($number as $value => $_unused)
    {
        if(isset($num[$value + $k]))
        {
            $count++;
        }
    }
    return $count;
}

?>
