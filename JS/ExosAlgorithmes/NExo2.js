/*
Exercice 3
saisie utilisateur poids et taille
calcul de l'imc de la personne
*/

console.log("Exo2");

let i=0; // poids
let j=0; // taille
let x=0; // imc

i=prompt("Entrez votre poids (en kg): ");
j=prompt("Entrez votre taille (en m): ");

j*=j;

x=i/j;

console.log("Votre imc est de " + x);