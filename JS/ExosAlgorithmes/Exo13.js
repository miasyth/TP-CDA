/*
Exercice 13
Cet algorithme est destiné à prédire l'avenir, et il doit être infaillible !
Il lira au clavier l’heure et les minutes, 
et il affichera l’heure qu’il sera une minute plus tard. 
Par exemple, si l'utilisateur tape 21 puis 32, l'algorithme doit répondre :
"Dans une minute, il sera 21 heure(s) 33".
NB : on suppose que l'utilisateur entre une heure valide. 
Pas besoin donc de la vérifier.
*/

i1=0 ; //heures
i2=0 ; //minutes


i1=window.prompt('entrez l\'heure actuelle (sans les minutes) ') ;
i2=window.prompt('entrez a present les minutes ') ;
if(i2==59){ 
    i1++ ;
    i2='00' ;
    if(i1==24){
        i1='00' ;
    }
} else { 
    i2++ ;
}
console.log("Dans une minute, il sera "+i1+" heures "+i2);