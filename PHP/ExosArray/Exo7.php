<?php

/*
Exercice 7 :
Ecrire un algorithme permettant de chercher la dernière occurrence d’un élément dans un tableau.
*/

require 'FunctionLibrary.php';

$t=[10,20,30,40,50,10,30];
$x=0; // valeur entree par l'utilisateur
$locc=-1; // derniere occurence

$count=count1($t);

echo("\n");

feach1d($t);

$x=readline("entrez une valeur ");

echo("\n");

foreach(array_reverse1($t) as $key => $v){ // met dans $locc la derniere case qui correspond a $t ou la valeur est egale a celle demandee
    if($v==$x){
        $locc=$count-$key;
        echo("La valeur ".$x." est presente pour la derniere fois dans la case ".$locc." du tableau\n\n");
        break;
    } else if($key==$count-1){
        echo("La valeur ".$x." n'est pas presente dans le tableau\n\n");
    }
}

?>