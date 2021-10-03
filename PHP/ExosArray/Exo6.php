<?php

/*
Exercice 6 :
Ecrire un algorithme permettant de chercher la première occurrence d’un élément dans un tableau.
*/

require 'FunctionLibrary.php';

$t=[10,20,30,40,50,10,30];
$x=0; // valeur entree par l'utilisateur
$focc=-1; // premiere occurence

$count=count1($t);

echo("\n");

feach1d($t);

$x=readline("entrez une valeur ");

echo("\n");

foreach($t as $key => $v){ // met dans $focc la premiere case qui correspond a $t ou la valeur est egale a celle demandee
    if($v==$x){
        $focc=$key+1;
        echo("La valeur ".$x." est presente pour la premiere fois dans la case ".$focc." du tableau\n\n");
        break;
    } else if($key==$count-1){
        echo("La valeur ".$x." n'est pas presente dans le tableau\n\n");
    }
}
?>