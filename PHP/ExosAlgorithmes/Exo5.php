<?php //fait
$pht="0"; //prix hors taxe
$tva="0"; //tva
$nba="0"; //nombre d'articles
$tot="0"; //total
$label='placeholder'; //texte outil

$pht=readline('entrez le prix hors taxe ');
$tva=readline('entrez la TVA (en pourcentage) ');
$tva=$tva/100+1;
$nba=readline('entrez le nombre d\'article ');
$label=readline('entrez le nom du produit ');
$tot=$pht*$tva*$nba;
echo("le prix de $nba $label est de $tot euros TTC.");
?>