
//   function displayRentProps() {
//     var rentProps = document.getElementById('rent-properties-list');   
//     var buyProps = document.getElementById('buy-properties-list');   
//         rentProps.style.display = "flex";
//         buyProps.style.display = "none";
//   }


// function displayBuyProps() {
//     var rentProps = document.getElementById('rent-properties-list');   
//     var buyProps = document.getElementById('buy-properties-list');   
//     rentProps.style.display = "none"
//     buyProps.style.display = "flex";
//   }




console.clear();
function typingEffect(element,speed){
  let text=element.innerHTML;
  element.innerHTML="";
  let i=0;
  let timer=setInterval(function(){
    if(i<text.length){
      element.append(text.charAt(i))
      i++;
    }else{
      clearInterval(timer);

    }
  },speed)
  
}

// typingEffect(element, speed);





const h1 = document.querySelector('h1');
typingEffect(h1,200);












function goToRegisterPage() {
    location.href = "/register";
  }
