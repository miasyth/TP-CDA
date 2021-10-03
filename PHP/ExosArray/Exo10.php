<?php

/*
Exercice 10 :
Ecrire un algorithme permettant de modifier un élément dans un tableau.
*/

require 'FunctionLibrary.php';

$t=[10,20,30,40,50,10,30];
$x=0; // valeur entree par l'utilisateur
$p=0; // case entree par l'utilisateur

echo("\n");

feach1d($t);

$x=readline("entrez un nombre ");
$p=readline("\nentrez une case du tableau ");

echo("\n");

$t[$p-1]=$x; // remplace la case $p par la valeur $x

feach1d($t);

?>