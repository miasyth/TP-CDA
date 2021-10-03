<?php

/*
Exercice 1
Ecrire un algorithme permettant de saisir 5 réelles au clavier, les stocker dans un tableau,
calculer leur somme et les afficher avec leur somme à l’écran.
*/

require 'FunctionLibrary.php';

$t=[];
$size=5;

echo("\n");

for ($i=0 ; $i<$size ; $i++){
    $t[$i]=readline('entrez un entier reel ');
}

echo("\nles nombres entres sont :\n");

feach1d($t);

echo("la somme de ces nombres est : ".array_sum1($t));

echo("\n\n");

?>