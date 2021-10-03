<?php

/*
Exercice 13 :
Ecrire un algorithme permettant de trier par ordre croissant les éléments d’un tableau.
*/

require 'FunctionLibrary.php';

$t=[10,20,30,70,90,50,40];

echo("\n");

feach1d($t);

$t=array_sort($t); //range les valeurs de $t dans l'ordre croissant
//sort($t);

feach1d($t);

?>