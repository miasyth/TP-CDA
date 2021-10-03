/*
Exercice 7
Ecrire un algorithme qui demande un nombre à l’utilisateur, 
et l’informe ensuite si ce nombre est positif ou négatif 
(on laisse de côté le cas où le nombre vaut zéro).
*/

let i=0; //nombre a entrer
let s1='placeholder'; //texte outil

i=window.prompt('entrez un nombre ');
if(i>=1){
    s1='positif';
} else if(i<0){
    s1='negatif';
}
console.log("le nombre entre est "+s1);