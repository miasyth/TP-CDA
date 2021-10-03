/*
Exercice 14
De même que le précédent, 
cet algorithme doit demander une heure et en afficher une autre. 
Mais cette fois, il doit gérer également les secondes, 
et afficher l'heure qu'il sera une seconde plus tard.
Par exemple, si l'utilisateur tape 21, puis 32, puis 8, 
l'algorithme doit répondre : 
"Dans une seconde, il sera 21 heure(s), 32 minute(s) et 9 seconde(s)".
NB : là encore, on suppose que l'utilisateur entre une date valide.
*/

i1=0 ; //heures
i2=0 ; //minutes
i3=0 ; //secondes


i1=window.prompt('entrez l\'heure actuelle (sans les minutes) ') ;
i2=window.prompt('entrez a present les minutes ') ;
i3=window.prompt('entrez enfin les secondes ') ;
if(i3==59){
	i2++ ;
	i3='00' ;
	if(i2==60){ 
    	i1++ ;
    	i2='00' ;
		if(i1==24){
			i1='00' ;
		}
	}
} else { 
    i3++ ;
}
console.log("Dans une seconde, il sera "+i1+" heure "+i2+" minutes et "+i3+" secondes.");