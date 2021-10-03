<?php

echo("\n");

// exemple 1

$t=[0,1,2,3];

$tcount=count($t);

foreach($t as $v){ // affichage tableau 1 dimension
    echo($t[count($t)-1]!==$v) ? "|".$v : "|".$v."|" ;
}

echo("\n\n");

// exemple 2

$array= [[0,1], 
         [2,3]];

$count=count($array[0]);

foreach($array as $v){ // affichage tableau 2 dimensions
    foreach($v as $v2){
        echo("|".$v2);
    }
    echo("|\n");
}

echo("\n");

// exemple 3

$size=3;
$empty=[];

for ($i=0 ; $i<=$size ; $i++){ // genere un tableau avec les dimensions $size (vertical) et $size (horizontal) et le remplis de "0"
    for($j=0 ; $j<=$size ; $j++){
       $empty[$i][$j]="0";
    }
}

foreach($empty as $v){ // affichage tableau 2 dimensions
    foreach($v as $v2){
        echo("|".$v2);
    }
    echo("|\n");
}

echo("\n");

//print_r($array);

/*
// archives


// renvoie array v1
for ($i=0 ; $i<$count ; $i++){ // affichage tableau 1 dimension
    echo($i<$count-1) ? "|".$t[$i] : "|".$t[$i]."|";
}

for ($i=0 ; $i<$count ; $i++){ // affichage tableau 2 dimensions
    for($j=0 ; $j<$count ; $j++){
        echo($j<=$count) ? "|".$t[$i][$j] : null ;
    }
    echo("|\n");
}

echo("\n");

// renvoie array v2
foreach($t as $v){ // affichage tableau 1 dimension
    echo($t[$count-1]!==$v) ? "|".$v : "|".$v."|" ;
}

foreach($t as $v){ // affichage tableau 2 dimensions
    foreach($v as $v2){
        echo("|".$v2);
    }
    echo("|\n");
}

*/
?>