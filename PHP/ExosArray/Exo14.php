<?php

/*
Exercice 14 :
Ecrire un algorithme permettant de trier par ordre décroissant les éléments d’un tableau.
*/

require 'FunctionLibrary.php';

$t=[10,20,30,70,90,50,40];

echo("\n");

feach1d($t);

$t=array_rsort($t); //range les valeurs de $t dans l'ordre decroissant
//rsort($t);

feach1d($t);

?>