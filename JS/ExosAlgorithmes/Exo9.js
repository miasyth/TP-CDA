/*
Exercice 9
Ecrire un algorithme qui demande trois noms à l’utilisateur 
et l’informe ensuite s’ils sont rangés ou non dans l’ordre alphabétique.
*/

s1='placeholder'; //premier mot
s2='placeholder'; //deuxieme mot
s3='placeholder'; //troisieme mot

s1=window.prompt('entrez un mot ');
s2=window.prompt('entrez un autre mot ');
s3=window.prompt('entrez un dernier mot ');
if (s1 < s2 && s2 < s3) { //compare les trois mots alphabetiquement grace a la fonction strcmp
    console.log('dans l\'ordre');
} else {
    console.log('pas dans l\'ordre');
}