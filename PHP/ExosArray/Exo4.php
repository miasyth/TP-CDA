<?php

/*
Exercice 4 :
Ecrire un algorithme permettant de consulter un élément d’un tableau.
*/

require 'FunctionLibrary.php';

$t=[10,20,30,40];
$x=0; // valeur entree par l'utilisateur

echo("\n");

feach1d($t);

$x=readline("entrez une valeur entre 1 et 4 ")-1;

echo($t[$x]);

echo("\n\n");

?>