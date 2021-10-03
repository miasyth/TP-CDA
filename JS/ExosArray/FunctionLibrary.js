
const feach1d=(array)=>{   // affichage array (1 dimension)
    
    /*
    array.forEach((item, index) => {
        console.log(item) //value
        console.log(index) //index
      })
    */
    
    array.forEach((item ,index) => { // affiche toutes les valeurs de array
        console.log(index<array.length-1) ? "|"+item : "|"+item+"|" ;
    })
    
}
/*
const feach2d=(array)=>{ // affichage array (2 dimensions)
    
    array.forEach(item){ // affiche toutes les valeurs de array
        foreach(item as item2){
            console.log("|".item2);
        }
        console.log("|\n");
    }
}
*/