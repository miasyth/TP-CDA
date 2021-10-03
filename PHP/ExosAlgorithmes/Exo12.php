<?php //fait
$i1=0; //age
$s1='placeholder'; //texte outil

$i1=readline('Entrez votre age ');
if($i1>=6 && $i1<=7){ 
	$s1='Poussin' ;
} else If($i1>=8 && $i1<=9){ 
	$s1='Pupille' ;
} else If($i1>=10 && $i1<=11){ 
	$s1='Minime' ;
} else If($i1>=12){ 
	$s1='Cadet' ;
}if($s1!='placeholder'){ 
	echo("Vous etes dans la categorie $s1.") ;
} else { 
	echo('Vous n\'etes dans aucune categorie.') ;
}
?>