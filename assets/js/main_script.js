/*=========== MENU=====================*/
checkInput = document.getElementById("check");
navMenu = document.getElementById("main-nav");
iconMenu = document.getElementById("icon-menu");


checkInput.addEventListener("change", function(){
  if(checkInput.checked===true){
    navMenu.style.display ="flex";
    iconMenu.setAttribute("class", "fa fa-times");
  }else{
    navMenu.style.display ="none";
    iconMenu.setAttribute("class", "fa fa-bars");
  }
  
});