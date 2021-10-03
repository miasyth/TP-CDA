<?php

/*
Exercice 19 :
Ecrire un algorithme permettant de construire dans une matrice carrée P et d’afficher le triangle de
PASCAL de degré N.
N.B :
On poura utiliser cette relation pour les éléments de triangle de PASCAL :
Pi,j = Pi-1,j-1 + Pi-1,j
Exemple : triangle de pascal de degré 5 :
N=0 - 1
N=1 - 1 1
N=2 - 1 2 1
N=3 - 1 3 3 1
N=4 - 1 4 6 4 1
N=5 - 1 5 10 10 15 1
*/

require 'FunctionLibrary.php';

$size = 6;
$pascal = [[1]]; // initialise le tableau avec sa premiere ligne

echo("\n");

// generation tableau sans zeros
for ($i=1 ; $i<$size ; $i++) {
    $prevCount=count1($pascal[$i-1]);
    for ($j=0 ; $j<=$prevCount ; $j++) {
        $pascal[$i][$j] = (
            (isset($pascal[$i-1][$j-1]) ? $pascal[$i-1][$j-1] : 0) + 
            (isset($pascal[$i-1][$j]) ? $pascal[$i-1][$j] : 0)
        );
    }
}

feach2d($pascal);

/*
//archives


// generation tableau avec zeros
for($i=0 ; $i<$size ; $i++){
    $pascal[0][$i]= ($i==0) ? 1 : 0 ;
}

for ($i=1 ; $i<$size ; $i++) {
    for ($j=0 ; $j<$size ; $j++) {
        $pascal[$i][$j] = (
            (isset($pascal[$i-1][$j-1]) ? $pascal[$i-1][$j-1] : null) + 
            (isset($pascal[$i-1][$j]) ? $pascal[$i-1][$j] : null)
        );
    }
}

foreach($pascal as $v){ //affichage tableau
    foreach($v as $v2){
        echo("|".$v2);
    }
    echo("|\n");
}

*/

?>