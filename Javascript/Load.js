function LOAD_SP(){
  if(window.innerWidth > 600){document.getElementById("Background1_div").style.height = window.innerHeight - window.pageYOffset + "px";
  document.getElementById("Background1_div2").style.height = window.innerHeight + "px";
  document.getElementById("Sportarten_head").style.opacity = 1 - (window.pageYOffset / 100);}
  if(window.pageYOffset>window.innerHeight){document.getElementById("Background1_div").style.height = "0px";}
  if(window.innerWidth < 600){document.getElementById("Background1_div").style.display = "none";document.getElementById("Background1_div2").style.display =  "none"}
}
function LOAD_TX(){
  if(window.innerWidth > 600){document.getElementById("Background1_div").style.height = (window.innerHeight*0.4) - window.pageYOffset + "px";
  document.getElementById("Background1_div2").style.height = window.innerHeight*0.4 + "px";}
  document.getElementById("Pfad").style.top = window.innerHeight - 70 + "px";
  if(window.pageYOffset>400){document.getElementById("Background1_div").style.height = "0px";}
}
function LOAD_Al(){
  if(window.innerWidth > 600){document.getElementById("Background1_div").style.height = (window.innerHeight-300) - window.pageYOffset + "px";
  document.getElementById("Background1_div2").style.height = window.innerHeight-300 + "px";}
  if(window.pageYOffset>window.innerHeight-300){document.getElementById("Background1_div").style.height = "0px";}
  document.getElementById("Background_H1").style.opacity = 1 - (window.pageYOffset / 100);
}
function LOAD_ALL(){
}
