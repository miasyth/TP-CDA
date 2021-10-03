age=0 ;
anc=0 ; // anciennete permis
acc=0 ; // accident
fid=0 ; // fidelite
is1=5 ; // indicateur de s1
s1='placeholder' ; // texte outil

age=window.prompt('entrez votre age ');
anc=window.prompt('entrez la duree de votre permis (en annees) ');
acc=window.prompt('entrez le nombre d\'accident dont vous etes responsable ');
fid=window.prompt('entrez le nombre d\'annees depuis votre debut de contrat ');

// code tarif encore plus optimise
is1=(age<25 && anc<2 && acc==0 || age<25 && anc>2 && acc==1 || age>25 && anc<2 && acc==1|| age>25 && anc>2 && acc==2) ? 0 
	: ((age<25 && anc>2 && acc==0 || age>25 && anc<2 && acc==0 || age>25 && anc>2 && acc==1) ? 1 
	: ((age>25 && anc>2 && acc==0) ? 2 
	: null));

// verif fidelite optimise
(fid>=5) ? is1++ : null ;

// conversion tarif en texte optimise
s1=(is1==0) ? 'rouge' : ((is1==1) ? 'orange' : ((is1==2) ? 'vert' : ((is1==3) ? 'bleu' : null)));

// resultat optimise
console.log((is1!=5) ? "vous etes eligible au tarif s1." : "nous ne pouvons malheureusement pas vous assurer.");
