<?php //fait
$i=0; //nombre a entrer
$s1='placeholder'; //texte outil

$i=readline('entrez un nombre ');
if($i>=1){
    $s1='positif';
} else if($i<0){
    $s1='negatif';
} else{
    $s1='neutre';
}
echo("le nombre entre est $s1.");
?>
