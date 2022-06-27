
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



const h1 = document.querySelector('h1');

console.clear();
function typingEffect(element,speed){
  let text=element.getAttribute('data-text');
  element.innerHTML="";
  let i=0;
  let timer=setInterval(function(){
    if(i<text.length){
      element.append(text.charAt(i))
      i++;
    }else{
      clearInterval(timer);
      setTimeout(function(){typingEffect(h1, 200)}, 2000)

    }
  },speed)
  
}



typingEffect(h1, 200);












function goToRegisterPage() {
    location.href = "/register";
  }
