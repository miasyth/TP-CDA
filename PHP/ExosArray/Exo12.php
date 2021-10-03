<?php

/*
Exercice 12 :
Ecrire un algorithme permettant de supprimer un élément dans un tableau.
*/

require 'FunctionLibrary.php';

$t=[10,20,30,40,50,10,30,40];
$p=0; // case entree par l'utilisateur

echo("\n");

feach1d($t);

$p=readline("entrez une case du tableau ");

echo("\n");

$t=array_del($t, $p-1); // supprime la case $p de %t

feach1d($t);

?>