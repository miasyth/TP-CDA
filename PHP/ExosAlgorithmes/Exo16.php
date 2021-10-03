<?php //fait
$sex=0;
$age=0;

$sex=readline('entrez votre sexe (0 pour homme, 1 pour femme) ');
$age=readline('entrez votre age ');
if($sex==0 && $age>20 || $sex==1 && $age>=18 && $age<=35){
    echo('vous etes imposable');
} else{
    echo('vous n\'etes pas imposable');
}
?>