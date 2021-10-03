/*
Exercice 6
Ecrire un algorithme utilisant des variables de type chaîne de caractères, 
et affichant quatre variantes possibles de la célèbre 
« belle marquise, vos beaux yeux me font mourir d’amour ». 
On ne se soucie pas de la ponctuation, ni des majuscules.
*/

let t=(['belle marquise ','vos beaux yeux ','me font mourir d\'amour ']);
let count=t.length;
for(i=0 ; i<count+1 ; i++){
    let x=i;
    let y=i+1;
    let z=i+2;
    if(x>count-1){
        x=x-count;
    }
    if(y>count-1){
        y=y-count;
    }
    if(z>count-1){
        z=z-count;
    }
    if(i<count){
        console.log(t[x]+t[y]+t[z]+"\n");
    }
    if(i==count){
        console.log(t[y]+t[x]+t[z]+"\n");
    }
}