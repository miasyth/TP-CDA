<?php

/*
Exercice 16 :
Ecrire un algorithme permettant de saisir les données d’un tableau à deux dimensions (10,4), de faire
leur somme, produit et moyenne et de les afficher avec les résultats de calcul à l’écran.
*/

require 'FunctionLibrary.php';

$size=2; // vertical
$size2=4; // horizontal
$t=[];

echo("\n");

$t=array_generate($t, $size, $size2);

echo("\n");

feach2d($t);

//
for($i=0 ; $i<$size ; $i++){
echo("la somme de la ligne $i est de ".array_sum1($t[$i])."\n");
}

//
for($i=0 ; $i<$size ; $i++){
echo("\nle produit de la ligne $i est de ".array_product1($t[$i]));
}

echo("\n");

//
for($i=0 ; $i<$size ; $i++){
echo("\nla moyenne de la ligne $i est de ".array_average($t[$i]));
}

echo("\n\n")

?>