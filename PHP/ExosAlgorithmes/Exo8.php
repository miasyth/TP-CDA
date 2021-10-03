<?php //fait
$i1=0; //premier nombre a entrer
$i2=0; //deuxieme nombre a entrer
$s1='placeholder'; //texte outil

$i1=readline('entrez un nombre ');
$i2=readline('entrez un autre nombre ');
if($i1*$i2>=1){
    $s1='positive';
} else if($i1*$i2<0){
    $s1='negative';
}
echo("la somme des nombres entres est $s1.");
?>