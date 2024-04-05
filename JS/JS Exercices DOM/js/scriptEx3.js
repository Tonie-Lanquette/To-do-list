let count = document.querySelector("#counter");
let value = "";
let btns = document.querySelectorAll(".btn");
changeColor();
btns.forEach((bouton) => {
  bouton.addEventListener("click", () => {
    changeValue(bouton);
    changeColor();
  });
});

function changeValue(bouton) {
  if (bouton.classList.contains("increase")) {
    value++;
  }

  if (bouton.classList.contains("decrease")) {
    value--;
  }

  if (bouton.classList.contains("reset")) {
    value = 0;
  }
  count.innerText = value;
}

function changeColor() {
  if (value > 0) {
    count.style.color = "green";
  } else if (value < 0) {
    count.style.color = "red";
  } else {
    count.style.color = "grey";
  }
}
