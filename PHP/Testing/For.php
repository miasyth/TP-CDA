<?php

/*
//V1
for($c='O'; $c=='O'; $c=readline('voulez vous continuer? O/N ')){
    echo("tour de boucle \n");
}
*/

//V2 avec controle de l'entree
function r(){
    $c='A';

    $c=readline('voulez vous continuer? O/N ');
    while($c!='O' && $c!='N'){
        $c=readline('vous avez entre un mauvais caractere, veuillez entrer "O" ou "N" ');
    }
    return($c);
}


for($c='O'; $c=='O'; $c=r()){
    echo("tour de boucle \n");
}

?>