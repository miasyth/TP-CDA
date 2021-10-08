/*
const t=[2,6];

for(val in t){
    console.log(val);
}

for(val of t){
    console.log(val);
}

const nt= t.map((val,index)=>{
    console.log(val+" "+index);
})
*/

let voiture={
    speed: 0,
    nbwheel: 5,
    type: "SUV",
    brand: "renault",
    model: "capture",
    accelerate: function(){
        this.speed++;
    }
}

console.log(voiture.speed);

voiture.accelerate();

console.log(voiture.speed);

let nvoiture = JSON.stringify(voiture);

console.log(nvoiture);

let mvoiture = JSON.parse(nvoiture);

console.log(mvoiture);