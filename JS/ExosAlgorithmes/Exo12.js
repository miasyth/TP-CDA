/*
Exercice 12
Ecrire un algorithme qui demande l’âge d’un enfant à l’utilisateur. 
Ensuite, il l’informe de sa catégorie :
• "Poussin" de 6 à 7 ans
• "Pupille" de 8 à 9 ans
• "Minime" de 10 à 11 ans
• "Cadet" après 12 ans
Peut-on concevoir plusieurs algorithmes équivalents menant à ce résultat ?

   Ecrire("Vous n'êtes dans aucune catégorie")
….
*/

i1=0; //age
s1='placeholder'; //texte outil

i1=window.prompt('Entrez votre age ');
if(i1>=6 && i1<=7){ 
	s1='Poussin' ;
} else if(i1>=8 && i1<=9){ 
	s1='Pupille' ;
} else if(i1>=10 && i1<=11){ 
	s1='Minime' ;
} else if(i1>=12){ 
	s1='Cadet' ;
}if(s1!='placeholder'){ 
	console.log("Vous etes dans la categorie "+s1) ;
} else { 
	console.log('Vous n\'etes dans aucune categorie.') ;
}