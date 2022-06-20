
let back=document.querySelector(".back");
let farward = document.querySelector(".farward");
let memb=document.getElementById("membr");
let i=1;
let i2=1;
let k=180;
let slide= farward.addEventListener("click",function(){
if(k>=-2070){
    k= k-300;

  memb.style.left=`${k}px`;
}
else{ 

    k=400;
}
})
