<?php

/*
Exercice 11 :
Ecrire un algorithme permettant d’insérer un élément dans un tableau (au début , au milieu ou à la
fin).
*/

require 'FunctionLibrary.php';

$t=[10,20,30,40,50,10,30,40];
$x=0; // valeur entree par l'utilisateur
$p=0; // case entree par l'utilisateur

echo("\n");

feach1d($t);

$x=readline("entrez un nombre ");
$p=readline("\nentrez une case du tableau ");

echo("\n");

$t=array_insert($t, $x, $p-1); // entre la valeur $x dans la case $p de $t

feach1d($t);


?>