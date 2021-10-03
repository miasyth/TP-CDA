<?php

/*
Exercice 5 :
Ecrire un algorithme permettant de chercher 
toutes les occurrences d’un élément dans un tableau.
*/

require 'FunctionLibrary.php';

$t=[10,20,30,40,50,10,30];
$x=0; // valeur entree par l'utilisateur
$y=0; // 

$count=count1($t);

echo("\n");

feach1d($t);

$x=readline("entrez une valeur ");

foreach($t as $v){ // teste si $x est present dans $t
    ($v==$x) ? $y=1 : null ;
}

if($y==1){
    echo("\nLa valeur ".$x." est presente dans les cases: ");

    foreach($t as $key => $v){ // liste les cases qui de $t qui correspondent a $x
            echo($v==$x && $y==1) ? ($key+1) : (($v==$x) ? ", ".($key+1) : null);
            ($v==$x) ? $y=0 : null;
    }

    echo(" du tableau\n\n");
} else {
    echo("\nLa valeur ".$x." n'est pas presente dans le tableau\n\n");
}

?>