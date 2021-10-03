/*
Exercice 8
Ecrire un algorithme qui demande deux nombres à l’utilisateur 
et l’informe ensuite si leur produit est négatif ou positif 
(on laisse de côté le cas où le produit est nul). 
Attention toutefois : on ne doit pas calculer le produit des deux nombres.
*/

i1=0; //premier nombre a entrer
i2=0; //deuxieme nombre a entrer
s1='placeholder'; //texte outil

i1=window.prompt('entrez un nombre ');
i2=window.prompt('entrez un autre nombre ');
if(i1*i2>=1){
    s1='positive';
} else if(i1*i2<0){
    s1='negative';
}
console.log("la somme des nombres entres est "+s1);