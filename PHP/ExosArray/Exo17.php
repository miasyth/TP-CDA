<?php

/*
Exercice 17 :
Ecrire un algorithme qui calcule la somme des éléments de la diagonale d’une matrice carrée M(n,n)
donnée.
*/

require 'FunctionLibrary.php';

$t=[[1,2,3],
    [4,5,6],
    [7,8,9]];

echo("\n");

feach2d($t);

echo("la somme de la diagonale est de ".array_diag_sum($t));

echo("\n\n");

?>