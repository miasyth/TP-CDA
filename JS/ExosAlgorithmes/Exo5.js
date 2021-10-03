/*
Exercice 5
Ecrire un programme qui lit le prix HT d’un article, 
le nombre d’articles et le taux de TVA, et qui fournit le prix total TTC correspondant. 
Faire en sorte que des libellés apparaissent clairement.
*/

let pht="0"; //prix hors taxe
let tva="0"; //tva
let nba="0"; //nombre d'articles
let tot="0"; //total
let label='placeholder'; //texte outil

pht=window.prompt('entrez le prix hors taxe ');
tva=window.prompt('entrez la TVA (en pourcentage) ');
tva=tva/100+1;
nba=window.prompt("entrez le nombre d'article ");
label=window.prompt('entrez le nom du produit ');
tot=pht*tva*nba;
console.log("le prix de "+nba+" "+label+" est de "+tot+" euros TTC.");