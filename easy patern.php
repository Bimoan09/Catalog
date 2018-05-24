
<?php

$max=5;
for ( $i =1 ; $i<=$max;$i++) {
        for ( $space = 1; $space <= ($max-$i);$space++) {
                echo " ";
        }
        for ( $hash = 1; $hash <= $i;$hash ++ ) {
                echo "#";
        }
        echo "\n";
}

?>
