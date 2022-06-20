let d=document.querySelector('.prod');
let btn=document.querySelector('.more');
let ev=btn.addEventListener("click",function(){
  for(let i=0;i<4;i++){
  let div=document.createElement('div');
  let img=document.createElement("img");
  img.className="card-img-top";
  img.src="images/alex-haigh-fEt6Wd4t4j0-unsplash.jpg";
  let db=document.createElement("div");
  let h=document.createElement("h5");
   h.appendChild(document.createTextNode("Adidas"));
   let p=document.createElement("p");
   p.appendChild(document.createTextNode("Cartoon Astronaut T-shirts"));
   let h4=document.createElement("h4");
   h4.appendChild(document.createTextNode("25$"));
   h4.style.marginLeft="25px";
   let a =document.createElement("a");
   a.className="panier btn btn-primary";
   a.id="pan";
   let i=document.createElement("i");
   i.classList="fa-solid fa-cart-plus";
   a.appendChild(i);
   db.appendChild(h);
   db.appendChild(p);
   db.appendChild(h4);
   db.append(a);
   div.appendChild(img);
   div.appendChild(db);
  div.className="card col-3";
  div.style.width="18rem";
  div.style.backgroundColor="#d0b2a9";
d.appendChild(div);}
})

$(document).ready(function(){
$(".pro").counterUp({
delay:10,
time:1000
})
})