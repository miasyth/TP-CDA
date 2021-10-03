<?php

/*
Exercice 3 :
Ecrire un algorithme permettant de calculer la somme, 
produit et moyenne des éléments d’un tableau.
*/

require 'FunctionLibrary.php';

$t=[10,20,30,40];

//$avg=(10+20+30+40)/4;

echo("\n");

feach1d($t);

//
echo("la somme du tableau est de ".array_sum1($t));
//echo("\n".array_sum($t));

//
echo("\nle produit du tableau est de ".array_product1($t));
//echo("\n".array_product($t));

//
echo("\nla moyenne du tableau est de ".array_average($t));
//echo("\n".$avg);

echo("\n\n")

?>