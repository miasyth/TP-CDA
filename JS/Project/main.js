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