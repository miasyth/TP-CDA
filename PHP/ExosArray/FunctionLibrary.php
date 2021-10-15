<?php

function count1($array=[]){
    $i=0;

    foreach($array as $item){
        $i++;
    }

    unset($item);

    return $i;
}

function array_sum1($array=[]){ // fait la somme d'une ligne de $array
    $total=0;

    foreach ($array as $item) { // additionne toutes les valeurs de $array et entre le resultat dans $total
    $total+=$item;
    };

    unset($item);
    
    return $total;	
}

function array_diag_sum($array=[]){ //fait la somme des valeurs dans la diagonale de $array
    $total = 0;

    for($line=0; $line<count($array) ; $line++){
        for($column=0; $column<count($array) ; $column++){
            $total=($line==$column) ?  $total+$array[$line][$column] : $total ;
        }
    }
    
    return $total;	
}

function array_product1($array=[]){ // fait le produit d'une ligne de $array
    $total=1;

    foreach ($array as $item) { // multiplie toutes les valeurs de $array et entre le resultat dans $total
    $total*=$item;
    };

    unset($item);
    
    return $total;
}

function array_average($array=[]){ // fait la moyenne d'une ligne de $array
    $total=0;

    foreach ($array as $item) { // additionne toutes les valeurs de $array et entre le resultat dans $total
    $total+=$item;
    };

    unset($item);

    return $total/count($array); // divise $total par le nombre de valeurs de $array
}

function array_insert($array=[], $number=0, $pos=0){ // insere une case dans $array
    
    for($i=count($array)-1 ; $i>$pos-1 ; $i--){ // decale toutes les valeures de $array vers la droite a partir de la case $pos
        $array[$i+1]=$array[$i];
    }
    $array[$pos]=$number; // entre $number dans la case $pos d' $array

    return $array;
}

function array_del($array=[], $pos=0){ // supprime une case d' $array
    
    for($i=$pos ; $i<count($array)-1 ; $i++){ //decale toutes les valeures de $array vers la gauche jusqu'a la case $pos
        $array[$i]=$array[$i+1] ;
    }

    unset($array[count($array)-1]); // supprime la case restante a la fin d' $array
    
    return $array;
}

function array_sort($array=[]){ // range dans l'ordre croissant $array

    for($i=0 ; $i<count($array) ; $i++){
        for($j=0 ; $j<count($array) ; $j++){ // trie les valeures une par une et les range dans l'ordre croissant
            $x=0;
            ($array[$i]>$array[$j] && $i<$j) ? $x=$array[$i] and $array[$i]=$array[$j] and $array[$j]=$x : null ;
        }
    }

    return $array;
}

function array_rsort($array=[]){ // range dans l'ordre decroissant $array

    for($i=0 ; $i<count($array) ; $i++){
        for($j=0 ; $j<count($array) ; $j++){ // trie les valeures une par une et les range dans l'ordre decroissant
            $x=0;
            ($array[$i]>$array[$j]) ? $x=$array[$i] and $array[$i]=$array[$j] and $array[$j]=$x : null ;
        }
    }

    return $array;
}

function array_merge1($array=[], $array2=[]){ // ajoute $array2 a $array

    for($i=0 ; $i<count($array2) ; $i++){ // entre $array2 dans $array
        $array[count($array)]=$array2[$i];
    }

    return $array;
}

function array_generate($array=[], $vertical=0, $horizontal=0){ // genere un tableau avec les dimensions $vertical et $horizontal et les valeures entrees par l'utilisateur
    
    for ($i=0 ; $i<$vertical ; $i++) { // cree les cases avec les dimensions donnees et demande a l'utilisateur la valeur a placer a l'interieur
        for ($j=0 ; $j<$horizontal ; $j++) {
            $array[$i][$j]=readline("entrez une valeur pour la case ".($i+1).",".($j+1)." "); 
        }
    }

    return $array;
}

function array_reverse1($array=[]){
    $count=count($array);

    for($i=0 ; $i<$count/2 ; $i++){
        $array[$count]=$array[$i];
        $array[$i]=$array[$count-$i-1];
        $array[$count-$i-1]=$array[$count];
    }

    unset($array[$count]);

    return $array;
}

function r(){ // verifie si l'utilisateur souhaite une repetition avec controle de l'entree
    $control='A';

    $control=readline('voulez vous continuer? O/N ');
    while($control!='O' && $control!='N'){ // si $controle est different de "O" et "N" redemande a l'utilisateur de rentrer une valeur correcte
        $control=readline('vous avez entre un mauvais caractere, veuillez entrer "O" ou "N" ');
    }

    return $control;
}

function matrice_product($array=[], $array2=[]){ // fait le produit des matrices $array et $array2
    $array3=[];

    $ligne=count($array);
    $colonne=count($array[0]);
    $colonne2=count($array2);
    $ligne2=count($array2[0]);

    if($colonne != $ligne2){ // previens si les matrices ne sont pas compatibles
        echo("matrices incompatibles ");
        exit;
    }
    
    for($lignei=0; $lignei<$ligne ; $lignei++){ // fait le produit matriciel (pour plus d'info: "https://fr.wikipedia.org/wiki/Produit_matriciel")
        for($colonne2i=0; $colonne2i<$colonne ; $colonne2i++){
            $array3[$lignei][$colonne2i]=0;
            for($j=0; $j<$colonne2 ; $j++){
                $array3[$lignei][$colonne2i]+=$array[$lignei][$j]*$array2[$j][$colonne2i];
            }
        }
    }


    return $array3;
}

function feach1d($array=[]){   // affichage $array (1 dimension)
    
    foreach($array as $key => $v){ // affiche toutes les valeurs de $array
        echo($key<count($array)-1) ? "|".$v : "|".$v."|" ;
    }

    unset($key, $v);

    echo("\n\n");
}

function feach2d($array=[]){ // affichage $array (2 dimensions)
    
    foreach($array as $v){ // affiche toutes les valeurs de $array
        foreach($v as $v2){
            echo("|".$v2);
        }
        echo("|\n");
    }

    unset($v, $v2);

    echo("\n");
}

function feach3d($array=[]){ // affichage $array (3 dimensions)
    
    foreach($array as $v){ // affiche toutes les valeurs de $array
        foreach($v as $v2){
            foreach ($v2 as $v3){
                echo("|".$v3);
            }
            echo("|\n");
        }
        echo("\n");
    }
    
    unset($v, $v2, $v3);
}

?>