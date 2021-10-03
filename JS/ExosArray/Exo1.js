/*
Exercice 1
Ecrire un algorithme permettant de saisir 5 réelles au clavier, les stocker dans un tableau,
calculer leur somme et les afficher avec leur somme à l’écran.
*/

t=[];
size=5;

console.log("\n");

for (i=0 ; i<size ; i++){
    t[i]=window.prompt('entrez un entier reel ');
}

console.log("\nles nombres entres sont :\n");

feach1d(t);

console.log("\nla somme de ces nombres est : "+array_sum1(t));

console.log("\n\n");