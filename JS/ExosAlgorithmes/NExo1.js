/*
Exercice 1
saisie utilisateur nb de 0 a 1000
boucle for qui va de 0 a 1000 et qui s'arrete quand elle trouve le nombre
*/

console.log("Exo1");

let i=0; //nombre a entrer

i=window.prompt("Entrez un nombre: ");
for(j=0 ; j<1000 ; j++){
    if(i==j){
        console.log("Je t'ai trouve, "+i+" = "+j);
        break;
    }
}