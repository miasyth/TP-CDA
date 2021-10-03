/*
Exercice 16
Les habitants de Zorglub paient l’impôt selon les règles suivantes :
• les hommes de plus de 20 ans paient l’impôt
• les femmes paient l’impôt si elles ont entre 18 et 35 ans
• les autres ne paient pas d’impôt
Le programme demandera donc l’âge et le sexe du Zorglubien, 
et se prononcera donc ensuite sur le fait que l’habitant est imposable.
*/

sex=0;
age=0;

sex=window.prompt('entrez votre sexe (0 pour homme, 1 pour femme) ');
age=window.prompt('entrez votre age ');
if(sex==0 && age>20 || sex==1 && age>=18 && age<=35){
    console.log('vous etes imposable');
} else{
    console.log('vous n\'etes pas imposable');
}