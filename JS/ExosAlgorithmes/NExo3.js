/*
Exercice 3
saisie de l'annee
verifie si l'annee est bissextile
*/

console.log("Exo3");

let i=0; // annee

i=prompt("Entrez l'annee a tester: ");


if(i%4==0 && i%100!=0 || i%100==0 && i%400==0){
    console.log("L'annee est bissextile");
} else {
    console.log("L'annee n'est pas bissextile");
}