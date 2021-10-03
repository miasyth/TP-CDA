<?php //fait
$i1=0 ; //nb photocopies
$i2=0 ; //prix


$i1=readline('entrez le nombre de photocopies ') ;

if($i1<10){
    $i2=$i1*0.10 ;
}else if($i1>=10){ 
	$i1=$i1-10 ;
	$i2=$i2+10*0.10 ;
	if($i1>0 && $i1<20){
        $i2=$i2+$i1*0.09 ;
    } else if($i1>=20){
		$i1=$i1-20 ;
		$i2=$i2+20*0.09 ;
        $i2=$i2+$i1*0.08 ;
    }
}
echo("le montant a payer est $i2 euros");

?>