<?php

/*
Exercice 18 :
Ecrire un algorithme permettant d’effectuer le produit des matrices A(n,m) et B(m,p) .
n ,m et p données (par exemple n=4,m=5,p=3 ).
N.B :
Pour pouvoir faire le produit de deux matrices, il faut absolument que le nombre de colonnes
de la première soit égal au nombre de lignes de la deuxième.
*/

require 'FunctionLibrary.php';

$t=[[1,2,3],
    [4,5,6]];
$t2=[[9,8,7],
     [6,5,4],
     [3,2,1]];
$t3=[];

echo("\n");

$t3=matrice_product($t, $t2);

feach2d($t);

feach2d($t2);

feach2d($t3);

?>