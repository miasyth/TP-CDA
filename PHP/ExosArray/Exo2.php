<?php

/*
Exercice 2 :
Ecrire un algorithme permettant de saisir et d’afficher N éléments d’un tableau.
*/

require 'FunctionLibrary.php';

$t=[];

echo("\n");

//version 2
for($c='O', $i=0; $c=='O'; $c=r() , $i++){
    $t[$i]=readline('entrez une valeur ');
}

feach1d($t);

/*
//archives


//version 1
$i=0
for($c='O'; $c=='O'; $c=r()){
    $t[$i]=readline('entrez une valeur ');
    $i++;
}
*/
