<?php //fait
$i1=0 ; //heures
$i2=0 ; //minutes
$i3=0 ; //secondes


$i1=readline('entrez l\'heure actuelle (sans les minutes) ') ;
$i2=readline('entrez a present les minutes ') ;
$i3=readline('entrez enfin les secondes ') ;
if($i3==59){
	$i2++ ;
	$i3='00' ;
	if($i2==60){ 
    	$i1++ ;
    	$i2='00' ;
		if($i1==24){
			$i1='00' ;
		}
	}
} else { 
    $i3++ ;
}
echo("Dans une seconde, il sera $i1 heure $i2 minutes et $i3 secondes.");
?>