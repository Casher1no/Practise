<?php

$a = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

for ($i=0; $i < count($a) ; $i++) { 
    if($a[$i] % 3 == 0){
        echo $a[$i] . PHP_EOL;
    }
}