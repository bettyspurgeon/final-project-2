function myFunction(x) {
  x.classList.toggle("change");
}



function toggleMenu() {
  var menuBox = document.getElementById('menu-box');    
  if(menuBox.style.display == "flex") {
    menuBox.style.display = "none";
  }
  else {
    menuBox.style.display = "flex";
  }
}


