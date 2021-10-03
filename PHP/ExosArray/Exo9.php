<?php

/*
Exercice 9 :
Ecrire un algorithme permettant d’ajouter un élément a la fin d’un tableau.
*/

require 'FunctionLibrary.php';

$t=[10,20,30,40,50,10,30];
$x=0; // valeur entree par l'utilisateur

echo("\n");

feach1d($t);

$x=readline("entrez un nombre ");

echo("\n");

$t[count1($t)]=$x; // rajoute $x a la fin du tableau

feach1d($t);

?>