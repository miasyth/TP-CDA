<?php //fait
$i1=0 ; //heures
$i2=0 ; //minutes


$i1=readline('entrez l\'heure actuelle (sans les minutes) ') ;
$i2=readline('entrez a present les minutes ') ;
if($i2==59){ 
    $i1++ ;
    $i2='00' ;
    if($i1==24){
        $i1='00' ;
    }
} else { 
    $i2++ ;
}
echo("Dans une minute, il sera $i1 heures $i2.");
?>