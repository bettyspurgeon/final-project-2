
  function displayRentProps() {
    var rentProps = document.getElementById('rent-properties-list');   
    var buyProps = document.getElementById('buy-properties-list');   
        rentProps.style.display = "flex";
        buyProps.style.display = "none";
  }


function displayBuyProps() {
    var rentProps = document.getElementById('rent-properties-list');   
    var buyProps = document.getElementById('buy-properties-list');   
    rentProps.style.display = "none"
    buyProps.style.display = "flex";
  }

function goToRegisterPage() {
    location.href = "/register";
  }
