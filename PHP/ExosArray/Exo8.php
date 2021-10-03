<?php

/*
Exercice 8 :
Ecrire un algorithme permettant de calculer le nombre de fois pour lesquelles un élément apparait
dans un tableau.
*/

require 'FunctionLibrary.php';

$t=[10,20,30,40,50,10,30];
$x=0; // valeur entree par l'utilisateur
$nbocc=0; // nombre d'occurences

echo("\n");

feach1d($t);

$x=readline("entrez une valeur ");

echo("\n");

foreach($t as $v){ // met dans $nbocc le nombre de fois ou $t a la valeur est egale a celle demandee
    ($v==$x) ? $nbocc++ : null ;
}

echo($nbocc!=0) ? "La valeur ".$x." est presente ".$nbocc." fois dans le tableau\n\n" : "La valeur ".$x." n'est pas presente dans le tableau\n\n" ;

?>