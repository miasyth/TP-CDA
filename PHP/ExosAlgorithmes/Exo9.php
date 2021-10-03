<?php //fait
$s1='placeholder'; //premier mot
$s2='placeholder'; //deuxieme mot
$s3='placeholder'; //troisieme mot

$s1=readline('entrez un mot ');
$s2=readline('entrez un autre mot ');
$s3=readline('entrez un dernier mot ');
if (strcmp($s1, $s2) < 0 && strcmp($s2, $s3) < 0) { //compare les trois mots alphabetiquement grace a la fonction strcmp
    echo('dans l\'ordre');
} else {
    echo('pas dans l\'ordre');
}
?>