//Get Modal Box
const modalBox = document.getElementById("modal-box");
//Get A tag that opens the modal box
const btns = document.getElementsByClassName("modal-btn");
//Get span that closes modal
const span = document.getElementsByClassName("close-btn")[0];

console.log(btns);


// When the user clicks on the button, open the modal
for (let btn of btns) {
   btn.onclick = function () {
        modalBox.style.display = "block";
    };
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modalBox.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modalBox) {
        modalBox.style.display = "none";
    }
};
