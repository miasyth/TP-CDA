<?php

/*
Exercice 15 :
Ecrire un algorithme permettant de fusionner les éléments de deux tableaux T1 et T2 dans un autre
tableau T.
N.B :
N : nombre des éléments du tableau T1
M : nombre des éléments du tableau T2
*/

require 'FunctionLibrary.php';

$t=[10,20,30];
$t2=[40,50,60];

echo("\n");

feach1d($t);

$t=array_merge1($t, $t2); // verse $t2 a la suite de $t

feach1d($t2);

feach1d($t);

?>