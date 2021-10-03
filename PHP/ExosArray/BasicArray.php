<?php

$size=5;

$empty=[];
$array=[];

for ($i=0 ; $i<=$size ; $i++){
    for($j=0 ; $j<=$size ; $j++){
       $empty[$i][$j]="0";
    }
}

//print_r($empty);

$array= [[0,1] , [2,3]];

$pcount=count($array);

echo("array:\n");
for ($i=0 ; $i<$pcount ; $i++){
    for($j=0 ; $j<$pcount ; $j++){
        echo($j==$pcount-1) ? "|".$array[$i][$j]."|" : "\n|".$array[$i][$j];
    }
}


//print_r($empty);

?>