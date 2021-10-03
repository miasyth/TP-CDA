<?php
$age=0 ;
$anc=0 ; // $anciennete permis
$acc=0 ; // $accident
$fid=0 ; // $fidelite
$is1=5 ; // indicateur de $s1
$s1='placeholder' ; // texte outil

$age=readline('entrez votre age ');
$anc=readline('entrez la duree de votre permis (en annees) ');
$acc=readline('entrez le nombre d\'accident dont vous etes responsable ');
$fid=readline('entrez le nombre d\'annees depuis votre debut de contrat ');

// code tarif encore plus optimise
$is1=($age<25 && $anc<2 && $acc==0 || $age<25 && $anc>2 && $acc==1 || $age>25 && $anc<2 && $acc==1|| $age>25 && $anc>2 && $acc==2) ? 0 
	: (($age<25 && $anc>2 && $acc==0 || $age>25 && $anc<2 && $acc==0 || $age>25 && $anc>2 && $acc==1) ? 1 
	: (($age>25 && $anc>2 && $acc==0) ? 2 
	: null));

// verif fidelite optimise
($fid>=5) ? $is1++ : null ;

// conversion tarif en texte optimise
$s1=($is1==0) ? 'rouge' : (($is1==1) ? 'orange' : (($is1==2) ? 'vert' : (($is1==3) ? 'bleu' : null)));

// resultat optimise
echo(($is1!=5) ? "vous etes eligible au tarif $s1." : "nous ne pouvons malheureusement pas vous assurer.");

/*
//archives

//code tarif

if($age<25 && $anc<2 && $acc==0){
	$is1=0 ;
} else if($age<25 && $anc>2 || $age>25 && $anc<2){
	if($acc==0){
		$is1=1 ;
	} else if($acc==1){
		$is1=0 ;
	}
} else if($age>25 && $anc>2){
	if($acc==0){
		$is1=2 ;
	} else if($acc==1){
		$is1=1 ;
	} else if($acc==2){
		$is1=0 ;
	}
}


// code tarif optimise

if($age<25 && $anc<2 && $acc==0 || $age<25 && $anc>2 && $acc==1 || $age>25 && $anc<2 && $acc==1|| $age>25 && $anc>2 && $acc==2){
	$is1=0 ;
} else if($age<25 && $anc>2 && $acc==0 || $age>25 && $anc<2 && $acc==0 || $age>25 && $anc>2 && $acc==1){
	$is1=1 ;
} else if($age>25 && $anc>2 && $acc==0){
	$is1=2 ;
}


//code tarif encore plus optimise

$is1=($age<25 && $anc<2 && $acc==0 || $age<25 && $anc>2 && $acc==1 || $age>25 && $anc<2 && $acc==1|| $age>25 && $anc>2 && $acc==2) ? 0 : null ;
//$is1=($age<25 && $anc>2 && $acc==0 || $age>25 && $anc<2 && $acc==0 || $age>25 && $anc>2 && $acc==1) ? 1 : null ;
//$is1=($age>25 && $anc>2 && $acc==0) ? 2 : null ;



// verif fidelite

if($fid>=5){
	$is1++ ;
}


// conversion tarif en texte

if($is1==0){
	$s1='rouge';
} else if($is1==1){
	$s1='orange';
} else if($is1==2){
	$s1='vert';
} else if($is1==3){
	$s1='bleu';
}


// resultat

if($is1!=5){
    echo("vous etes eligible au tarif $s1.");
} else {
    echo("nous ne pouvons malheureusement pas vous assurer.");
}

*/
?>